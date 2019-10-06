<?php
include_once './php/dbcon.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="src\styles.css" />
    <link rel="stylesheet" href="Bunchi/styles.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap"
      rel="stylesheet"
    />
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
      <div class="column side"></div>

      <div class="column middle">
        <form
          name="myForm"
          action=""
          onsubmit="return validateForm()"
          method="post"
        >
          <label for="fname">First Name</label>
          <input
            type="text"
            id="fname"
            name="firstname"
            placeholder="Your name.."
          />

          <label for="lname">Last Name</label>
          <input
            type="text"
            id="lname"
            name="lastname"
            placeholder="Your last name.."
          />

          <label for="e-mail">E-mail</label>
          <input
            type="text"
            id="mail"
            name="email"
            placeholder="your E-mail.."
          />

          <label for="subject">Subject</label>
          <textarea
            id="subject"
            name="subject"
            placeholder="Write something.."
            style="height:200px"
          ></textarea>

          <input type="submit" value="Submit" />
        </form>
      </div>

      <div class="column side"></div>
    </div>

    <button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>

    <footer>
      <h4>This is a project of SLIIT students</h4>
    </footer>
  </body>
  <script src="src\script.js"></script>
  <script src="Bunchi\script.js"></script>
</html>
