<?php
include("Team.php");

$teamName = $_GET['teamName'];
$ht1 = $_GET['homeTeamScore1'];
$at1 = $_GET['awayTeamScore1'];
$ht2 = $_GET['homeTeamScore2'];
$at2 = $_GET['awayTeamScore2'];
$ht3 = $_GET['homeTeamScore3'];
$at3 = $_GET['awayTeamScore3'];

$homeTeam = new Team($teamName);

$homeTeam->finalScore($ht1, $at1);
$homeTeam->finalScore($ht2, $at2);
$homeTeam->finalScore($ht3, $at3);

echo "Team Name: " . $teamName . "<br>";
echo "Goal Average: " . $homeTeam->getGoalAverage() . "<br>";

?>
