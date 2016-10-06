<?php

class TeamInfo
{
    private $teamPrincipal;
    private $teamHistory;
    private $factory;

    /**
     * TeamInfo constructor.
     * @param $teamPrincipal
     * @param TeamHistory $teamHistory
     * @param $factory
     */
    public function __construct($teamPrincipal, TeamHistory $teamHistory, $factory)
    {
        $this->teamPrincipal = $teamPrincipal;
        $this->teamHistory = $teamHistory;
        $this->factory = $factory;
    }

    public function getTeamPrincipal()
    {
        return $this->teamPrincipal;
    }

    public function getTeamDebut()
    {
        return $this->teamHistory->getTeamDebut();
    }

    public function getTeamRaceStarts()
    {
        return $this->teamHistory->getTeamRaceStarts();
    }

    public function getTeamRaceWins()
    {
        return $this->teamHistory->getTeamRaceWins();
    }

    public function getTeamChampionships()
    {
        return $this->teamHistory->getTeamChampionships();
    }
    public function getFactory()
    {
        return $this->factory;
    }
}