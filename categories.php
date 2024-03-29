<?php
include_once './php/dbcon.php';
session_start()
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Categories</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="src\catStyle.css" />
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
        <div class="cat-row">
          <div class="cat">
            <img src="src\SE.jpg" alt="Software Engineering" class="cat-img" />
            <div class="middle-text">
              <div class="text-box">Software Engineering</div>
            </div>
          </div>

          <div class="cat">
            <img src="src\robots.jpg" alt="Robotics" class="cat-img" />
            <div class="middle-text">
              <div class="text-box">Robotics</div>
            </div>
          </div>
        </div>

        <div class="cat-row">
          <div class="cat">
            <a href="./Filter/search.php" onclick="<?php $val = 5?>">
              <img src="src\cyber.png" alt="Cyber Security" class="cat-img" />
            </a>
            <div class="middle-text">
              <div class="text-box">
                <a href="./Filter/search.php"> Cyber Security</a>
              </div>
            </div>
          </div>

          <div class="cat">
            <img src="src\Cloud.jpg" alt="Cloud Computing" class="cat-img" />
            <div class="middle-text">
              <div class="text-box">Cloud Computing</div>
            </div>
          </div>
        </div>

        <div class="cat-row">
          <div class="cat">
            <img src="src\accounting.png" alt="Accounting" class="cat-img" />
            <div class="middle-text">
              <div class="text-box">Accounting</div>
            </div>
          </div>

          <div class="cat">
            <img src="src\networking.jpg" alt="Networking" class="cat-img" />
            <div class="middle-text">
              <div class="text-box">Networking</div>
            </div>
          </div>
        </div>

        <div class="cat-row">
          <div class="cat">
            <img
              src="src\ai.jpg"
              alt="Artificial Inteligence"
              class="cat-img"
            />
            <div class="middle-text">
              <div class="text-box">Artificial Inteligence</div>
            </div>
          </div>

          <div class="cat">
            <img src="src\web.jfif" alt="Web Development" class="cat-img" />
            <div class="middle-text">
              <div class="text-box">Web Development</div>
            </div>
          </div>
        </div>
      </div>

      <div class="column side"></div>
    </div>

    <button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>

    <footer>
      <h4>This is a project of SLIIT students</h4>
    </footer>
  </body>
  <script src="src\script.js"></script>
</html>
