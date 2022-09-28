<?php

    if(isset($_POST['date_order']) && isset($_POST['code']) && isset($_POST['name_pro']) && isset($_POST['qty']) && isset($_POST['price']) && isset($_POST['total'])){

    require_once 'config.php';

    $date_order = $_POST['date_order'];
    $code = $_POST['code'];
    $name_pro = $_POST['name_pro'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $total = $_POST['total'];

    $stmt = $conn->prepare("INSERT INTO tborder (date_order, code, name_pro, qty, price, total) VALUES (:date_order, :code, :name_pro, :qty, :price, :total)");
    $stmt->bindParam(':date_order', $date_order, PDO::PARAM_STR);
    $stmt->bindParam(':code', $code , PDO::PARAM_STR);
    $stmt->bindParam(':name_pro', $name_pro , PDO::PARAM_STR);
    $stmt->bindParam(':qty', $qty , PDO::PARAM_STR);
    $stmt->bindParam(':price', $price , PDO::PARAM_STR);
    $stmt->bindParam(':total', $total , PDO::PARAM_STR);
    $result = $stmt->execute();

    if($result){
        echo '<script>
           window.location = "index.php"
        </script>';
    }else{
       echo '<script>
           window.location = "index.php"
        </script>';
    }
    $conn = null;
} 
?>