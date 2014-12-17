<a href='admin.php'>Home</a><br/>
<?php
session_start();

if (empty($_SESSION['loggedin']) ) {
   echo '<a href="loginForm.php">Login</a><br/>';
    echo '<a href="signupForm.php">SignUp</a><br/>';    
}



