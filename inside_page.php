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
                    <div class="divide"></div>
                    <h1 class="content">Current task</h1> 
                    <div class="content">
                        <?php
                            include 'connect.php'; 

                            $sql = "SELECT * FROM content";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) 
                                {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo $row["task"]. "<br>";
                                    
                                    }
                                    
                                } 
                        ?>
                    </div>  
                        
                        
                </form>
            </div>
            
            <a href="home.php">log out</a>
                

            </div>
        </main>
    </body>
</html>