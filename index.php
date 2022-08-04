
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main style="background:white">
            <div class="container" style="position:relative; top: 100px;">
            <div class="login-form">
                
                <form action="signin.php" method="post">
                    <h1>Login</h1>
                    <div class="error">
                    <?php
                        if(isset($_GET['error'])){
                            echo $_GET['error'];
                        }
                        if(isset($_GET['success'])){
                            echo $_GET['success'];
                        }
                    ?>
                    
                    </div>
                    <div class="login_box">
                        <input name="username" type="text" placeholder="Username" required>
                    </div>
                    <div class="login_box">
                        <input name="password" type="password" placeholder="Password" required>
                    </div>
                    
                    <div class="login">
                        <button name="submit" type="submit" >
                            Login
                        </button>
                    </div>
                    <div class='divide'></div>
                    <a class="link" href="signup.php">Create an account</a>
                </form>
            </div>
            </div>
        </main>
    </body>
</html>