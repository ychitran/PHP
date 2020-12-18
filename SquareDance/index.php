<?php
include_once("DanceFloor.php");

$danceFloor = new DanceFloor();

$danceFloor->addDancer('YChi', 'male');
$danceFloor->addDancer('Vu', 'male');
$danceFloor->addDancer('Cuong', 'male');
$danceFloor->addDancer('Tam', 'male');
$danceFloor->addDancer("Trinh", "female");
$danceFloor->addDancer("Diep", "female");
$danceFloor->addDancer("Huong", "female");
$danceFloor->addDancer("Ly Ly", "female");
$danceFloor->addDancer("San", "female");
$danceFloor->addDancer("Hien", "female");

$danceFloor->divideIntoGroups();

echo $danceFloor->pair();
