<?php 
//Anthony Pirolli
$error = '';
if(!empty($_POST)){
$email = $_POST['email'];
$phone = $_POST['phone'];
$heard_from = $_POST['heard_from'];
$contact_via = $_POST['contact_via'];
$comments= $_POST['comments'];
}

var_dump($_POST);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mailing List</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        <?php 
            echo $error;
        ?>
        
         <div id="content">
            <h1>Account Sign Up</h1>
            <form action="#" method="post">

            <fieldset>
            <legend>Account Information</legend>
                <label>E-Mail:</label>
                <input type="text" name="email" value="<?php if(empty($_POST)){echo '';}else{echo $_POST['email'];} ?>" class="textbox"/>
                <br />
                

                <label>Phone Number:</label>
                <input type="text" name="phone" value="<?php if(empty($_POST)){echo '';}else{echo $_POST['phone'];} ?>" class="textbox"/>
                
            </fieldset>

            <fieldset>
            <legend>Settings</legend>

                <p>How did you hear about us?</p>
                <input type="radio" name="heard_from" value="Search Engine" checked ="checked" <?php if(isset($heard_from)){if($heard_from === "Search Engine"){ echo 'checked = "checked"';}}?>/>
                Search engine<br />
                <input type="radio" name="heard_from" value="Friend" <?php if(isset($heard_from)){if($heard_from === "Friend"){ echo 'checked = "checked"';}}?>/>
                Word of mouth<br />
                <input type=radio name="heard_from" value="Other" <?php if(isset($heard_from)){if($heard_from === "Other"){ echo 'checked = "checked"';}}?>/>
                Other<br />
                
                

                <p>Contact via:</p>
                <select name="contact_via">
                        <option value="email" 
                            <?php 
                            if(isset($contact_via)){if ( $contact_via === 'email') {
                            echo 'selected="selected"';
                            }}?>
                                >Email</option>
                        <option value="text"
                            <?php
                            if (isset($contact_via)){if( $contact_via === 'text') {
                            echo 'selected="selected"';
                            }}?>
                                >Text Message</option>
                        <option value="phone"
                            <?php 
                            if (isset($contact_via)){if ( $contact_via === 'phone') {
                            echo 'selected="selected"';
                            }}
                            ?>
                                >Phone</option>
                </select>

                <p>Comments: (optional)</p>
                <textarea name="comments" rows="4" cols="50" value=""><?php if(empty($_POST)){echo '';}else{echo $_POST['comments'];} ?></textarea>
            </fieldset>

            <input type="submit" value="Submit" />
            <?php
           
            if(!empty($_POST)){
                
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                
                
                
                include './validation.php';
                $validate = new validation();

                if(!$validate->email_validation($email)){
                $error .='<p>Email is not valid.</p>';     
                }
                if(!$validate->phone_validation($phone)){
                $error .= '<p>Phone is not valid</p>';
                }
                
                
                if(empty($error)){
                    
                    setcookie('email',$_POST['email']);
                    setcookie('phone',$_POST['phone']);
                    setcookie('heard_from',$_POST['heard_from']);
                    setcookie('contact_via',$_POST['contact_via']);
                    setcookie('comments',$_POST['comments']);
                    
                    $pdo = new PDO("mysql:host=localhost;dbname=phpclassfall2014", "root", "");
        
        
                    $sql = $pdo->prepare("INSERT INTO account SET email = :email, phone = :phone, heard = :heard, contact = :contact, comments = :comments");

                    $sql->bindParam(':email', $email, PDO::PARAM_STR);
                    $sql->bindParam(':phone', $phone, PDO::PARAM_INT);
                    $sql->bindParam(':heard', $heard_from, PDO::PARAM_STR);
                    $sql->bindParam(':contact', $contact_via, PDO::PARAM_STR);
                    $sql->bindParam(':comments', $comments, PDO::PARAM_STR);
                    
                    if ( $sql->execute() && $sql->rowCount() > 0 )
                    {       
                        echo 'data saved';
                        header('Location: display_results.php');
                    }else{
                        echo 'Data not saved';
                        var_dump($pdo->errorInfo());
                    }

                    
                    
                    
                }else{ echo $error;}
                
            }
            
            
            
            ?>

            </form>
            <br />
        </div>
    </body>
</html>
