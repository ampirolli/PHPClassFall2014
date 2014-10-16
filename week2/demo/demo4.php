<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        <?php
        // put your code here
        $fname = '';
        $lname = '';
        if(!empty($_POST)){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
        }
        include './validation.php';
        ?>        <h1> My Form </h1>
        <form action="#" method="post">
            First Name: <input type ="text" name="fname" value="<?php echo$fname; ?>"/><br/>
            Last Name: <input type ="text" name="lname" value ="<?php echo$lname; ?>"/><br/>
            <input type="submit"/>      
        </form>
        
        
        <?php
        // put your code here

        ?>
    </body>
</html>
