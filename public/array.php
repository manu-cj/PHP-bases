<?php
include "header.php";

$me = array(
    'firstname' => 'Manu',
    'lastname' => 'cj',
    'like football' => 'no'
);
$me['hobbies'] = ['video-game', 'programmation', 'basket-ball'];

$mother = array(
    'firstname' => 'boby',
    'lastname' => 'pitafrite',
    'like football' => 'no'
);
$mother['hobbies'] = ['manger des kebabs', 'faire des cumulés', 'se prendre pour un tabouret asiatique'];


$me['mother'] = $mother;

$me['hobbies'][] = 'taxidermie❤️';
$me['lastname'] = 'Durand';

$soulMate = array( 'firstname' => 'Maria',
'lastname' => 'Delapampa',
'like football' => 'no',
'hobbies' => ['video-game','programmation', 'piano']);

$numberHobbie = count($me['hobbies']);
$numberHobbieMom = count($me['mother']['hobbies']);
echo $numberHobbie + $numberHobbieMom;
echo '<pre>';
print_r($me);
echo '</pre>';

$children = array(
    'firstname' => 'Lysia',
'lastname' => 'cj',
'like football' => 'no',
'hobbies' => []);


foreach ($me['hobbies'] as $hobby) {
   $children['hobbies'][] = $hobby;
}
foreach ($soulMate['hobbies'] as $hobby) {
    if (!in_array($hobby, $children['hobbies'])) {
        $children['hobbies'][] = $hobby;
    }
 }

 echo '<pre>';
print_r($children);
echo '</pre>';

$identicalHobbies = array_intersect($me['hobbies'], $soulMate['hobbies']);

$allHobbies = array_merge($me['hobbies'], $soulMate['hobbies']);



echo '<pre>';
print_r($commonHobbies);
echo '</pre>';

echo '<pre>';
print_r($allHobbies);
echo '</pre>';

?>