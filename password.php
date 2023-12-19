<?php
$passwordLength = $_GET["passwordLength"] ?? "Visitatore";
$msg = "$passwordLength";

$password = ["A", "B", "C", "D", "E", "F", "G"];




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $msg ?></h1>
    <a href="form.php">Torna alla pagina di inserimento</a>
</body>

</html>