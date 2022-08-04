<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>เพิ่มข้อมูล</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <style>
    body {
      background: url('https://cdn.discordapp.com/attachments/803285536399032330/941563370824421406/w3.png?width=1920&height=1080');
    }
  </style>
  <body>

    <div style="background: white; border-radius: 20px; padding: 30px; padding-top: 10px; margin-top: 40px;" class="container">
      <div class="row">
        <div class="col-md-4"> <br> 
          <h4>ฟอร์มเพิ่มข้อมูล</h4>
          <form action="formAdd_db.php" method="post">

            <div class="mb-1">
              <label for="name" class="col-form-label"> ชื่อ :  </label>
                <div class="col-sm-10">
                <input type="text" name="name" class="form-control" required minlength="3" placeholder="ชื่อ">
              </div>
              </div>

              <div class="mb-1">
                <label for="name" class=" col-form-label"> นามสกุล :  </label>
                <div class="col-sm-10">
                  <input type="text" name="surname" class="form-control" required minlength="3" placeholder="นามสกุล">
                </div>
                </div>


              <div class="mb-1">
                <label for="name" class="col-form-label"> สาขาวิชา :  </label>
                <div class="col-sm-10">
                  <input type="text" name="study" class="form-control" required minlength="3" placeholder="สาขาวิชา">
                </div>
                </div> 
                <br>

                <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
              </form>
            </div>
          </div>
        </div>
      </body> <?php include'includes/footer.php' ?> 
    </html>