<?php

class RaceResult
{
    /**
    * @var string
    */
    private $driver;
   /**
    * @var string
    */
    private $team;
    /**
     * @var int
     */
    private $numberOfLaps;
    /**
     * @var int
     */
    private $timeOrRetired;
    /**
     * @var string
     */
    private $championshipPoints;

    /**
     * RaceResult constructor.
     * @param string $driver
     * @param string $team
     * @param int $numberOfLaps
     * @param string $timeOrRetired
     * @param int $championshipPoints
     */
    public function __construct($driver, $team, $numberOfLaps, $timeOrRetired, $championshipPoints)
    {
        $this->driver = $driver;
        $this->team = $team;
        $this->numberOfLaps = $numberOfLaps;
        $this->timeOrRetired = $timeOrRetired;
        $this->championshipPoints = $championshipPoints;
    }

    public function getDriver()
    {
        return $this->driver;
    }

    public function getTeam()
    {
        return $this->team;
    }

    public function getNumberOfLaps()
    {
        return $this->numberOfLaps;
    }

    public function getTimeOrRetired()
    {
        return $this->timeOrRetired;
    }

    public function getChampionshipPoints()
    {
        return $this->championshipPoints;
    }
}