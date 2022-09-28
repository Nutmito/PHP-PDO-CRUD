<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="styles.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <center><br><br>
    <div class="container">
    <a href="index.php"><img style="width: 200px; border: solid 3px rgb(255, 81, 0); border-radius: 50%;" class="animation" src="https://scontent.fbkk22-2.fna.fbcdn.net/v/t39.30808-6/305960934_121300410682035_2140112860996098397_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=PZi8WTgiEb8AX_WvmB-&_nc_ht=scontent.fbkk22-2.fna&oh=00_AT8Jj-82IDLFwlNYYvwBnZt61sfNrgrDLMdVKPzqU_03YA&oe=6330FE36" alt=""></a>
    <h2>โปรเจคนี้ได้มาจากการสอบปลายภาคของผมในเวลา 3 ชม.</h2>
    <table class="tb-nutto">
        <thead>
            <tr>
                <th>รหัสการสั่ง</th>
                <th>วันที่สั่ง</th>
                <th>รหัสสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th>จำนวนการสั่ง</th>
                <th>ราคาขาย</th>
                <th>ราคารวม</th>
                <th>edit</th>
                <th>del</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $stmt = $conn->prepare("SELECT * FROM tborder");
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach($result as $q) {
            ?>
            <tr>
                <td><?= $q['id']; ?></td>
                <td><?= $q['date_order']; ?></td>
                <td><?= $q['code']; ?></td>
                <td><?= $q['name_pro']; ?></td>
                <td><?= $q['qty']; ?></td>
                <td><?= $q['price']; ?></td>
                <td><?= $q['total']; ?></td>
                <td><a class="button-edit" href="formEdit.php?id=<?= $q['id']; ?>">edit</a></td>
                <td><a class="button-del" onclick="return delFunction()"?>del</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <a class="btn-nutto" href="formAdd.php">Add+</a>
    </div>
    </center>
<script src="app.js"></script>
<script>

    function delre() {
        document.location.href = href="del.php?id=<?= $q['id'];?>";
    }

</script>
</body>
</html>