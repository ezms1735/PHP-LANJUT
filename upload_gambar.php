<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ypload File</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307010">
    <meta name="author" content="Ergi Zenila Marta Sasmige">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <p><label>Pilih gambar yang akan diupload: </label><br>
            <input type="file" name="gambar" value="Pilih Gambar" id="gambar1"></p>
        <input type="submit" value="Upload Image" name="submit">
    </form>

<?php 
    if(isset($_POST["submit"])){
        $target_dir = "gambar/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $uploadOk = 1;
        $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if($check !== false) {
            echo "File berupa citra/gambar - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }

        if(file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        if ($_FILES["gambar"]["size"] > 50000000) {
            echo "Sorry, file anda terlalu besar.";
            $uploadOk = 0;
        }

        if($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg"
            && $tipeGambar != "gif") {
                echo "Sorry, hanya file JPG, JPEG, PNG & GIF.";
                $uploadOk = 0;
        }

        if($uploadOk == 0) {
            echo "Sorry, File anda gagal upload.";
        } else {
            if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "file ". htmlspecialchars(basename($_FILES["gambar"]["name"])). " berhasil diupload.";
            } else {
                echo "Sorry, Ada error saat upload.";
            }
        }
    }
?>
</body>
</html>