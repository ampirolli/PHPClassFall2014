<?php
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}

switch ($action) {
    case 'start_app':
        $message = 'Enter some data and click on the Submit button.';
        break;
    case 'process_data':
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
        // 2. display the name with only the first letter capitalized
        
        if (empty($name)) 
        {
            $message = 'Please fill in the name field';
            break;
        
        } else {

            $fname = explode(' ', $name);
            $fname = $fname[0];
            $fname = ucfirst($fname);
            
        }
        
        
        


        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        // 2. make sure the email address has at least one @ sign and one dot character

        
        if(!isset($email))
            {
                $message = "Please fill in the email field";
                break;
            } else if( filter_var($email, FILTER_VALIDATE_EMAIL) != true){
                   $message = "Please enter a valid email.";
                   break;
               } 
        
        
        
        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
        // 2. format the phone number like this 123-4567 or this 123-456-7890

        $phone = str_replace('-', '', $phone);
        $phone = str_replace('(', '', $phone);
        $phone = str_replace(')', '', $phone);
        $phone = str_replace(' ', '', $phone);
         if (strlen($phone) < 7) {
            $message = 'Phone number must contain 7 digits';
            break;
        }

        
        if (strlen($phone) == 7) 
            {
            $phone1 = substr($phone, 0, 3);
            $phone2 = substr($phone, 3);
            $phone = $phone1 . '-' . $phone2;
        } else {
            $area = substr($phone, 0, 3);
            $phone1 = substr($phone, 3, 3);
            $phone2 = substr($phone, 6);
            $phone = $area . '-' . $phone1 . '-' . $phone2;
        }
                
                
        /*************************************************
         * Display the validation message
         ************************************************/
        $message = "Hello: $fname \n\n" . "Thank you for entering this data:\n\n" .
            "Name: $fname\n" ."Email: $email\n" ."Phone: $phone\n";

        break;
}
include 'string_tester.php';
?>