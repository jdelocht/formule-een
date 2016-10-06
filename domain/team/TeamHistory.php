<?php

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class TeamHistory
{
    private $teamDebut;
    private $teamRaceStarts;
    private $teamRaceWins;
    private $teamChampionships;

    /**
     * TeamHistory constructor.
     * @param $teamDebut
     * @param $teamRaceStarts
     * @param $teamRaceWins
     * @param $teamChampionships
     */
    public function __construct($teamDebut, $teamRaceStarts, $teamRaceWins, $teamChampionships)
    {
        $this->teamDebut = $teamDebut;
        $this->teamRaceStarts = $teamRaceStarts;
        $this->teamRaceWins = $teamRaceWins;
        $this->teamChampionships = $teamChampionships;
    }

    public function getTeamDebut()
    {
        return $this->teamDebut;
    }

    public function getTeamRaceStarts()
    {
        return $this->teamRaceStarts;
    }

    public function getTeamRaceWins()
    {
        return $this->teamRaceWins;
    }

    public function getTeamChampionships()
    {
        return $this->teamChampionships;
    }
}