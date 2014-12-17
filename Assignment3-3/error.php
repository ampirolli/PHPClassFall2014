<html>


<body>
        <h2>Oooops you messed up :o</h2>
        <ul><?php foreach($error as $errors) : ?>
            <li><?php echo $errors;?></li>
            <?php endforeach;?>
        </ul>
        <p><a href="loginForm.php">Login</a></p>
        <p><a href="signupForm.php">SignUp</a></p>
        

</body>
</html>