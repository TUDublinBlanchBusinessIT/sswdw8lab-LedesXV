<?php
include 'Team.php';

$tigers = new Team("Tigers");

$tigers->finalScore(4, 2);
$tigers->finalScore(2, 2);
$tigers->finalScore(3, 0);

echo "Goal Average: " . $tigers->getGoalAverage();
?>
