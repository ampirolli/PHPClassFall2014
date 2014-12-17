<?php
session_start();
$email = $_POST['email'];
$passwords = $_POST['password'];

if ( filter_var($email, FILTER_VALIDATE_EMAIL) != TRUE){
    $error = "Email is not valid format.";
    include('error.php'); 
}
if (empty($passwords)){
    $error = "Password must not be blank.";
    include('error.php'); 
} 
if(strlen($passwords)< 4){
    $error = "Password must be at least 4 characters long.";
    include('error.php');
} else {
    
    $passwords = sha1($passwords);
    require_once('database.php');
    $query = "INSERT INTO signup
                    (id, email, password)
             VALUES
             ('','$email','$passwords');";
    
    $db->exec($query);
    echo '<div><p>Data Added. </p></div>';
    
    include ('header.php');
    
}
    ?>