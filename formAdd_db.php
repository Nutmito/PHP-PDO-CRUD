<?php

    if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['study'])){

    require_once 'config/config.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $study = $_POST['study'];

    $stmt = $conn->prepare("INSERT INTO tb_student (name, surname, study)
    VALUES (:name, :surname, :study)");
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':surname', $surname , PDO::PARAM_STR);
    $stmt->bindParam(':study', $study , PDO::PARAM_STR);
    $result = $stmt->execute();

    if($result){
        header('location: index.php');
    }else{
        header('location: error.php');
    }
    $conn = null;
    } 
    ?>