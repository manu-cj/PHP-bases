<?php
$name = "Bonjour";
$gender = "";

function generateRandomNumber($min, $max) {
    return rand($min, $max);
}

$randomNumber = generateRandomNumber(1, 3);
$whatGender = ($randomNumber === 2) ? $gender = "Femelle" : $gender = "Homme, le sexe fort et dominant";
if ($randomNumber === 3) {
    $gender = "Les gens bizzare qui choisissent autre";
}

include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ternary</title>
</head>
<body>
<h1><?=$name?> <?=$gender?></h1>
    

</body>
</html>