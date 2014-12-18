<?php
//Anthony Pirolli


class validation{
    
    
    function email_validation($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }
    
    function phone_validation($phone){
        if(preg_match("/^[0-9]{10}$/", $phone)){
            return true;
        }else{
            return false;
        }
    }
    
    
    
}

