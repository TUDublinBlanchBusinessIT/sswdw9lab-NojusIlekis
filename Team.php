<?php

class Team {
    private $name;
    private $totalPoints;
    private $totalGames;
    private $totalGoals;

    public function __construct($teamName) {
        $this->name = $teamName;
        $this->totalPoints = 0;
        $this->totalGames = 0;
        $this->totalGoals = 0;
    }

    public function finalScore($homeScore, $opponentScore) {
        $this->totalGames += 1;
        $this->totalGoals += $homeScore;

        if ($homeScore > $opponentScore) {
            $this->totalPoints += 3;
        } elseif ($homeScore == $opponentScore) {
            $this->totalPoints += 1;
        }
        
    }

    public function displayStats() {
        echo "Team Name: $this->name\n";
        echo "Total Points: $this->totalPoints\n";
        echo "Total Games: $this->totalGames\n";
        echo "Total Goals: $this->totalGoals\n";
    }
}

?>
