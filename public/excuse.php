<?php
include "header.php";

    if (isset($_GET['submit'])) {
        $studentName = $_GET['student-name'];
        $gender = "";
        $elProfessor = $_GET['professor-name'];
        $motifs = "";
        $now = date("H:i");
        

        if ($_GET['gender'] === "Male alpha") {
            $gender = "il";
        }
        else {
            $gender = "elle";
        }
        if ($_GET['motifs'] === "maladie") {
            $motifs = "est malade comme un chinchilla";
        }
        elseif ($_GET['motifs'] === "mort inopinée") {
            $motifs = "est mort de manière inopinée, oups !";
        }
        elseif ($_GET['motifs'] === "décès") {
            $motifs = "a un décès dans la famille, oups !";
        }
        elseif ($_GET['motifs'] === "activité") {
            $motifs = "est en activité extra scolaire !";
        }
        $msg = "Cher " . $elProfessor . ", " . $studentName . " ne sera pas présent aujourd'hui car " . $gender . " " . $motifs . "<br>";

        echo $msg;
        


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>excuse</title>
</head>
<body>
    -------------------------------------------------------------------
    <form action="excuse.php" method="get">
        <label for="student-name">Nom de l'élève</label>
        <br>
        <input type="text" name="student-name" id="student-name">
        <br>
        <br>
        <label for="gender">Genre</label>
        <br>
        <input type="radio" name="gender" id="male" value="Male alpha">
        <label for="male">Male alpha</label>
        <br>
        
        <input type="radio" name="gender" id="femelle" value="femelle">
        <label for="male">Femelle</label>
        <br>
        <br>
        <label for="professor-name">Nom du professeur</label>
        <br>
        <input type="text" name="professor-name" id="professor-name">
        <br>
        <br>
        <label for="motifs">Motifs : </label>
        <input type="radio" name="motifs" id="maladie" value="maladie">
        <label for="maladie">maladie</label>
        <input type="radio" name="motifs" id="mort inopinée" value="mort inopinée">
        <label for="dead">mort inopinée</label>
        <input type="radio" name="motifs" id="décès" value="décès">
        <label for="décès">décès</label>
        <input type="radio" name="motifs" id="activité" value="activité">
        <label for="activité">activité</label>
    <br>
    <br>
    <input type="submit" name="submit" value="Génèrer">
    </form>
</body>
</html>