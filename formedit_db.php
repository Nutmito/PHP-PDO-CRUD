<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap');
    body {
        font-family: 'Kanit', sans-serif;
        background: url(https://cdn.discordapp.com/attachments/803285536399032330/941563370824421406/w3.png?width=1920&height=1080);
    }
</style>
<body>
<?php
 
if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['id'])) {

require_once 'config/config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];

$stmt = $conn->prepare("UPDATE  tb_student SET name=:name, surname=:surname WHERE id=:id");
$stmt->bindParam(':id', $id , PDO::PARAM_INT);
$stmt->bindParam(':name', $name , PDO::PARAM_STR);
$stmt->bindParam(':surname', $surname , PDO::PARAM_STR);
$stmt->execute();

 if($stmt->rowCount() > 0){
        echo '<script>
             setTimeout(function() {
              Swal.fire({
                  title: "แก้ไขข้อมูลสำเร็จ",
                  icon: "success",
                  timerProgressBar: true,
                  showConfirmButton: false,
                  timer: 1000
              }, function() {
              });
            }, 1);
        </script>';
        header( "refresh:1;url=index.php" );
    }else{
        header( "Location: error.php" );
    }
$conn = null;
} 
?>
</body>
</html>