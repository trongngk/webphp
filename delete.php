<?php
    ob_start();
    include "connect.php";
    if(isset($_POST['remove'])){
        
    $id = $_POST['remove'];
    $sql = "DELETE FROM `content` WHERE id = $id";
    mysqli_query($conn, $sql);
    header("location:inside_page.php");

    }
<<<<<<< HEAD
    ob_end_flush();
?>
=======
?>
>>>>>>> ef1f452a3350c453e5e33a5bf84dfb0f26863eb9
