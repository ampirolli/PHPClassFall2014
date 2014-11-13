<?php
// Delete the categories from the database
require_once('database.php');
$categoryName = $_POST['delete'];
$query = "DELETE 
FROM categories
where categoryName = '$categoryName'";
$db->exec($query);

// display the category List page
include('category_list.php');
?>
