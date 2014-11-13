<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $my_str1 = 'string1';
            $my_str2 = "single $my_str1";
            $my_str3 = 'single '. $my_str1;
            $my_str4 = 'single . ${my_str1}';
            $my_str5 = "single  ${my_str1}";
            
            echo $my_str2;
            echo '<br />', $my_str3;
        
        ?>
    </body>
</html>
