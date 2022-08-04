<?php 
if(isset($_GET['id'])){
require_once 'config/config.php';
$id = $_GET['id'];
$stmt = $conn->prepare('DELETE FROM tb_student WHERE id=:id');
$stmt->bindParam(':id', $id , PDO::PARAM_INT);
$stmt->execute();

echo '
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

  if($stmt->rowCount() > 0){
        header('location: index.php');
    }else{
        header('location: error.php');
    }
$conn = null;
} 
?>