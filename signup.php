<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet"/>
    </head>
    <body>
        <main style="background:white">
            <div class="container" style="position:relative; top: 100px;">
            <div class="login-form">
                
                <form action="signup_process.php" method="post">
                    <h1>Register</h1>
                    <div class="error">
                    <?php
                        if(isset($_GET['error'])){
                            echo $_GET['error'];
                        }
                    ?>
                    </div>
                    <div class="login_box">
                        <input name="name" type="text" placeholder="Fullname" required>
                    </div>
                    <div class="login_box">
                        <input name="username" type="text" placeholder="Username" required>
                    </div>
                    <div class="login_box">
                        <input name="password" type="password" placeholder="Password" required>
                    </div>
                    <div class="login_box">
                        <input type="text" name="birthday" placeholder="Birthday" require>
                    </div>
                    <div class="login_box">
                        <input name="email" type="text" placeholder="Email" required>
                    </div>
                    
                    <div class="login">
                        <button name="submit" type="submit">
                            Register
                        </button>
                    </div>
                    <div class='divide'></div>
                    <a class='back' href="./">I had account! Login</a>
                </form>
            </div>
            </div>
        </main>
    </body>
</html>
