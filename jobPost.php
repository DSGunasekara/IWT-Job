<?php
include_once './php/dbcon.php';
$job  = $_GET['id'];

$sql = "SELECT * FROM job where job_id = $job;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);        

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
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Job Post</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="src\styles.css" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet"/>
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
      <a id="signup" href="signup.html">Signup</a>
      <a id="login" href="Thushan\Login.html">Login</a>
      <a id="profile" href="Umesh\profile.html">Profile</a>
      <a href="javascript:void(0);" class="icon" onclick="mobNav()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <div class="row">
      <div class="column side"></div>

      <div class="column middle">
        <h1><?php echo $job_name?></h1>
        <h3>Company: <a href="Umesh\loop.html"><?php echo $company_name?></a></h3>
        <h3>Location: <b><?php echo $location?></b></h3>

        <p>
          WSO2 Identity and Access Management team is looking for a senior
          front-end Software Engineer to join the Engineering team. As a
          front-end Software Engineer you will use your strong knowledge of
          HTML, CSS, and JavaScript and your eye for detail to help our product
          teams implement the UIs.
        </p>
        <p>
          The ideal candidate looks forward to tackling new challenges and is
          comfortable moving between different code bases and tech stacks while
          writing clean, maintainable code.
        </p>

        <div id="description">
          <h3>Key Responsibilities</h3>
          <ul>
            <li>
              Work on front-end experiences across WSO2 Identity and Access
              Management projects
            </li>
            <li>
              Design and translate mockups and wireframes into clean,
              maintainable code
            </li>
            <li>
              Direct work with back-end engineers to ensure design integrity
              across the product
            </li>
            <li>Debug and troubleshoot issues across browsers</li>
            <li>Coach and mentor junior members in the team where required</li>
            <li>Engage in product vision and strategy</li>
            <li>Overlook on product experience aspect</li>
          </ul>
        </div>
        <div id="description">
          <h3>Requirements</h3>
          <ul>
            <li>
              Bachelor’s or Master’s degree in Computer Science or similar
              technical discipline, or equivalent professional experience
            </li>
            <li>
              3+ years of industry experience in full-stack software development
              across multiple technologies, languages, and frameworks
            </li>
            <li>
              2+ years JavaScript web application development experience,
              building complex, multi-brand progressive/responsive web app user
              interfaces using React, Redux, Node, TypeScript, ES6, Flux, Mocha,
              Jest, etc.
            </li>
            <li>Strong understanding in JavaScript design patterns</li>
            <li>Proficiency with build tools including Webpack, NPM</li>
            <li>
              Excellent understanding of web development with web services:
              HTML/CSS, XML/JSON HTTP, cookies, headers, caching, DOM, CORS,
              REST, etc...
            </li>
            <li>Experience working with CSS preprocessors like LESS, SASS</li>
          </ul>
        </div>
      </div>

      <div class="column side">
        <a id="apply" href="apply.html">Apply Now!</a>
      </div>
    </div>

    <button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>

    <footer>
      <h4>This is a project of SLIIT students</h4>
    </footer>
  </body>
  <script src="src\script.js"></script>
</html>
