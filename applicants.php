<?php
include_once './php/dbcon.php'
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Applicants</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="src\styles.css" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Caveat&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="header">
      <h1><a href="home.php">JOBz</a></h1>
    </div>

    <div class="topnav" id="myTopNav">
      <a href="home.php">Home</a>
      <a href="categories.php">Categories</a>
      <a href="Ashini/Postajob.html">Post a job</a>
      <a href="applicants.php">Applicants</a>
      <a href="jobs.php">Jobs</a>
      <a href="contact.html">Contact us</a>
      <a href="about.html">About us</a>
      <!-- <a id="signup" href="signup.html">Signup</a> -->
      <a id="login" href="Thushan\Login.php">Login</a>
      <a id="profile" href="Umesh\profile.php">Profile</a>
      <a href="javascript:void(0);" class="icon" onclick="mobNav()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <div class="row">
      <div class="column side">
        <h2>Filter your search</h2>
        <p onclick="hideNav()" title="Hide the filter">V</p>
        <br /><br />
        <form id="hide-fil">
          Job Type:

          <select>
            <option value="se">Software Engineer</option>
            <option value="na">Network Admin</option>
            <option value="cs">Cyber Security</option>
            <option value="eng">Full Stack Web Developer</option>
          </select>

          <div class="salary-slider">
            <br />
            Salary Range: <span id="salary"></span>
            <br />
            <input
              type="range"
              min="35000"
              max="200000"
              value="100000"
              class="slider"
              id="salaryRange"
            />
          </div>
          <br />
          <input type="checkbox" />Goverment Jobs <br />
          <input type="checkbox" />Walk-in interview <br />
          <input type="checkbox" />NGO Jobs <br />
          <input type="checkbox" />Full-time <br />
          <input type="checkbox" />Part-time <br />
          <input type="checkbox" />Work from home <br />
          <input type="checkbox" />Internship <br />
          <button class="filter" onclick="window.location.href='#filter'">
            Filter
          </button>
        </form>
      </div>

      <div class="column middle">

        <div class="app-post">
          <?php
            $countSql = "SELECT * FROM job_seekers;";
            $countResult =  mysqli_query($conn, $countSql);
            $count = mysqli_num_rows($countResult);
                          
            $sql = "SELECT * FROM job_seekers where job_seeker_id = $count;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            $count = $count -1;
                  
            if ($resultCheck >  0) { 
              while ($row = mysqli_fetch_assoc($result)) {
                $job_seeker_id = $row['job_seeker_id'];
                $name =$row['name']; 
                $experties = $row['experties']; $type =
                $row['job_type']; $experience = $row['experience']; 
                }
              }
         ?>

          <h2><?php echo $type?></h2>

          <table style="width:100%">
            <tr>
              <th rowspan="5">
                <img src="src\avatar.jfif" alt="avatar" />
              </th>
            </tr>
            <tr>
              <th>Name:</th>
              <td><?php echo $name?></td>
            </tr>
            <tr>
              <th>Experts in:</th>
              <td><?php echo $experties?></td>
            </tr>
            <tr>
              <th>Experienxe:</th>
              <td><?php echo $experience?></td>
            </tr>
            <tr>
              <th></th>
              <td>
              <form method="get" action="applicantPost.php">
                <input type="hidden" name="seeker_id" value=<?php echo $job_seeker_id?>>
                <input type="submit" class="view-more" value="View More">
              </form>
              </td>
            </tr>
          </table>

          <br />
        </div>

        <div class="app-post">
          <?php
            $sql = "SELECT * FROM job_seekers where job_seeker_id = $count;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            $count = $count -1;
                  
            if ($resultCheck > 0) {
               while ($row = mysqli_fetch_assoc($result)) { 
                  $job_seeker_id = $row['job_seeker_id'];
                  $name = $row['name']; 
                  $experties = $row['experties']; 
                  $type = $row['job_type']; 
                  $experience = $row['experience'];
                }
            }
         ?>

          <h2><?php echo $type?></h2>

          <table style="width:100%">
            <tr>
              <th rowspan="5">
                <img src="src\avatar.jfif" alt="avatar" />
              </th>
            </tr>
            <tr>
              <th>Name:</th>
              <td><?php echo $name?></td>
            </tr>
            <tr>
              <th>Experts in:</th>
              <td><?php echo $experties?></td>
            </tr>
            <tr>
              <th>Experienxe:</th>
              <td><?php echo $experience?></td>
            </tr>
            <tr>
              <th></th>
              <td>
              <form method="get" action="applicantPost.php">
                <input type="hidden" name="seeker_id" value=<?php echo $job_seeker_id?>>
                <input type="submit" class="view-more" value="View More">
              </form>
              </td>
            </tr>
          </table>

          <br />
        </div>

        <div class="app-post">
          <?php
            $sql = "SELECT * FROM job_seekers where job_seeker_id = $count;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            $count = $count -1;
                  
            if ($resultCheck > 0) {
               while ($row = mysqli_fetch_assoc($result)) { 
                $job_seeker_id = $row['job_seeker_id'];
                $name = $row['name'];
                $experties = $row['experties']; 
                $type = $row['job_type']; 
                $experience = $row['experience']; 
               }
            }
          ?>

          <h2><?php echo $type?></h2>

          <table style="width:100%">
            <tr>
              <th rowspan="5">
                <img src="src\avatar.jfif" alt="avatar" />
              </th>
            </tr>
            <tr>
              <th>Name:</th>
              <td><?php echo $name?></td>
            </tr>
            <tr>
              <th>Experts in:</th>
              <td><?php echo $experties?></td>
            </tr>
            <tr>
              <th>Experienxe:</th>
              <td><?php echo $experience?></td>
            </tr>
            <tr>
              <th></th>
              <td>
              <form method="get" action="applicantPost.php">
                <input type="hidden" name="seeker_id" value=<?php echo $job_seeker_id?>>
                <input type="submit" class="view-more" value="View More">
              </form>
              </td>
            </tr>
          </table>

          <br />
        </div>
        <div class="app-post">
          <?php
            $sql = "SELECT * FROM job_seekers where job_seeker_id = $count;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            $count = $count -1;
                  
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) { 
                $job_seeker_id = $row['job_seeker_id']; 
                $name = $row['name']; 
                $experties = $row['experties']; 
                $type = $row['job_type']; 
                $experience = $row['experience']; 
                }
              }
          ?>

          <h2><?php echo $type?></h2>

          <table style="width:100%">
            <tr>
              <th rowspan="5">
                <img src="src\avatar.jfif" alt="avatar" />
              </th>
            </tr>
            <tr>
              <th>Name:</th>
              <td><?php echo $name?></td>
            </tr>
            <tr>
              <th>Experts in:</th>
              <td><?php echo $experties?></td>
            </tr>
            <tr>
              <th>Experienxe:</th>
              <td><?php echo $experience?></td>
            </tr>
            <tr>
              <th></th>
              <td>
              <form method="get" action="applicantPost.php">
                <input type="hidden" name="seeker_id" value=<?php echo $job_seeker_id?>>
                <input type="submit" class="view-more" value="View More">
              </form>
              </td>
            </tr>
          </table>

          <br />
        </div>
        <div class="app-post">
        <?php
            $sql = "SELECT * FROM job_seekers where job_seeker_id = $count;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            $count = $count -1;
                  
            if ($resultCheck > 0) {
               while ($row = mysqli_fetch_assoc($result)) { 
                $job_seeker_id = $row['job_seeker_id'];
                $name = $row['name']; 
                $experties = $row['experties']; 
                $type = $row['job_type']; 
                $experience = $row['experience']; 
              }
           }
         ?>

          <h2><?php echo $type?></h2>

          <table style="width:100%">
            <tr>
              <th rowspan="5">
                <img src="src\avatar.jfif" alt="avatar" />
              </th>
            </tr>
            <tr>
              <th>Name:</th>
              <td><?php echo $name?></td>
            </tr>
            <tr>
              <th>Experts in:</th>
              <td><?php echo $experties?></td>
            </tr>
            <tr>
              <th>Experienxe:</th>
              <td><?php echo $experience?></td>
            </tr>
            <tr>
              <th></th>
              <td>
              <form method="get" action="applicantPost.php">
                <input type="hidden" name="seeker_id" value=<?php echo $job_seeker_id?>>
                <input type="submit" class="view-more" value="View More">
              </form>
              </td>
            </tr>
          </table>

          <br />
        </div>
        <div class="app-post">
        <?php
            $sql = "SELECT * FROM job_seekers where job_seeker_id = $count;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            $count = $count -1;
                  
            if ($resultCheck > 0) {
               while ($row = mysqli_fetch_assoc($result)) { 
                $job_seeker_id = $row['job_seeker_id'];
                $name = $row['name']; 
                $experties = $row['experties']; 
                $type = $row['job_type']; 
                $experience = $row['experience']; 
              }
           }
         ?>

          <h2><?php echo $type?></h2>

          <table style="width:100%">
            <tr>
              <th rowspan="5">
                <img src="src\avatar.jfif" alt="avatar" />
              </th>
            </tr>
            <tr>
              <th>Name:</th>
              <td><?php echo $name?></td>
            </tr>
            <tr>
              <th>Experts in:</th>
              <td><?php echo $experties?></td>
            </tr>
            <tr>
              <th>Experienxe:</th>
              <td><?php echo $experience?></td>
            </tr>
            <tr>
              <th></th>
              <td>
              <form method="get" action="applicantPost.php">
                <input type="hidden" name="seeker_id" value=<?php echo $job_seeker_id?>>
                <input type="submit" class="view-more" value="View More">
              </form>
              </td>
            </tr>
          </table>

          <br />
        </div>
        <div class="app-post">
        <?php
            $sql = "SELECT * FROM job_seekers where job_seeker_id = $count;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            $count = $count -1;
                  
            if ($resultCheck > 0) {
               while ($row = mysqli_fetch_assoc($result)) { 
                $job_seeker_id = $row['job_seeker_id'];
                $name = $row['name']; 
                $experties = $row['experties']; 
                $type = $row['job_type']; 
                $experience = $row['experience']; 
              }
           }
         ?>

          <h2><?php echo $type?></h2>

          <table style="width:100%">
            <tr>
              <th rowspan="5">
                <img src="src\avatar.jfif" alt="avatar" />
              </th>
            </tr>
            <tr>
              <th>Name:</th>
              <td><?php echo $name?></td>
            </tr>
            <tr>
              <th>Experts in:</th>
              <td><?php echo $experties?></td>
            </tr>
            <tr>
              <th>Experienxe:</th>
              <td><?php echo $experience?></td>
            </tr>
            <tr>
              <th></th>
              <td>
              <form method="get" action="applicantPost.php">
                <input type="hidden" name="seeker_id" value=<?php echo $job_seeker_id?>>
                <input type="submit" class="view-more" value="View More">
              </form>
              </td>
            </tr>
          </table>

          <br />
        </div>
        <div class="app-post">
        <?php
            $sql = "SELECT * FROM job_seekers where job_seeker_id = $count;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            $count = $count -1;
                  
            if ($resultCheck > 0) {
               while ($row = mysqli_fetch_assoc($result)) { 
                $job_seeker_id = $row['job_seeker_id'];
                $name = $row['name']; 
                $experties = $row['experties']; 
                $type = $row['job_type']; 
                $experience = $row['experience']; 
              }
           }
         ?>

          <h2><?php echo $type?></h2>

          <table style="width:100%">
            <tr>
              <th rowspan="5">
                <img src="src\avatar.jfif" alt="avatar" />
              </th>
            </tr>
            <tr>
              <th>Name:</th>
              <td><?php echo $name?></td>
            </tr>
            <tr>
              <th>Experts in:</th>
              <td><?php echo $experties?></td>
            </tr>
            <tr>
              <th>Experienxe:</th>
              <td><?php echo $experience?></td>
            </tr>
            <tr>
              <th></th>
              <td>
              <form method="get" action="applicantPost.php">
                <input type="hidden" name="seeker_id" value=<?php echo $job_seeker_id?>>
                <input type="submit" class="view-more" value="View More">
              </form>
              </td>
            </tr>
          </table>

          <br />
        </div>
        <div class="app-post">
        <?php
            $sql = "SELECT * FROM job_seekers where job_seeker_id = $count;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            $count = $count -1;
                  
            if ($resultCheck > 0) {
               while ($row = mysqli_fetch_assoc($result)) { 
                $job_seeker_id = $row['job_seeker_id'];
                $name = $row['name']; 
                $experties = $row['experties']; 
                $type = $row['job_type']; 
                $experience = $row['experience']; 
              }
           }
         ?>

          <h2><?php echo $type?></h2>

          <table style="width:100%">
            <tr>
              <th rowspan="5">
                <img src="src\avatar.jfif" alt="avatar" />
              </th>
            </tr>
            <tr>
              <th>Name:</th>
              <td><?php echo $name?></td>
            </tr>
            <tr>
              <th>Experts in:</th>
              <td><?php echo $experties?></td>
            </tr>
            <tr>
              <th>Experienxe:</th>
              <td><?php echo $experience?></td>
            </tr>
            <tr>
              <th></th>
              <td>
              <form method="get" action="applicantPost.php">
                <input type="hidden" name="seeker_id" value=<?php echo $job_seeker_id?>>
                <input type="submit" class="view-more" value="View More">
              </form>
              </td>
            </tr>
          </table>

          <br />
        </div>
        <div class="app-post">
        <?php
            $sql = "SELECT * FROM job_seekers where job_seeker_id = $count;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            $count = $count -1;
                  
            if ($resultCheck > 0) {
               while ($row = mysqli_fetch_assoc($result)) { 
                $job_seeker_id = $row['job_seeker_id'];
                $name = $row['name']; 
                $experties = $row['experties']; 
                $type = $row['job_type']; 
                $experience = $row['experience']; 
              }
           }
         ?>

          <h2><?php echo $type?></h2>

          <table style="width:100%">
            <tr>
              <th rowspan="5">
                <img src="src\avatar.jfif" alt="avatar" />
              </th>
            </tr>
            <tr>
              <th>Name:</th>
              <td><?php echo $name?></td>
            </tr>
            <tr>
              <th>Experts in:</th>
              <td><?php echo $experties?></td>
            </tr>
            <tr>
              <th>Experienxe:</th>
              <td><?php echo $experience?></td>
            </tr>
            <tr>
              <th></th>
              <td>
              <form method="get" action="applicantPost.php">
                <input type="hidden" name="seeker_id" value=<?php echo $job_seeker_id?>>
                <input type="submit" class="view-more" value="View More">
              </form>
              </td>
            </tr>
          </table>

          <br />
        </div>
        <div class="app-post">
          <?php
            $sql = "SELECT * FROM job_seekers where job_seeker_id = $count;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            $count = $count -1;
                  
            if ($resultCheck > 0) {
               while ($row = mysqli_fetch_assoc($result)) { 
                $job_seeker_id = $row['job_seeker_id'];
                $name = $row['name']; 
                $experties = $row['experties']; 
                $type = $row['job_type']; 
                $experience = $row['experience']; 
              }
           }
         ?>

          <h2><?php echo $type?></h2>

          <table style="width:100%">
            <tr>
              <th rowspan="5">
                <img src="src\avatar.jfif" alt="avatar" />
              </th>
            </tr>
            <tr>
              <th>Name:</th>
              <td><?php echo $name?></td>
            </tr>
            <tr>
              <th>Experts in:</th>
              <td><?php echo $experties?></td>
            </tr>
            <tr>
              <th>Experienxe:</th>
              <td><?php echo $experience?></td>
            </tr>
            <tr>
              <th></th>
              <td>
              <form method="get" action="applicantPost.php">
                <input type="hidden" name="seeker_id" value=<?php echo $job_seeker_id?>>
                <input type="submit" class="view-more" value="View More">
              </form>
              </td>
            </tr>
          </table>

          <br />
        </div>
      </div>

      <div class="column side"></div>
    </div>

    <button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>

    <footer>
      <h4>This is a project of SLIIT students</h4>
    </footer>
  </body>
  <script src="test.js"></script>
  <script src="src\script.js"></script>
</html>
