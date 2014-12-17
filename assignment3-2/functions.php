<?php


function email_validation($email){
    
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){  
        return true;
    }else{
        return false;
    }
  
}

function password_validation($password){
    
    if(strlen($password) > 4 && isset($password)){       
        return true;  
    }else{
        return false;
    }   
}


function data_exists($email){
    
    $db = new PDO('mysql:host=localhost;dbname=phpclassfall2014', 'root', '');
    $dbs= $db->prepare('SELECT * FROM SIGNUP WHERE EMAIL = :email');
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    
    if($dbs->execute() && $dbs->rowCount()>0)
    {
        return true;
    }else{
        return false;
    }
}

function data_search($password, $email){

    $hashword = sha1($password);

    $db = new PDO('mysql:host=localhost;dbname=phpclassfall2014', 'root', '');
    $dbs = $db->prepare('SELECT * FROM SIGNUP WHERE EMAIL = :email AND password = :password');
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    $dbs->bindParam(':password', $hashword, PDO::PARAM_STR);
    
    if($dbs->execute() && $dbs->rowCount() > 0){
        return true;
    } else {
        include ('./error.php');
        return false;
    }
}
