<?php
    $dsn = 'mysql:host=localhost;dbname=phpclassfall2014';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error = "connection to database failed";
        include('error.php');
        exit();
    }
?>