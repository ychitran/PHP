<?php
include_once "data.php";
$stopwatch = new stopWatch();
$stopwatch->start();
$arr = [];
for ($i = 1; $i < 100000; $i++) {
    array_push($arr, $i);
}
$stopwatch->stop();
echo "Time " . $stopwatch->getElapsedTime();
