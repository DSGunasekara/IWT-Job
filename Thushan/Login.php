<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../src/styles.css" />
    <link rel="stylesheet" href="../Thushan/styles.css" />
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
      <a id="login" href="../Thushan/Login.html">Login</a>
      <a id="profile" href="../Umesh/profile.html">Profile</a>
      <a href="javascript:void(0);" class="icon" onclick="mobNav()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <div class="row">
      <div class="column side"></div>

      <div class="column middle">
        <form width="100%" action="../php/loginpage.php" method="post">
          <div class="container">
            <br /><br />
            <h1>Log in</h1>

            <hr />
              <label for="email"><b>Email Address</b></label>
              <input
                id="email"
                type="text"
                placeholder="Enter Email Address"
                name="email"
                required
              />

              <label for="psw"><b>Password</b></label>
              <input
                id = "password"
                type="password"
                placeholder="Enter Password"
                name="password"
                required
              />

              <input name = "login"type="submit" class="registerbtn">
                
              </button>
              
            
            <p><a href="#">Forgot your password?</a></p>
            <hr />
            <p>
              Does not have an account?
              <a href="./Register(J).html" class="view-more">Seeker</a>
              <a href="./Register(R).html" class="view-more">Recruiter</a>
            </p>
          </div>
        </form>
      </div>

      <div class="column side"></div>
    </div>

    <br /><br />

    <footer>
      <h4>This is a project of SLIIT students</h4>
    </footer>
  </body>
  <script src="js.js"></script>
  <script src="../src/script.js"></script>
</html>
