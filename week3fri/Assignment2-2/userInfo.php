<!DOCTYPE html>
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
                
                
                echo '<table border = 2>'; 
                echo '<tr><th>Index</th><th>ID</th><th>Email</th>';
                echo '<th>Name</th><th>Phone</th><th>ZIP</th><th></th></tr>';
                
                foreach ($results as $key => $value) {
                     echo '<tr>';
                     
                     echo '<td>', $value['id'] ,'</td>';
                     echo '<td>', $value['email'] ,'</td>';
                     echo '<td>', $value['fullname'] ,'</td>';
                     echo '<td>', $value['phone'] ,'</td>';
                     echo '<td>', $value['zip'] ,'</td>';
                     
                     echo '<td><a href="updateForm.php?id=',$value['id'],'">Update</a></td>';          
                     echo '<td><a href="deleteUser.php?id=',$value['id'],'">Delete</a></td>';          
                     echo '</tr>';
                }
                echo '</table>';
            }
                
        ?>
        <a href="index.php">Add User</a>
       
    </body>
</html>