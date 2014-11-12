<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        print_r($_POST);
        
         $comments = filter_input(INPUT_POST, 'comments');
         
         $comments = htmlspecialchars($comments);
         
         
         echo nl2br($comments);
        
        ?>
        
        
        
          <form action="#" method="post">
            
              <textarea name="comments"><?php echo $comments;?></textarea>

              
<input type="submit" value="submit" />
            
            
        </form>
        
    </body>
</html>
