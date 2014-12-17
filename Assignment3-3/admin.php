<?php

session_start();
echo '<a href="logout.php">logout</a><br/>';
echo "Admin buddy";

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)
    {
         header('Location: loginForm.php');
    }
    
    if(!empty($_GET)){
            $logout = $_GET['logout'];
            
            if($logout == "true"){
                $_SESSION['loggedin'] = false;
                header('Location: logout.php');
            }
        }
        