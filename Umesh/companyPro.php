<?php
  session_start();
  if(isset($_SESSION['company_id'])){
    include_once '../php/dbcon.php';
    $seeker = $_SESSION['company_id'];

    $sql = "SELECT * FROM company where company_id = $seeker;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        // $job_seeker_id = $row['job_seeker_id'];
        $name = $row['company_name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $aboutme = $row['about'];
      }
    }
  }else{
    header("Location: ../Thushan/login.php");
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="CSS/styles.css" />
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
      <h1><a href="../home.php">JOBz</a></h1>
    </div>

    <div class="topnav" id="myTopNav">
      <a href="../home.php">Home</a>
      <a href="../categories.php">Categories</a>
      <a href="../Ashini/Postajob.html">Post a job</a>
      <a href="../applicants.php">Applicants</a>
      <a href="../jobs.php">Jobs</a>
      <a href="../contact.html">Contact us</a>
      <a href="../about.html">About us</a>
      <!-- <a id="signup" href="../signup.html">Signup</a> -->
      <a id="login" href="../Thushan/Login.php">Login</a>
      <a id="profile" href="../Umesh\profile.php">Profile</a>
      <a href="javascript:void(0);" class="icon" onclick="mobNav()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <div class="row">
      <div class="column side"></div>

      <div class="column middle">
        <img src="../src/Virtusa.jpg" style="width:50%" />
        <h2 style="text-align: left">Name: <?php echo $name?></h2>

        
        <p class="title">Contact us 
        <p class="title">Email: <?php echo $email?></p>
        <p class="title">Tel Phone:<?php echo $phone?></p>
        <p class="title">About</p>
        <p>
          <?php echo $aboutme?>
          <?php echo $aboutme?>
        </p>

        <!-- <p><a class="view-more" href="../jobs.html">My Posted Jobs</a></p> -->
      </div>

      <div class="column side"></div>
    </div>

    <button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>

    <footer>
      <h4>This is a project of SLIIT students</h4>
    </footer>
  </body>
  <script src="script.js"></script>
</html>
