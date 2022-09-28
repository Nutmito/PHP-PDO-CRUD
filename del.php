<?php
if(isset($_GET['id'])){
    require_once 'config.php';
    $id = $_GET['id'];
    $stmt = $conn->prepare('DELETE FROM tborder WHERE id=:id');
    $stmt->bindParam(':id', $id , PDO::PARAM_INT);
    $stmt->execute();
    
      if($stmt->rowCount() > 0){
            echo '<script>
                    window.location = "index.php";
                  </script>';
        }else{
           echo '<script>
                    window.location = "index.php";
                 </script>';
        }
    $conn = null;
    } 
?>