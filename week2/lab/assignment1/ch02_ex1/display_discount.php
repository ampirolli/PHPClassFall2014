0<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <div id="content">
        
         <?php

        $error_message = '';
         
        $product_description = $_POST['product_description'];
        $list_price = $_POST['list_price'];
        $discount_percent = $_POST['discount_percent'];
        

        
        $discount = $list_price * $discount_percent * .01;
        $discount_price = $list_price - $discount;
            
        $list_price_formatted = "$".number_format($list_price, 2);
        $discount_percent_formatted = $discount_percent."%";
        $discount_formatted = "$".number_format($discount, 2);
        $discount_price_formatted = "$".number_format($discount_price, 2);
        
        if(empty($_POST['product_description']) === true){
        $error_message = 'Product description is a required field';
        }
        
        if(empty($list_price)){
            $error_message = 'List Price is a required field';
        }
        else if(!is_numeric($list_price)){
            $error_message = 'List Price should be a number';
        }else if(empty($discount_price)){
            $error_message = 'Discount Price is a required field';
        }
        else if(!is_numeric($discount_price)){
            $error_message = 'Discount Price should be a number';
        }
       
        
        
        else {
        $error_message = ''; }

        // if an error message exists, go to the index page
        if ($error_message != '') {
            include('index.php');
            exit();
        }
        
        ?>
        
        <h1>Results</h1>

        <label>Product Description:</label>
        <span name = ><?php echo $product_description; ?></span><br />

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br />

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br />

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br />

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br />

       
        
        <p>&nbsp;</p>
    </div>
</body>
</html>