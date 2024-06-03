<?php
$name = "emile";

echo ucfirst($name) . '<br>';

date_default_timezone_set('Europe/Brussels');
$date = date("Y-m-d H:i:s") . '<br>';

echo $date;

function addition($value1, $value2) {
    if (!is_numeric($value1) OR !is_numeric($value2)) {
        echo "Ce n'est pas un nombre <br>";
    } else {
        $result = $value1 + $value2;
        echo $result . "<br>";
    }
}

function initial($string) {
    if (!is_string($string)) {
        echo "Ce n'est pas une chaine de charactère <br>";
    }
    else {
        $stringExplode =  explode(" ", $string);
        foreach ($stringExplode as $value) {
            echo ucfirst($value[0]);
        }
    }
}

function stringCorrection ($string) {
    $text = str_replace("ae", "æ", $string);
    echo "<br>" . $text;
  
}



addition("po","po");
addition(3,6);

initial('In code we trust!');

stringCorrection("caecotrophie");

function afficherMessage($message, $classe) {
    $classesValides = ['info', 'error', 'warning'];
    if (!in_array($classe, $classesValides)) {
        $classe = 'info';
    }
    
    echo "<div class='$classe'>$message</div>";
}

afficherMessage("Vive la sapologie", 'info');
afficherMessage("Vive la sapologie", null);


$allLetters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$randomString = "";

 function generateString($min, $max) {
    $longueur = rand($min, $max);
    $allLetters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
     for ($i=0; $i < $longueur; $i++) { 
        $randomString = $allLetters[rand(0, strlen($allLetters) -1)];
        echo $randomString;
     }

     echo "<br>";
 }

 generateString(1, 5);
 generateString(7, 15);

 $notUpperCase = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";


 function calculate_cone_volume($value1, $value2) {
    $volume = $value1 * 5 * 3.14 * $value2 * (1/3);
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';
 }

 calculate_cone_volume(5, 2);
 
?>