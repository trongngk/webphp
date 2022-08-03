<?php
    include "connect.php";
    $task = $_POST['task'];
    $sql = "INSERT INTO contentVALUES ('$task')";
    $query = mysqli_query($conn, $sql);
    header("location:inside_page.php");
?>