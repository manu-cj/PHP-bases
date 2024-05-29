<?php
include "header.php";
// 1.1 Clean your room Exercise 

$room_is_filthy = true;

if( $room_is_filthy === true ){
    echo "Yuk, Room is dirty : let's clean it up !";
    echo "<br>Room is now clean!";
    $room_is_filthy = false;
} else {
    echo "<br>Nothing to do, room is neat.";
}

// 1.2


$possible_states = ["filthy", "dirty", "clean", "immaculate"];

function generateRandomNumber($min, $max) {
    return rand($min, $max);
}

$randomNumber = generateRandomNumber(0, count($possible_states));
$romm_filthiness = $possible_states[$randomNumber];
echo $randomNumber;
if( $romm_filthiness === "filthy" ){
    echo $romm_filthiness;
    echo "<br>Yuk, Room is Disgusting! Let's clean it up !<br>";
  
} elseif ($romm_filthiness === "dirty") {
    echo $romm_filthiness;
    echo "<br>Yuk, Room is dirty : let's clean it up !<br>";
}
elseif ($room_filthiness === "clean") {
    echo $romm_filthiness;
    echo "<h1>Room is clean. No need to clean it up.</h1><br>";
}
else {
    echo "<br>Nothing to do, room is neat.<br>";
}

//1.3
date_default_timezone_set('Europe/Brussels');
$now = date("H:i");
$personType = "Wow ! Toujours en vie ? Es-tu un robot, comme moi ? Puis-je te serrer dans mes bras ?";
$gender = "";
$langage = "oui";
if (isset($_GET['age'])) {
    $age = $_GET['age'];
    if ($age < 12) {
        $personType = "gamin";
    } elseif ($age >= 12 && $age < 18) {
        $personType = "adolescent";
    } elseif ($age >= 18 && $age < 115) {
        $personType = "adulte";
    } elseif ($age >= 115) {
        $personType = "Wow ! Toujours en vie ? Es-tu un robot, comme moi ? Puis-je te serrer dans mes bras ?";
    }
}

if (isset($_GET['man'])) {
    $gender = $_GET['man'];
}
elseif (isset($_GET['female'])) {
    $gender = $_GET['female'];
}
elseif (isset($_GET['other'])) {
    $gender = $_GET['other'];
}

if (isset($_GET['yes'])) {
    $langage = "bonjour";
}
elseif (isset($_GET['no'])) {
    $langage = "aloha";
}


if ($now > "05:00" AND $now < "09:00") {
    echo  $langage. " ". $gender . " " . $personType;
}
elseif ($now > "09:01" AND $now < "12:00") {
    echo $langage . " " . $gender . " " . $personType;
}
elseif ($now > "12:01" AND $now < "16:00") {
    echo $langage . " "  . $gender . " " . $personType;
}

elseif ($now > "16:01" AND $now < "21:00") {
    echo $langage . " " . $gender . " " . $personType;
}
elseif ($now > "21:01" AND $now < "04:59") {
    echo $langage . " "  . $gender . " " . $personType;
}


// 1.4
if (isset($_GET['submit-football'])) {
    $name = $_GET['name'];
    $ages = $_GET['age'];
    $genre = '';
    if ($_GET['man']) {
        $genre = $_GET['man'];
    }
    elseif ($get['female']) {
        $genre = $_GET['female'];
    }
    elseif ($_GET['other']) {
        $genre = $_GET['other'];
    }

    if ($genre !== "femelle" OR $age < 21 OR $age > 40 ) {
        echo '<br><br>Désolé ' . $name . " vous ne répondez pas aux critères de sélèction<br><br>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condition</title>
</head>
<body>
    <form action="conditions.php" method="get">
        <label for="age">Quel est ton age</label>
        <input type="number" name="age" id="age">
        <br>
        <label for="gender">Tu es un Homme virile, une femelle, ou un wokiste</label>
        <br>
        <input type="radio" name="man" id="man" value="homme virile">
        <label for="man">Homme virile</label>
        <br>
        <input type="radio" name="female" id="female" value="femelle">
        <label for="female">Femelle</label>
        <br>
        <input type="radio" name="other" id="other" value="wokiste">
        <label for="other">Wokiste</label>
        <br>
        <label for="langage">Parler vous anglais ?</label>
        <br>
        <input type="radio" name="yes" id="langage" value="oui">
        <label for="yes">Oui</label>
        <br>
        <input type="radio" name="no" id="langage" value="non">
        <label for="no">Non</label>
        <br>
        <input type="submit" value="send">
    </form>
    <br><br>

    <form action="conditions.php" method="get">
        <label for="name">Donne TON NOM !!!</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="age">Quel est ton age</label>
        <input type="number" name="age" id="age">
        <br>
        <label for="gender">Tu es un Homme virile, une femelle, ou un wokiste</label>
        <br>
        <input type="radio" name="man" id="man" value="homme virile">
        <label for="man">Homme virile</label>
        <br>
        <input type="radio" name="female" id="female" value="femelle">
        <label for="female">Femelle</label>
        <br>
        <input type="radio" name="other" id="other" value="wokiste">
        <label for="other">Wokiste</label>
        <br>
        <input type="submit" name="submit-football" value="send">
    </form>
</body>
</html>