<?php
    ob_start(); 
    include 'connect.php'; 
    $username = $_POST['username'];
    $password =$_POST['password'];

    $san_user = mysqli_real_escape_string($conn,$username);
    $san_pass = mysqli_real_escape_string($conn,$password);

    $sql = "SELECT * FROM data WHERE username = '$san_user' and password='$san_pass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0) {
        session_start();
        $rows = mysqli_fetch_array($result);
        $_SESSION['user'] = $rows["username"];
        header("location:inside_page.php");
        exit;
    } else {
        header("location:index.php?error=Please check your username or password!");
    }
   ob_end_flush(); 
?> 
