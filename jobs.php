<?php
include_once './php/dbcon.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jobs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="src\styles.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
</head>

<body>

    <div class="header">
        <h1> <a href="home.php">JOBz</a> </h1>
    </div>

    <div class="topnav" id="myTopNav">
        <a href="home.php">Home</a>
        <a href="categories.php">Categories</a>
        
        <?php if(isset($_SESSION['company_id'])): ?>
      <a href="Ashini/Postajob.php">Post a job</a>
    <?php else: ?>
    <?php endif; ?>

        <a href="applicants.php">Applicants</a>
        <a href="jobs.php">Jobs</a>
        <a href="contact.php">Contact us</a>
        <a href="about.php">About us</a>
        
        <?php if(isset($_SESSION['company_id']) || isset($_SESSION['job_seeker_id'])): ?>
      <a class="link" id="login" href="php/logout.php" style="text-decoration:none">logout</a>
    <?php else: ?>
      <a class="link" id="login" href="Thushan\Login.php" style="text-decoration:none">login</a>
    <?php endif; ?>

    <?php if(isset($_SESSION['company_id'])): ?>
      <a id="profile" href="Umesh/companyPro.php">Profile</a>
    <?php elseif(isset($_SESSION['job_seeker_id'])): ?>
    <a id="profile" href="Umesh/profile.php">Profile</a>
    <?php endif; ?>

        <a href="javascript:void(0);" class="icon" onclick="mobNav()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div class="row">

        <div class="column side">
            <h2>Filter your search </h2>
            <p onclick="hideNav()" title="Hide the filter">V</p><br><br>
            <form id="hide-fil">

                Job Type:

                <select>
                    <option value="se">Software Engineer</option>
                    <option value="na">Network Admin</option>
                    <option value="cs">Cyber Security</option>
                    <option value="eng">Full Stack Web Developer</option>
                </select>

                <div class="salary-slider">
                    <br>
                    Salary Range: <span id="salary"></span>
                    <br>
                    <input type="range" min="35000" max="200000" value="100000" class="slider" id="salaryRange">
                </div>
                <br>
                <input type="checkbox">Goverment Jobs <br>
                <input type="checkbox">Walk-in interview <br>
                <input type="checkbox">NGO Jobs <br>
                <input type="checkbox">Full-time <br>
                <input type="checkbox">Part-time <br>
                <input type="checkbox">Work from home <br>
                <input type="checkbox">Internship <br>
                <button class="filter" onclick="window.location.href='#filter'">Filter</button>

            </form>
        </div>

        <div class="column middle">

                <div class="job-post">
                        <?php
                          $countSql = "SELECT * FROM job;";
                          $countResult =  mysqli_query($conn, $countSql);
                          $count = mysqli_num_rows($countResult);
                  
                          $sql = "SELECT * FROM job where job_id = $count;";
                          $result = mysqli_query($conn, $sql);
                          $resultCheck = mysqli_num_rows($result);
                          $count = $count -1;
                          
                  
                          if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                              $job_id = $row['job_id'];
                              $job_name = $row['job_name'];
                              $company_name = $row['company_name'];
                              $job_type = $row['job_type'];
                              $location = $row['location'];
                            }
                          }
                  
                        ?>
                          <h2><?php echo $job_name?></h2>
                  
                          <table style="width:100%">
                            <tr>
                              <th rowspan="5">
                                <img src="src\wso2.png" alt="WSO2">
                              </th>
                            </tr>
                            <tr>
                              <th>Company:</th>
                              <td><?php echo $company_name?></td>
                            </tr>
                            <tr>
                              <th>Job Type:</th>
                              <td><?php echo $job_type?></td>
                            </tr>
                            <tr>
                              <th>Location:</th>
                              <td><?php echo $location?></td>
                            </tr>
                            <tr>
                              <th>Date:</th>
                              <td>5/10/2019</td>
                            </tr>
                            <tr>
                              <th></th>
                              <th></th>
                              <td>
                              <form method="get" action="jobPost.php">
                                <input type="hidden" name="id" value=<?php echo $job_id?>>
                                <input type="submit" class="view-more" value="View More">
                              </form>
                              </td>
                            </tr>
                          </table><br>
                  
                        </div>
                  
                        <div class="job-post">
                  
                          <?php
                          $sql = "SELECT * FROM job where job_id = $count;";
                          $result = mysqli_query($conn, $sql);
                          $resultCheck = mysqli_num_rows($result);
                          $count = $count -1;
                  
                          if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                              $job_id = $row['job_id'];
                              $job_name = $row['job_name'];
                              $company_name = $row['company_name'];
                              $job_type = $row['job_type'];
                              $location = $row['location'];
                            }
                          }
                  
                        ?>
                          <h2><?php echo $job_name?></h2>
                  
                          <table style="width:100%">
                            <tr>
                              <th rowspan="5">
                                <img src="src\99x.jpg" alt="WSO2">
                              </th>
                            </tr>
                            <tr>
                              <th>Company:</th>
                              <td><?php echo $company_name?></td>
                            </tr>
                            <tr>
                              <th>Job Type:</th>
                              <td><?php echo $job_type?></td>
                            </tr>
                            <tr>
                              <th>Location:</th>
                              <td><?php echo $location?></td>
                            </tr>
                            <tr>
                              <th>Date:</th>
                              <td>5/10/2019</td>
                            </tr>
                            <tr>
                              <th></th>
                              <th></th>
                              <td>
                              <form method="get" action="jobPost.php">
                                <input type="hidden" name="id" value=<?php echo $job_id?>>
                                <input type="submit" class="view-more" value="View More">
                              </form>
                              </td>
                            </tr>
                          </table><br>
                        </div>
                  
                        <div class="job-post">
                  
                        <?php
                          $sql = "SELECT * FROM job where job_id = $count;";
                          $result = mysqli_query($conn, $sql);
                          $resultCheck = mysqli_num_rows($result);
                          $count = $count -1;
                  
                          if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                              $job_id = $row['job_id'];
                              $job_name = $row['job_name'];
                              $company_name = $row['company_name'];
                              $job_type = $row['job_type'];
                              $location = $row['location'];
                            }
                          }
                  
                        ?>
                          <h2><?php echo $job_name?></h2>
                  
                          <table style="width:100%">
                            <tr>
                              <th rowspan="5">
                                <img src="src\Virtusa.jpg" alt="WSO2">
                              </th>
                            </tr>
                            <tr>
                              <th>Company:</th>
                              <td><?php echo $company_name?></td>
                            </tr>
                            <tr>
                              <th>Job Type:</th>
                              <td><?php echo $job_type?></td>
                            </tr>
                            <tr>
                              <th>Location:</th>
                              <td><?php echo $location?></td>
                            </tr>
                            <tr>
                              <th>Date:</th>
                              <td>5/10/2019</td>
                            </tr>
                            <tr>
                              <th></th>
                              <th></th>
                              <td>
                              <form method="get" action="jobPost.php">
                                <input type="hidden" name="id" value=<?php echo $job_id?>>
                                <input type="submit" class="view-more" value="View More">
                              </form>
                              </td>
                            </tr>
                          </table><br>
                        </div>
                  
                        <div class="job-post">
                  
                          <?php
                          $sql = "SELECT * FROM job where job_id = $count;";
                          $result = mysqli_query($conn, $sql);
                          $resultCheck = mysqli_num_rows($result);
                          $count = $count -1;
                  
                          if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                              $job_id = $row['job_id'];
                              $job_name = $row['job_name'];
                              $company_name = $row['company_name'];
                              $job_type = $row['job_type'];
                              $location = $row['location'];
                            }
                          }
                  
                        ?>
                          <h2><?php echo $job_name?></h2>
                  
                          <table style="width:100%">
                            <tr>
                              <th rowspan="5">
                                <img src="src\ifs.png" alt="WSO2">
                              </th>
                            </tr>
                            <tr>
                              <th>Company:</th>
                              <td><?php echo $company_name?></td>
                            </tr>
                            <tr>
                              <th>Job Type:</th>
                              <td><?php echo $job_type?></td>
                            </tr>
                            <tr>
                              <th>Location:</th>
                              <td><?php echo $location?></td>
                            </tr>
                            <tr>
                              <th>Date:</th>
                              <td>5/10/2019</td>
                            </tr>
                            <tr>
                              <th></th>
                              <th></th>
                              <td>
                              <form method="get" action="jobPost.php">
                                <input type="hidden" name="id" value=<?php echo $job_id?>>
                                <input type="submit" class="view-more" value="View More">
                              </form>
                              </td>
                            </tr>
                          </table><br>
                        </div>
                        <div class="job-post">
                  
                          <?php
                          $sql = "SELECT * FROM job where job_id = $count;";
                          $result = mysqli_query($conn, $sql);
                          $resultCheck = mysqli_num_rows($result);
                          $count = $count -1;
                  
                          if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                              $job_id = $row['job_id'];
                              $job_name = $row['job_name'];
                              $company_name = $row['company_name'];
                              $job_type = $row['job_type'];
                              $location = $row['location'];
                            }
                          }
                  
                        ?>
                          <h2><?php echo $job_name?></h2>
                  
                          <table style="width:100%">
                            <tr>
                              <th rowspan="5">
                                <img src="src\Virtusa.jpg" alt="WSO2">
                              </th>
                            </tr>
                            <tr>
                              <th>Company:</th>
                              <td><?php echo $company_name?></td>
                            </tr>
                            <tr>
                              <th>Job Type:</th>
                              <td><?php echo $job_type?></td>
                            </tr>
                            <tr>
                              <th>Location:</th>
                              <td><?php echo $location?></td>
                            </tr>
                            <tr>
                              <th>Date:</th>
                              <td>5/10/2019</td>
                            </tr>
                            <tr>
                              <th></th>
                              <th></th>
                              <td>
                              <form method="get" action="jobPost.php">
                                <input type="hidden" name="id" value=<?php echo $job_id?>>
                                <input type="submit" class="view-more" value="View More">
                              </form>
                              </td>
                            </tr>
                          </table><br>
                        </div>
                        <div class="job-post">
                  
                          <?php
                          $sql = "SELECT * FROM job where job_id = $count;";
                          $result = mysqli_query($conn, $sql);
                          $resultCheck = mysqli_num_rows($result);
                          $count = $count -1;
                  
                          if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                              $job_id = $row['job_id'];
                              $job_name = $row['job_name'];
                              $company_name = $row['company_name'];
                              $job_type = $row['job_type'];
                              $location = $row['location'];
                            }
                          }
                  
                        ?>
                          <h2><?php echo $job_name?></h2>
                  
                          <table style="width:100%">
                            <tr>
                              <th rowspan="5">
                                <img src="src\99x.jpg" alt="WSO2">
                              </th>
                            </tr>
                            <tr>
                              <th>Company:</th>
                              <td><?php echo $company_name?></td>
                            </tr>
                            <tr>
                              <th>Job Type:</th>
                              <td><?php echo $job_type?></td>
                            </tr>
                            <tr>
                              <th>Location:</th>
                              <td><?php echo $location?></td>
                            </tr>
                            <tr>
                              <th>Date:</th>
                              <td>5/10/2019</td>
                            </tr>
                            <tr>
                              <th></th>
                              <th></th>
                              <td>
                              <form method="get" action="jobPost.php">
                                <input type="hidden" name="id" value=<?php echo $job_id?>>
                                <input type="submit" class="view-more" value="View More">
                              </form>
                              </td>
                            </tr>
                          </table><br>
                        </div>
                        <div class="job-post">
                  
                          <?php
                          $sql = "SELECT * FROM job where job_id = $count;";
                          $result = mysqli_query($conn, $sql);
                          $resultCheck = mysqli_num_rows($result);
                          $count = $count -1;
                  
                          if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                              $job_id = $row['job_id'];
                              $job_name = $row['job_name'];
                              $company_name = $row['company_name'];
                              $job_type = $row['job_type'];
                              $location = $row['location'];
                            }
                          }
                  
                        ?>
                          <h2><?php echo $job_name?></h2>
                  
                          <table style="width:100%">
                            <tr>
                              <th rowspan="5">
                                <img src="src\Virtusa.jpg" alt="WSO2">
                              </th>
                            </tr>
                            <tr>
                              <th>Company:</th>
                              <td><?php echo $company_name?></td>
                            </tr>
                            <tr>
                              <th>Job Type:</th>
                              <td><?php echo $job_type?></td>
                            </tr>
                            <tr>
                              <th>Location:</th>
                              <td><?php echo $location?></td>
                            </tr>
                            <tr>
                              <th>Date:</th>
                              <td>5/10/2019</td>
                            </tr>
                            <tr>
                              <th></th>
                              <th></th>
                              <td>
                              <form method="get" action="jobPost.php">
                                <input type="hidden" name="id" value=<?php echo $job_id?>>
                                <input type="submit" class="view-more" value="View More">
                              </form>
                              </td>
                            </tr>
                          </table><br>
                        </div>
                        <div class="job-post">
                  
                          <?php
                          $sql = "SELECT * FROM job where job_id = $count;";
                          $result = mysqli_query($conn, $sql);
                          $resultCheck = mysqli_num_rows($result);
                          $count = $count -1;
                  
                          if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                              $job_id = $row['job_id'];
                              $job_name = $row['job_name'];
                              $company_name = $row['company_name'];
                              $job_type = $row['job_type'];
                              $location = $row['location'];
                            }
                          }
                  
                        ?>
                          <h2><?php echo $job_name?></h2>
                  
                          <table style="width:100%">
                            <tr>
                              <th rowspan="5">
                                <img src="src\wso2.png" alt="WSO2">
                              </th>
                            </tr>
                            <tr>
                              <th>Company:</th>
                              <td><?php echo $company_name?></td>
                            </tr>
                            <tr>
                              <th>Job Type:</th>
                              <td><?php echo $job_type?></td>
                            </tr>
                            <tr>
                              <th>Location:</th>
                              <td><?php echo $location?></td>
                            </tr>
                            <tr>
                              <th>Date:</th>
                              <td>5/10/2019</td>
                            </tr>
                            <tr>
                              <th></th>
                              <th></th>
                              <td>
                              <form method="get" action="jobPost.php">
                                <input type="hidden" name="id" value=<?php echo $job_id?>>
                                <input type="submit" class="view-more" value="View More">
                              </form>
                              </td>
                            </tr>
                          </table><br>
                        </div>

        </div>

        <div class="column side">
        </div>

    </div>

    <button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>

    <footer>
        <h4>This is a project of SLIIT students</h4>
    </footer>

</body>
<script src="src\script.js"></script>

</html>