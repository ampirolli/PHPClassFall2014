
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Logged out</h1>
        <a href="loginForm.php">Login</a>
        
        <?php
        session_start();
        $_SESSION['loggedin'] = false;
        ?>
    </body>
</html>