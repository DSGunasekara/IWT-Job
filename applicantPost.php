<?php
include_once './php/dbcon.php';
$seeker  = $_GET['seeker_id'];
        
$sql = "SELECT * FROM job_seekers where job_seeker_id = $seeker;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    // $job_seeker_id = $row['job_seeker_id'];
    $name = $row['name'];
    $experties = $row['experties'];
    $type = $row['job_type'];
    $experience = $row['experience'];
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Applicant Post</title>
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
      <a id="login" href="Thushan\Login.html">Login</a>
      <a id="profile" href="Umesh\profile.html">Profile</a>
      <a href="javascript:void(0);" class="icon" onclick="mobNav()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <div class="row">
      <div class="column side"></div>

      <div class="column middle">
        <div id="description">
        <h3>Name: <?php echo $name?></h3>
        <h3>Specialized: <?php echo $type?></h3>

        <h3>About</h3>
        <p>
          If you get an offer to work at Zoom, take it. Zoom takes employee
          happiness seriously and people genuinely love the company. Eric Yuan
          is leaps and bounds beyond his peers when it comes to CEOs who care.
          His governing motto is essentially that employees should wake up in
          the morning happy to go to work; if that isn’t the case, he wants you
          to be honest about that with management. He also wants Zoom partners
          to win....If you get an offer to work at Zoom, take it. Zoom takes
          employee happiness seriously and people genuinely love the company.
          Eric Yuan is leaps and bounds beyond his peers when it comes to CEOs
          who care. His governing motto is essentially that employees should
          wake up in the morning happy to go to work; if that isn’t the case, he
          wants you to be honest about that with management. He also wants Zoom
          partners to win....
        </p>

        <h3>Previous Projects</h3>
        <ul>
          <li>Project No.01</li>
          <li>Project No.02</li>
          <li>Project No.03</li>
        </ul>

        <h3>Contact details</h3>
        <ul>
          <li>Tel: 011235659</li>
          <li>Email: abcd@gmail.com</li>
        </ul>
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
