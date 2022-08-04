<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>formEdit</title>
  </head>
  <style>
    body{
      font-family: 'Kanit', sans-serif;
    }
  </style>
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
</div>
    <div class="container" class="row">
      <div class="row">
        <div class="col-md-4"> <br>
          <h4>ฟอร์มแก้ไขข้อมูล</h4>
          <form action="formedit_db.php" method="post">
            <div class="mb-1">
              <label for="name" class="col-sm-2 col-form-label"> ชื่อ :  </label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" required value="<?= $row['name'];?>" minlength="3">
              </div>
            </div>
            <div class="mb-1">
              <label for="name" class="col-sm-2 col-form-label"> นามสกุล :  </label>
              <div class="col-sm-10">
                <input type="text" name="surname" class="form-control" required value="<?= $row['surname'];?>" minlength="3">
              </div>
            </div>
            <div class="mb-1">
              <label for="name" class="col-sm-2 col-form-label"> สาขาวิชา :  </label>
              <div class="col-sm-10">
                <input type="text" name="study" class="form-control" required value="<?= $row['study'];?>" minlength="3">
              </div>
            </div>
            <input type="hidden" name="id" value="<?= $row['id'];?>">
            <button type="submit" class="btn btn-primary">แก้ไขข้อมูล</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>