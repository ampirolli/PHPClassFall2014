<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>User Info</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
    <div id="content">
        <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
        <?php } // end if ?>
        
        <h1>User Info</h1>
        
        <?php 
        
        include './form.html';
        
         $pdo = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
         /*$dbs = $db->prepare('');
        
         $dbs->bindParam(':NAME', $Name, PDO::PARAM_STR);
         $dbs->bindParam(':PHONE', $Phone, PDO::PARAM_STR);
         $dbs->bindParam(':EMAIL', $Email, PDO::PARAM_STR);
         $dbs->bindParam(':ZIP', $Zip, PDO::PARAM_STR);*/
         
        
        ?>
    </div>
</body>
</html>