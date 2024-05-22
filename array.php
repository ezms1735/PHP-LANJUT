<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307010">
    <meta name="author" content="Ergi Zenila Marta Sasmige">
</head>
<body>
<?php
    $data = array(
        array("nama" => "Ergi", "umur" => 19),
        array("nama" => "Elin", "umur" => 18),
        array("nama" => "Aceng", "umur" =>20),
        array("nama" => "Olip", "umur" => 20),
        array("nama" => "Zizi", "umur" => 20),
        array("nama" => "Riska", "umur" => 19),
        array("nama" => "Wisnu", "umur" => 18),
        array("nama" => "Dion", "umur" => 20),
        array("nama" => "Reza", "umur" => 19),
        array("nama" => "Prima", "umur" => 21),
        array("nama" => "Hellen", "umur" => 18),
        array("nama" => "Sasa", "umur" => 17),
        array("nama" => "Prisko", "umur" => 21),
        array("nama" => "Gilang", "umur" => 20),
        array("nama" => "Aris", "umur" => 19)
    );

    $json_data = json_encode($data, JSON_PRETTY_PRINT);

    echo nl2br($json_data);
?>
</body>
</html>