<?php

require_once "dbcon.php";

session_start();
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM job_seekers where password = '$password';";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $job_seeker_id = $row['job_seeker_id'];
    $db_password = $row['password'];

    if($password == $db_password){
        $_SESSION['email'] = $email;
        $_SESSION['job_seeker_id'] = $job_seeker_id;
        header("Location: profile.php");
    }else {
        echo "Invalid data!";
    }
}

?>