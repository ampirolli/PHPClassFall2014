<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css" />
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
 <div id="content">
    <h2>User Information</h2>
    
           <form action="addUser.php" method="post"
                  id="add_category_form">

                <label>Name:</label>
                <input type="input" name="name" />
                <br/>
                <label>Phone:</label>
                <input type="input" name="phone" />              
                <br/>
                <label>E-mail:</label>
                <input type="input" name="email" />
                <br/>
                <label>Zip:</label>
                <input type="input" name="zip" />
                <br/>
                 
                <label>&nbsp;</label>
                <input type="submit" value="Add" />
                <br />
            </form>  
        </div>
    <br/><p><a href="UserInfo.php">View current data</a></p>

    </body>
</html>
