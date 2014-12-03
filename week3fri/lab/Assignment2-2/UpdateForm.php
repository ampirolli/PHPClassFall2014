<?php
//require('database.php');
//require('UserInfo');
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css" />
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
 <div id="content">
    <h2>Update User Information</h2>

               

                <label>Name:</label>
                <input type="input" name="name" value="<?php echo $value['fullname']; ?>"  />
                <br/>
                <label>Phone:</label>
                <input type="input" name="phone" value="<?php echo $value['email']; ?>"/>              
                <br/>
                <label>E-mail:</label>
                <input type="input" name="email" value="<?php echo $value['phone']; ?>"/>
                <br/>
                <label>Zip:</label>
                <input type="input" name="zip" value="<?php echo $value['zip']; ?>"/>
                <br/>
                 
                <label>&nbsp;</label>
                <input type="submit" value="Update" action="updateUser.php" />
                <br />
             
        </div>
    <br/><p><a href="UserInfo.php">Return</a></p>

    </body>
</html>