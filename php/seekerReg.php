<?php

require_once "dbcon.php";

session_start();
if(isset($_POST['register'])){
    $fullname = $_POST['Fname'];
    $email = $_POST['email'];
    $job_type = $_POST['jobtype'];
    $experties = $_POST['experties'];
    $experience = $_POST['experience'];
    $about = $_POST['about'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if($password == $repassword){
        $sql = "INSERT INTO job_seekers (name, email, job_type, experties, experience, password, about) VALUES ('$fullname', '$email', '$job_type', '$experties', '$experience', '$password', '$about');";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header("Location: ../home.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }else{
        header("Location: ../Thushan/login.php");
        echo "Passwords did't match";
    }

    
    
}

?>