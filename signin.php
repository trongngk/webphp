<?php
    ob_start(); 
    include 'connect.php'; 
    $username = $_POST['username'];
    $password =$_POST['password'];

    $sql = "SELECT * FROM data WHERE username= ? and password= ?";
    $sql->bind_param("ss",$username,$password);
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
