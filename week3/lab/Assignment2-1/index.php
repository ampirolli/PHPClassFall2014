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
         $dbs = $pdo->prepare('select * from users');
        
         $dbs->bindParam(':Name', $Name, PDO::PARAM_STR);
         $dbs->bindParam(':Phone', $Phone, PDO::PARAM_STR);
         $dbs->bindParam(':Email', $Email, PDO::PARAM_STR);
         $dbs->bindParam(':Zip', $Zip, PDO::PARAM_STR);
         if($error_message = ''){
            if ( $pdo->exec($dbs) ) {
                echo 'Saved Data';
            } else {
                echo 'Data not Saved';
            }
            }else{
                echo '';
            }

        
        ?>
    </div>
</body>
</html>