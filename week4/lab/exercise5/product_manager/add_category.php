<?php
// Get the get category
$category = $_POST['category'];

if (empty($category) ) {
    $error = "Error. You must enter a valid name";
    include('error.php');}
	else
	{
    // If valid, add the category to the database
    require_once('database.php');
    $query = "INSERT INTO categories
                 (categoryName)
              VALUES
                 ('$category')";
    $db->exec($query);

    // Display the index List page
    include('category_list.php');
	}

?>