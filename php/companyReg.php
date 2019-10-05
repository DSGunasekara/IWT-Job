<?php

require_once "dbcon.php";

session_start();
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $about = $_POST['about'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if($password == $repassword){
        $sql = "INSERT INTO company (company_name, email, phone, password, about) VALUES ('$name', '$email', '$phone', '$password', '$about');";
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