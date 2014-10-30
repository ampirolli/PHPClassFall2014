        <?php
        
        $pdo = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
        $sql = "insert into userdata set Name='" . $_POST['Name'] .  "', Phone = '". $_POST['Email'] ."', "
                . "Email = '" . $_POST['Email'] . "', Zip = '" . $_POST['ZIP'] . "';";
        if($error_message = ''){
          if ( $pdo->exec($sql) ) {
                    echo 'Saved Data';                    
                } else {
                    echo 'Saved NOT Data';
                }
        }else{
            echo 'wrong';
        }
        
        
        
        ?>