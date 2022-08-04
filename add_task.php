<?php
    ob_start();
    include "connect.php";
    $task = $_POST['task'];
    $sql = "INSERT INTO content (task) VALUES ('$task')";
    $query = mysqli_query($conn, $sql);
    header("location:inside_page.php");
    ob_end_flush();
?>