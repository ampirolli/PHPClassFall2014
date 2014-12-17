<?php 
include('./header.php');
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="login.php" method="post">
            
            <label>Email:</label>
            <input type="input" name="email" /><br/>
            
            <label>Password:</label>
            <input type="password" name="password" type="input"/><br/>
            
                
            <input type="submit" value="Login"/> 
        </form>
                
      
            
    </body>
</html>
