<?php 
    include 'connect.php';
    $fullname = $_POST['name'];
    $username = $_POST['username'];
    $password =$_POST['password'];
    $birthday =$_POST['birthday'];
    $email = $_POST['email'];

    $sql1 = "SELECT count(*) FROM data WHERE email='$email'";
    $result1 = mysqli_query($conn, $sql1);
    $number_rows1 = mysqli_fetch_array($result1)['count(*)'];

    $sql2 = "SELECT count(*) FROM data WHERE username='$username'";
    $result2 = mysqli_query($conn, $sql2);
    $number_rows2 = mysqli_fetch_array($result2)['count(*)'];

    if($number_rows1 == 1) {
        header("location:signup.php?error=The email has been registered, please enter another email!");
        exit();
    }
    elseif($number_rows2 == 1){
        header("location:signup.php?error=The username has been registered, please enter another username!");
        exit();
    }
    else {
        $sql = "INSERT INTO `data` VALUES ('$fullname', '$username', '$password', '$birthday', '$email')";
        $query = mysqli_query($conn, $sql);
        header("location:home.php");
    }
    mysqli_close($conn)
?>