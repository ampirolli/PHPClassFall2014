<?php
//require('database.php');

// Get the user data
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$zip = $_POST['zip'];

if (empty($name) || empty($phone) || empty($email) || empty($zip) ) {
    echo "No fields can be left blank! Please fill out all fields!";
    header('addUser.html');
} else if (!is_numeric($phone) || !is_numeric($zip)) {
    echo "Both the Phone field and the Zip field MUST be numeric. Please use numbers only!";
    include('index.html');
} else {
    // If valid, add the product to the database
    require_once('database.php');
        
            include $db;
            
            $updatequery = "UPDATE users set name = '$name', email = '$email', "
                    . "zip = '$zip', $phone = 'phone' where id = '$id';";
            $db->execute($updatequery);
            
            
            
        
}
 ?>           
