<?php
    $dsn = 'mysql:host=localhost;dbname=todolist';
    $username = 'root';
    // $password = 'sesame'     COMMENTED OUT FOR CLASS PURPOSES
    
    try {
        $db = new PDO($dsn, $username);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>