<?php 
include('./header.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
    </head>
    <body>
       <h1>Sign Up</h1>
        <form action="add_data.php" method="post">
            
            <label>Email:</label>
            <input type="input" name="email" /><br/>
            
            <label>Password:</label>
            <input type="password" name="password" type="input"/><br/>
            
                
            <input type="submit" value="Submit"/> 
        </form>
                
      
            
    </body>
</html>
