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

$dbs = $db->prepare('delete from users where id = :id');     
     
$dbs->bindParam(':id', $id, PDO::PARAM_INT);
        
 if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
      header('Location: userInfo.php'); 
 } else {
      echo ' user ', $id,' has NOT been deleted';
 }       
?>
        
        <a href="index.php">Add User</a>
       <a href="userInfo.php">View Data</a>
    </body>
</html>