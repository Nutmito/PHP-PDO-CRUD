<?php
 //ถ้ามีค่าส่งมาจากฟอร์ม
if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['id'])) {
    //ไฟล์เชื่อมต่อฐานข้อมูล
     require_once 'config.php';
//ประกาศตัวแปรรับค่าจากฟอร์ม
$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
//sql update
$stmt = $conn->prepare("UPDATE  tbl_member SET name=:name, surname=:surname WHERE id=:id");
$stmt->bindParam(':id', $id , PDO::PARAM_INT);
$stmt->bindParam(':name', $name , PDO::PARAM_STR);
$stmt->bindParam(':surname', $surname , PDO::PARAM_STR);
$stmt->execute();

// sweet alert 
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

 if($stmt->rowCount() > 0){
        echo '<script>
             setTimeout(function() {
              swal({
                  title: "แก้ไขข้อมูลสำเร็จ",
                  type: "success"
              }, function() {
                  window.location = "index.php"; 
              });
            }, 1000);
        </script>';
    }else{
       echo '<script>
             setTimeout(function() {
              swal({
                  title: "เกิดข้อผิดพลาด",
                  type: "error"
              }, function() {
                  window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
              });
            }, 1000);
        </script>';
    }
$conn = null;
} 
?>