
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#  " name="mainform" method = "post">
            Password: <input type="password" name="password" value=""/>
            <input type="submit" value="Submit"/>
        </form>
        
        <?php
        
        
        session_start();
        
        if(!empty($_POST)){
            
            $password = $_POST['password'];
            if($password === 'test'){
            
            $_SESSION['loggedin'] = true;
            header('Location: admin.php');
            
            }else{
                
                $_SESSION['loggedin'] = false;
                
            }
        
            
        }
        
        ?>
    </body>
</html>
