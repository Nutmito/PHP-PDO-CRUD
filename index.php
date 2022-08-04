<?php require_once 'config/config.php'; ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title><?php echo $title ?></title>
        <link rel="icon" href="<?php echo $icon ?>">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            body{
                background: url(https://cdn.discordapp.com/attachments/803285536399032330/941563370824421406/w3.png?width=1920&height=1080);
            }
        </style>

    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container" style="background: white; border-radius: 20px; padding: 30px; padding-top: 10px;">
            <div class="row">
                <div class="col-md-12"> <br>
                 <div>
                      <h3>รายการสมาชิก <a href="formAdd.php" style="margin-left:96.5%;" class="btn btn-info"><i class="fa-solid fa-arrow-up-from-bracket"></i></a></h3> 
                  </div>
                    <table class="table table-striped  table-hover table-responsive table-bordered">
                        <thead>
                            <tr style="text-align: center">
                                <th width="2%">ลำดับ</th>
                                <th width="20%">ชื่อ</th>
                                <th width="20%">นามสกุล</th>
                                <th width="20%">สาขาวิชา</th>
                                <th width="1%">ข้อมูล</th>
                                <th width="1%">แก้ไข</th>
                                <th width="1%">ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once 'config/config.php';
                            $stmt = $conn->prepare("SELECT* FROM tb_student");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            foreach($result as $k) {
                            ?>
                            <tr>
                                <td style="text-align: center"><?= $k['id'];?></td>
                                <td><?= $k['name'];?></td>
                                <td><?= $k['surname'];?></td>
                                <td><?= $k['study'];?></td>
                                <td style="text-align: center"><a href="info.php?id=<?= $k['id'];?>" style="color: white;"class="btn btn-info btn-sm"><i style="h" class="fa-solid fa-circle-info"></i></a></td>
                                <td style="text-align: center"><a href="formEdit.php?id=<?= $k['id'];?>" style="color: white;"class="btn btn-warning btn-sm">แก้ไข</a></td>
                                <td style="text-align: center"><a onclick="return delFunction()" class="btn btn-danger btn-sm">ลบ</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>  <?php include'includes/footer.php' ?> 
</html>
<script>

        //ยืนยัน del function
        function delFunction() {
        Swal.fire({
            title: 'แน่ใจแล้วใช่ไหม?',
            text: "คุณจะไม่สามารถกู้คืนข้อมูลได้",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {            
        if (result.value) {
            Swal.fire({
                title: "ลบข้อมูลสำเร็จ",
                icon: "success",
                timerProgressBar: true,
                showConfirmButton: false,
                timer: 1000
            });

            setTimeout(delre, 1000);
                
            }
        })
    }

    function delre() {
        document.location.href = href="del.php?id=<?= $k['id'];?>";
    }

</script>