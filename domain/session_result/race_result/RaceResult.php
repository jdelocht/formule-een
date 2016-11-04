<?php
namespace domain\session_result\race_result;

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
     * @var string
     */
    private $timeOrRetired;
    /**
     * @var int
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

    /**
     * @return string
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @return string
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @return int
     */
    public function getNumberOfLaps()
    {
        return $this->numberOfLaps;
    }

    /**
     * @return string
     */
    public function getTimeOrRetired()
    {
        return $this->timeOrRetired;
    }

    /**
     * @return int
     */
    public function getChampionshipPoints()
    {
        return $this->championshipPoints;
    }
}