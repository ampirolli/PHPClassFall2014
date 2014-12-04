<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $id = $_POST['id']; 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $zip = $_POST['zip'];
        $phone = $_POST['phone'];
        $err = '';
        var_dump($_POST);
        if(!is_numeric($phone)){
            $err = "Please only enter digits for your phone number";
            include ('Errorpage.php');
        } else if (strlen($phone)  != 10){
            $err = 'phoen number must be 10 digits long(including the area code';
        } else if (strlen($zip) < 5 && strlen($zip)>5){
            $err = 'ZIP Code must be 5 digits long';
        } else
        {
            
            $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
            $dbs = $db->prepare('UPDATE users SET fullname = :name, email = :email, zip = :zip, phone = :phone  WHERE id = :id');
            
            $dbs->bindParam(':id', $id, PDO::PARAM_INT);
            $dbs->bindParam(':name', $name, PDO::PARAM_STR);
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs->bindParam(':zip', $zip, PDO::PARAM_STR);
            $dbs->bindParam(':phone', $phone, PDO::PARAM_STR);
  
           if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
            header('Location: userInfo.php'); 
            } else {
             echo 'user ', $id,' has not been updated.</h1>';
             var_dump($db->errorInfo());
            }       
            
        }
    
        echo $err;
        ?>
        <a href="index.php">Add User</a>
       <a href="userInfo.php">View Data</a>
        
    </body>
</html>