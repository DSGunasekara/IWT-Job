<?php
include_once './php/dbcon.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>About</title>
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
        </div>

        <div class="column middle">
            <br><br>
            <b>Who are we?</b><br><br>

            Jobz is a job service board .
            If you are searching for a job, chances are you have had a hard time finding one, and if you happen to be a
            hiring manager you may have had to interview
            dozens of candidates just to find the right person for the job. Jobz was created to help both parties at
            once by bridging them together on one specialized
            portal dedicated exclusively to job openings. Our mission is to make the job application process much easier
            for employers and employees, by having them meet
            on one special dedicated jobs board.

            </p>
            <p>

                <b>What do you stand to gain?</b><br><br>

                If you are someone who wants to find a job, without the pain and frustration of job hunting then Jobz is
                perfect you!
                We aim to make the process of finding jobs easier.
                So if you want to find a job perfectly suited to your skills,
                then Jobz is perfect for you But Jobz is not just for job seekers,
                our website aims to streamline their hiring process, and make it easier to find the perfect candidate
                for Companies.
            </p>
            <p>

                <b> Where do I start? </b><br><br>
                You want to browse through the dozens of job posts available right now?
                Are you interested in listing your job posts easily and manage the entire recruitment process on one
                portal?
                Then you can simply register with us, and can get started.
            </p>
            <p>
                If you have any problems contact us <br><br><a class="view-more" href="contact.html">contact</a>
            </p>

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