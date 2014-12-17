<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$error = array();

include_once('./functions.php');

if(email_validation($email) == true){
    $emailValid = true;
}else{
    $emailValid = false;
    array_push($error, 'Email is not valid.');
    include('error.php');
}
if(password_validation($password) == true){
    $passwordValid = true;
}else{
    $passwordValid = false;
    array_push($error, 'Password is not valid.');
    include('error.php');   
}

if(data_exists($email) == true){
    $exists = true;
}else{
    $exists = false;
    array_push($error, 'Email is not in database.');
    include('error.php');
}

if($emailValid == true && $passwordValid == true && $exists == true){
    if(data_search($password, $email) == true){
    $_SESSION['loggedin'] = true;
    header('Location: admin.php');
    }else{
        array_push($error, 'Your password and email combonation do not exists');
    }
}
