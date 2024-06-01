<?php
include "header.php";

$choice = $_GET["choice"];
$gif = "";

$gif = match ($choice) {
    'human' => '<iframe src="https://giphy.com/embed/3o7WIxUZl89TTKrkhG" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/adweek-commercial-mms-3o7WIxUZl89TTKrkhG">via GIPHY</a></p>',
    'unicorn' => '<iframe src="https://giphy.com/embed/QYRLJtKNfvcafRfJFC" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/AgenceWAT-shh-sh-chut-QYRLJtKNfvcafRfJFC">via GIPHY</a></p>',
    'cat' => '<iframe src="https://giphy.com/embed/QObPo575HQHlGMhbae" width="320" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/QObPo575HQHlGMhbae">via GIPHY</a></p>',
    default => '<div style="width:480px"><iframe allow="fullscreen" frameBorder="0" height="270" src="https://giphy.com/embed/q3AQnx0YT1NagNhJeD/video" width="480"></iframe></div>'
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Are you Unicorn ?</title>
</head>
<body>
    
<br><br>
    <form action="http://localhost:7000/unicorn.php" >
    <input type="radio" id="unicorn" name="choice" value="unicorn">
        <label for="unicorn">Unicorn</label><br>
        <input type="radio" id="cat" name="choice" value="cat">
        <label for="cat">Cat</label><br>
        <input type="radio" id="human" name="choice" value="human">
        <label for="human">Human</label><br><br>
        <input type="submit" value="Submit">
    </form>
        <?=$gif?>
    
</body>
</html>