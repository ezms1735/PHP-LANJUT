<!DOCTYPE html>
<html lang="en">
<head>
    <<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Komentar</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307010">
    <meta name="author" content="Ergi Zenila Marta Sasmige">
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama : <input type="text" name="name"> <br>
        E-mail : <input type="text" name="email"> <br>
        Komentar : <textarea name="comment" rows="5" cols="40"></textarea><br>
        <input type="submit" value="simpan">
        <input type="reset" value="bersihkan">
    </form>
<?php 
    $name = $email = $comment = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    echo("Nama : ".$name."<br>");
    echo("Email : ".$email."<br>");
    echo("Komentar : ".$comment."<br>");
    echo("<hr>");
    } 
    function bersihkan_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
</body>
</html>