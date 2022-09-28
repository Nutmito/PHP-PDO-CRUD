<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <style>
  
  button[type=submit] {
    width: 100%;
    background-color: rgb(255, 81, 0);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
</style>
  <body>
    <?php
    if(isset($_GET['id'])){
      require_once 'config.php';
      $stmt = $conn->prepare("SELECT* FROM tborder WHERE id=?");
      $stmt->execute([$_GET['id']]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      if($stmt->rowCount() < 1){
          header('Location: index.php');
          exit();
      }
    }
    ?>
      <div class="form-nutto">
          <h1>Edit data!</h1>
          <form action="edit_db.php" method="post">
              <label for="name"> date</label>
                <input type="text" name="date_order" required value="<?= $row['date_order'];?>">
              <label for="name"> code</label>
                <input type="text" name="code" required value="<?= $row['code'];?>">
              <label for="name"> name_pro</label>
                <input type="text" name="name_pro" required value="<?= $row['name_pro'];?>">
              <label for="name"> qty</label>
                <input type="text" name="qty" required value="<?= $row['qty'];?>">
              <label for="name"> price</label>
                <input type="text" name="price" required value="<?= $row['price'];?>">
              <label for="name"> total</label>
                <input type="text" name="total" required value="<?= $row['total'];?>">

            <input type="hidden" name="id" value="<?= $row['id'];?>">
            <button type="submit">แก้ไขข้อมูล</button>
          </form>
      </div>
  </body>
</html>