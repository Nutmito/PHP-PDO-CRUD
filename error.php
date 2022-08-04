<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>error!</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
    body {
      font-family: 'Kanit', sans-serif;
      background: url(https://cdn.discordapp.com/attachments/803285536399032330/941563370824421406/w3.png?width=1920&height=1080);
    }
</style>
<body>
</body>
</html>
<script>

    errors();

    function error() {
        window.location = "index.php"; 
    }

    function errors() {
     Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Something went wrong!',
      timerProgressBar: true,
      showConfirmButton: false,
      timer: 2000
     });
    }

    setTimeout(error, 2000);

</script>
