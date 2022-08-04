<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>ข้อมูล</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
  <?php
    if(isset($_GET['id'])){
      require_once 'config/config.php';
      $stmt = $conn->prepare("SELECT* FROM tb_student WHERE id=?");
      $stmt->execute([$_GET['id']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
      if($stmt->rowCount() < 1){
          header('Location: index.php');
          exit();
      }
    }
    ?>


    <img src="<?= $row['avartar'];?>" alt="Avartar User">
    <h2>Avartar</h2>
    <p>ชื่อ: <?= $row['name'];?></p>
    <p>นามสกุล: <?= $row['surname'];?></p>
    <p>สาขาวิชา: <?= $row['study'];?></p>
    <p></p>
 
  </body>
</html>