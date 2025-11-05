<?php
class Team {
    private $teamName;
    private $totalPoints = 0;
    private $totalGoals = 0;
    private $totalGames = 0;

    public function __construct($hGoals) {
        $this->teamName = $hGoals;
    }

    public function finalScore($hGoals, $aGoals) {
        $this->totalGoals = $this->totalGoals + $hGoals;
        $this->totalGames = $this->totalGames + 1;

        if ($hGoals > $aGoals) {
            $this->totalPoints = $this->totalPoints + 3;
        } elseif ($hGoals == $aGoals) {
            $this->totalPoints = $this->totalPoints + 1;
        }
    }
}