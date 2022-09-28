<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
  
  input[type=submit] {
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
<div class="form-nutto">
  <h1>Add Data!</h1>
  <form action="add_db.php" method="POST">
    <label for="date_order">Date</label>
    <input type="text" name="date_order" placeholder="DateOrder">

    <label for="code">Code</label>
    <input type="text" name="code" placeholder="Code">

    <label for="name_pro">name_pro</label>
    <input type="text" name="name_pro" placeholder="Name Product">

    <label for="qty">qty</label>
    <input type="text" name="qty" placeholder="qty">

    <label for="qty">price</label>
    <input type="text" name="price" placeholder="price">

    <label for="total">total</label>
    <input type="text" name="total" placeholder="total">
  
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>