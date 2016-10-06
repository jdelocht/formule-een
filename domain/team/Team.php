<?php

class Team
{
    private $teamName;
    private $teamEngine;
    private $chassisName;
    private $teamInfo;
    private $teamDriverOne;
    private $teamDriverTwo;

    /**
     * Team constructor.
     * @param string $teamName
     * @param string $teamEngine
     * @param string $chassisName
     * @param TeamInfo $teamInfo
     * @param string $teamDriverOne
     * @param string $teamDriverTwo
     */
    public function __construct($teamName, $teamEngine, $chassisName, TeamInfo $teamInfo, $teamDriverOne, $teamDriverTwo)
    {
        $this->teamName = $teamName;
        $this->teamEngine = $teamEngine;
        $this->chassisName = $chassisName;
        $this->teamInfo = $teamInfo;
        $this->teamDriverOne = $teamDriverOne;
        $this->teamDriverTwo = $teamDriverTwo;
    }

    public function getTeamName()
    {
        return $this->teamName;
    }

    public function getTeamEngine()
    {
        return $this->teamEngine;
    }

    public function getChassisName()
    {
        return $this->chassisName;
    }

    public function getTeamPrincipal()
    {
        return $this->teamInfo->getTeamPrincipal();
    }

    public function getFactoryLocation()
    {
        return $this->teamInfo->getFactory();
    }

    public function getTeamChampionships()
    {
        return $this->teamInfo->getTeamChampionships();
    }
    //Hoe kan dit anders?
    public function getTeamDriverOne()
    {
        return $this->teamDriverOne;
    }

    //Hoe kan dit anders?
    public function getTeamDriverTwo()
    {
        return $this->teamDriverTwo;
    }
}