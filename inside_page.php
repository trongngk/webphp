<?php 
    ob_start();
    include 'connect.php'; 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <main style="background:white;">
            <div class="container" style="position:relative; top: 100px;">
            <div class='login-form'>
                <form action="add_task.php" method="post">
                    <h1 class="tittle">Task</h1>
                    <div class="login_box">
                        <input name="task" type="text" placeholder="Add task" required>
                    </div>
                    
                        <div class="add">
                            <button name="submit" type="submit">
                                Add
                            </button>
                        </div>
                </form>
                    <div class="divide"></div>
                    <h1 class="content">Current task</h1> 
                    <div class="content">
                        <table>
                        <?php
                         if (!isset($_SESSION['user']) && is_null($_SESSION['user'])) header("location:index.php?error=Please login before working");
                         else{                                                    
                            $sql = "SELECT * FROM content";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) 
                            {
                                $task = $row["task"];
                                $id=$row["id"];
                            ?>
                        
                            <tr>
                                <td><?php echo $task;?></td>
                                <td><form action="delete.php" method="POST">
                                            <button class="delete" type="submit" name="remove" value=<?php echo $row['id']?> >
                                                Remove
                                            </button>
                                        
                                    </form>
                                </td>
                            </tr>                                        
                        <?php                                       
                                    }                            
                        }   
                       
                                ob_end_flush();
                            ?>
                        </table>   
                        
                    </div>  
                        
                        
                
            </div >
            <p class='logout'>Click here to log out 
            <a href="logout.php">log out</a>
            </p>
        </main>
    </body>
</html>