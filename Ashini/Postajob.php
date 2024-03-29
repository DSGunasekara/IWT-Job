<?php
  session_start();
  if(isset($_SESSION['company_id'])){
    include_once '../php/dbcon.php';
    $seeker = $_SESSION['company_id'];
  }else{
    header("Location: ../Thushan/login.php");
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Post a Job</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../src/styles.css" />
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
      
      <?php if(isset($_SESSION['company_id'])): ?>
        <a href="Ashini/Postajob.php">Post a job</a>
      <?php else: ?>
      <?php endif; ?>

      <a href="../applicants.php">Applicants</a>
      <a href="../jobs.php">Jobs</a>
      <a href="../contact.php">Contact us</a>
      <a href="../about.php">About us</a>

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
        <form width="100%">
          <div class="container">
            <h1>Post a Job</h1>

            <hr />

            <label><b>Job Tital</b></label>
            <input
              type="text"
              placeholder="Input Job Title"
              name="tital"
              required
            />

            <label><b>Salary Range</b></label>
            <input
              type="text"
              placeholder="Input Salary Range"
              name="srange"
              required
            />

            <lable><b>Job Type</b></lable>
            <div class="a">
              <select id="jtype" name="jtype">
                <option value="sales"
                  >Sales/ Marketing/ New Bussiness Development</option
                >
                <option value="sware">IT-Software/ Internet</option>
                <option value="schoollevers">School Leavers</option>
                <option value="finance">Banking and Finacial Services</option>
                <option value="customer">Customer Services/ Call Center</option>
                <option value="bussiness">Bussiness Management</option>
                <option value="accfinance">Accountancy and Finance</option>
                <option value="hotel">Hotel/ Hospitality/ Leisure</option>
                <option value="gov">Government/ Public Sector</option>
                <option value="hware">IT-Hardware/ Networks/ Systems</option>
                <option value="media">Media/ Adverticing/ Communication</option>
                <option value="production">Rroduction and Operations</option>
                <option value="retail">Retail/ Fashion</option>
                <option value="edu">Education/ Higher Education</option>
                <option value="insurance">Insurance</option>
                <option value="logistic"
                  >Supply Chain/ Logistics/ Procurement</option
                >
                <option value="travel"
                  >Travel/ Airline/ Ticketing/ Shipping</option
                >
                <option value="build">Building/ Construction </option>
              </select>
            </div>
            <label><b>Discription</b></label>
            <input
              type="text"
              placeholder="Add Job Discription"
              name="discription"
              required
            />

            <label><b>Description Image</b></label>
            <br />
            <input type="file" id="real-file" hidden="hidden" />
            <button type="button" id="custom-button" onclick="loadData()">
              Add image
            </button>
            <span id="custom-text">No file chose</span>
            <br />

            <label><b>Location</b></label>
            <select id="jlocation" name="jlocation">
              <option value="ampara">Ampara</option>
              <option value="anuradhapura">Anuradhapura</option>
              <option value="colombo">Colombo</option>
              <option value="galle">Galle</option>
              <option value="kandy">Kandy</option>
              <option value="matara">Matara</option>
              <option value="foreign">Foreign</option>
              <option value="hambanthota">Hambanthota</option>
            </select>

            <label><b>Expired date</b></label>
            <input
              type="date"
              placeholder="Expired date"
              name="expd"
              required
            />

            <!-- <button type="button" id="next-button" onclick="pay.html">Next</button> -->
            <a id="next" href="Pay.html">Next</a>

            <hr />
          </div>
        </form>
      </div>

      <div class="column side"></div>
    </div>

    <button onclick="topFunction()" id="topBtn" title="Go to top">Top</button>

    <footer>
      <h4>This is a project of SLIIT students</h4>
    </footer>
  </body>
  <script src="src/script.js"></script>
  <script src="js.js"></script>
</html>
