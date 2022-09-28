<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "final";

    try {
        $conn = new pdo ("mysql:host=$hostname;dbname=$database",$username ,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo"Can't Connent database". $e->getMessage();
    }

    $title = "NutmitoDev!"

?>