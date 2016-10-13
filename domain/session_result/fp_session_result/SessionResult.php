<?php

class SessionResult
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
    private $lapTime;
    /**
     * @var int
     */
    private $numberOfLaps;

    /**
     * SessionResult constructor.
     * @param string $driver
     * @param string $team
     * @param int $lapTime
     * @param int $numberOfLaps
     */
    public function __construct($driver, $team, $lapTime, $numberOfLaps)
    {
        $this->driver = $driver;
        $this->team = $team;
        $this->lapTime = $lapTime;
        $this->numberOfLaps = $numberOfLaps;
    }

    public function getDriver()
    {
        return $this->driver;
    }

    public function getTeam()
    {
        return $this->team;
    }

    public function getLapTime()
    {
        return $this->lapTime;
    }

    public function getNumberOfLaps()
    {
        return $this->numberOfLaps;
    }
}