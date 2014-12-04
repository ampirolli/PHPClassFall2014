<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $zip = $_POST['zip'];
        $error_message = '';
        
        if(empty($name)){
            $error_message .= '<p>Name field cannot be left blank</p>';
        } if(empty($_POST['phone'])){
             $error_message .= '<p>Phone Number cannot be left blank</p>';
        } if(empty($_POST['email'])){
             $error_message .= '<p>Email cannot be left blank</p>';
        }  if(empty($_POST['zip'])){
             $error_message .= '<p>Zip code cannot be left blank</p>';
        } if(!is_numeric($phone)){
            $error_message .= '<p>Only numbers are allowed in the Phone field</p>';
        } if(!is_numeric($zip)){
            $error_message .= '<p>Only numbers can be used in the Zip code field</p>';
        }
        
        
        $pdo = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
        
        $sql = $pdo->prepare("INSERT INTO USERS SET fullname = :fullname, email = :email, phone = :phone, zip = :zip");
        
        $sql->bindParam(':fullname', $name, PDO::PARAM_STR);
        $sql->bindParam(':phone', $phone, PDO::PARAM_INT);
        $sql->bindParam(':email', $email, PDO::PARAM_STR);
        $sql->bindParam(':zip', $zip, PDO::PARAM_STR);
        
        if($error_message == '')
        {
        
            if ( $sql->execute() && $sql->rowCount() > 0 )
            {       
                header('Location: userInfo.php'); 
            }else{
                echo 'Data not saved'; 
            }
        }else{
            echo $error_message;
        }
        ?>
       <a href="index.php">Add User</a>
       <a href="userInfo.php">View Data</a>
    </body>
</html>
