<?php

include "header.php";

$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');

foreach ($pronouns as $value) {
    echo $value . ' code <br>';
}

$i = 1;
while ($i < 121) {
    echo $i++ . '<br>';
}

for ($i = 1; $i < 121; $i++) {
    echo $i . '<br>';
}

$startupName = ['Manu', 'Tom', 'Ilies', 'Giovani'];

foreach ($startupName as $value) {
    echo $value . '<br>';
}

$pays = array(
    'FR' => 'France',
    'BR' => 'Brésil',
    'JP' => 'Japon',
    'CA' => 'Canada',
    'AU' => 'Australie',
    'DE' => 'Allemagne',
    'IN' => 'Inde',
    'CN' => 'Chine',
    'US' => 'États-Unis',
    'GB' => 'Royaume-Uni'
);

$option['pays'];

foreach ($pays as $key => $value) {
    echo  "<option value='".$value ."'>". $key . ' ' . $value ."</option>";         }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boucle</title>
</head>

<body>
    <form action="boucle.php" method="get">
        <select name="pays" id="pays">
            <?php
        foreach ($pays as $key => $value) {
            ?>
    <option value='<?= $value ?>'><?=$key?> <?=$value?></option>";
    <?php
         }

?>
        </select>
    </form>
</body>

</html>