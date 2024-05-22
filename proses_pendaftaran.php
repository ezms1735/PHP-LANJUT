<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307010">
    <meta name="author" content="Ergi Zenila Marta Sasmige">
</head>
<body>
    Selamat Datang <b><?php echo $_POST["nama"]; ?></b><br>
    NIM : <?php echo $_POST["nim"]; ?><br>
    Email : <?php echo $_POST["email"]; ?><br>
    Tampat, Tanggal Lahir : <?php echo $_POST["ttl"]; ?> ,<?php echo $_POST["ttl"]; ?><br>
    Alamat : <?php echo $_POST["alamat"]; ?><br>
    Jenis Kelamin : <?php echo $_POST["gender"]; ?><br>
</body>
</html>