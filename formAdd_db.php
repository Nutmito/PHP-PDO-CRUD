<?php
 //ถ้ามีค่าส่งมาจากฟอร์ม
    if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['study'])){
    //ไฟล์เชื่อมต่อฐานข้อมูล
    require_once 'config/config.php';
    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $study = $_POST['study'];
    //sql insert
    $stmt = $conn->prepare("INSERT INTO tb_student (name, surname, study)
    VALUES (:name, :surname, :study)");
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':surname', $surname , PDO::PARAM_STR);
    $stmt->bindParam(':study', $study , PDO::PARAM_STR);
    $result = $stmt->execute();
     // sweet alert 
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    if($result){
        header('location: index.php');
    }else{
        header('location: error.php');
    }
    $conn = null;
    } 
    ?>