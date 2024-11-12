<?php

include("Team.php");

$myTeam = new Team("Tigers");

$myTeam->finalScore(2, 2);
$myTeam->finalScore(4, 3);
$myTeam->finalScore(0, 1);

$myTeam->displayStats();

echo "Calculated Goal Average: " . $myTeam->getGoalAverage() . "\n";

?>
