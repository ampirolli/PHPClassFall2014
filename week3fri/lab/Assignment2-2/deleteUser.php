<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
$id = filter_input(INPUT_GET, 'id');
$db = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
    $dbs = $db->prepare('DELETE FROM USERS WERE id = :id');     
     
    $dbs->bindParam(':id', $id, PDO::PARAM_INT);
        
 if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
     echo '<h1> user ', $id,' has been deleted</h1>';
 } else {
      echo '<h1> user ', $id,' has NOT been deleted</h1>';
 }       
?>
        
        <a href="UserInfo.php">View Users</a>
    </body>
</html>