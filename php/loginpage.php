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

    $sql2 = "SELECT * FROM company where password = '$password';";
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($query2);
    $company_id = $row2['company_id'];
    $com_password = $row2['password'];

    if($password == $db_password){
        $_SESSION['email'] = $email;
        $_SESSION['job_seeker_id'] = $job_seeker_id;
        header("Location: ../Umesh/profile.php");
    }elseif($password == $com_password){
        $_SESSION['email'] = $email;
        $_SESSION['company_id'] = $company_id;
        header("Location: ../Umesh/companyPro.php");
    }else{
        echo "Invalid data!";
    }
}

?>