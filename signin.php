<?php
    include 'connect.php'; 

    $username = $_POST['username'];
    $password =$_POST['password'];

    $sql = "SELECT count(*) FROM data WHERE username='$username' and password='$password'";
    $result = mysqli_query($conn, $sql);
    $number_rows = mysqli_fetch_array($result)['count(*)'];

    if($number_rows == 1) {
        header("location:inside_page.php");
        exit();
    } else echo "Please check your username or password!";

?>