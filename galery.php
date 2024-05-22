<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307010">
    <meta name="author" content="Ergi Zenila Marta Sasmige">
<style>
    body {
        display: flex;
        flex-wrap: wrap;
    }
    img {
        height: 5rem;
        width: auto;
        padding: 1rem 1rem;
    }
</style>
</head>
<body>
<?php
    $fileList = glob('gambar/*');
    if (count($fileList) > 0) {
        foreach ($fileList as $filename) {
            if (is_file($filename)) {
                echo '<img src="' . $filename . '" alt="gambar"><br>';
            }
        }
    } else {
        echo "Tidak ada gambar yang ditemukan.";
    }
?>
</body>
</html>