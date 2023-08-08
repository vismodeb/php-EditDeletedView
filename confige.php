<?php

  $hostname = 'localhost';
  $database = 'php_3';
  $username = 'root';
  $password = '';

  try{
    $connection = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

?>