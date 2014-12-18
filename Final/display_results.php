<?php
//Anthony Pirolli
    $email = $_COOKIE['email'];
    $heard_from = $_COOKIE['heard_from'];
    $contact_via = $_COOKIE['contact_via'];
    $comments = $_COOKIE['comments'];
    $phone = $_COOKIE['phone'];
    
    
    
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <title>Mailing List Results</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
       <div id="content">
            <h1>Account Information</h1>

            <label>Email Address:</label>
            <span><?php echo htmlspecialchars($email); ?></span><br />
            
            <label>Phone:</label>
            <span><?php echo htmlspecialchars($phone); ?></span><br />

            <label>Heard From:</label>
            <span><?php echo htmlspecialchars($heard_from); ?></span><br />

            <label>Contact Via:</label>
            <span><?php echo htmlspecialchars($contact_via); ?></span><br /><br />

            <span>Comments:</span><br />
            <span><?php echo htmlspecialchars($comments); ?></span><br />
            
            

        </div>
    </body>
</html>
