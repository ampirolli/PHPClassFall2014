
<?php

    require_once('database.php');
     if(!isset($key)) {
        //$key = $_GET['$key'];
        if (!isset($key)) {
            $key = 1;
        }
    }

    // get data
    
    $query = 'SELECT * FROM users
              ORDER BY id';
    $users = $db->query($query);

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
   <?php
        $db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
            $dbs = $db->prepare('select * from users');
        
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                
                $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
                echo '<tr><th>ID</th><th>Name</th><th>Email</th>';
                echo '<th>Phone</th><th>Zip</th><th></th><th></th></tr>';
                foreach ($results as $key => $value) {
                    echo '<tr>';
                     echo '<td>', $key ,'</td>';
                     echo '<td>', $value['fullname'] ,'</td>';
                     echo '<td>', $value['email'] ,'</td>';
                     echo '<td>', $value['phone'] ,'</td>';
                     echo '<td>', $value['zip'] ,'</td>';
                     echo '<td><a href="update_page.php">Update</a></td>';          
                     echo '<td><a href="delete_user.php?id=',$value['id'],'">Delete</a></td>';
                               
                    echo '</tr>';
                }
                echo '</table>';
            }
            
        ?>
    <br/><p><a href="index.php">Go back</a></p>   
    </body>
</html>