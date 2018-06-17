<?php
    $dsn = 'mysql:host=localhost;dbname=servmill';
    $username = 'root';
    $password = '';
    try {
      $conn = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('error.php');
        exit();
    }
?>
