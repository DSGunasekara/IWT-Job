<?php
session_start();
if(!isset($_SESSION['job_seeker_id']) || !isset($_SESSION['company_id']){
    header("Location: ../Thushan/Login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $_SESSION['job_seeker_id']; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>