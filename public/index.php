<?php
$name = "Reed Richards";
$age = 48;
$eyeColor = "marron";
$familyMembers = ["Susan Storm", "Franklin Richards", "Valeria Richards"];
$bool = true;
$response = "";

function generateRandomNumber($min, $max) {
    return rand($min, $max);
}

$randomNumber = generateRandomNumber(1, 2);

if (generateRandomNumber(1,2) === 2) {
    $bool = false;
}

if($bool === true){
    $response = "oui";
}else {
    $response = "non";
}

include "header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-bases</title>
</head>
<body>



<h1>Hello <?php echo $_GET['name'];?><?php echo $_GET['lastname'];?> !</h1>
<p>Mon nom est <?=$name?></^p>
<p>J'ai <?=$age?> ans</p>
<p> mes yeux sont <?=$eyeColor?></p>
<p>La première personne de ma famille est <?=$familyMembers[0]?></p>
<p>Ai-je faim ? <?=$response?></p>
</body>
</html>