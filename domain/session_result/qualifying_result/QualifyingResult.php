<?php
namespace domain\session_result\qualifying_result;

class QualifyingResult
{
    /** @var string  */
    private $driver;
    /** @var string  */
    private $team;
    /** @var int  */
    private $qualifyingOneTime;
    /** @var int  */
    private $qualifyingTwoTime;
    /** @var int  */
    private $qualifyingThreeTime;
    /** @var   */
    private $numberOfLaps;

    /**
     * QualifyingResult constructor.
     * @param string $driver
     * @param string $team
     * @param int $qualifyingOneTime
     * @param int $qualifyingTwoTime
     * @param int $qualifyingThreeTime
     * @param $numberOfLaps
     */
    public function __construct($driver, $team, $qualifyingOneTime, $qualifyingTwoTime, $qualifyingThreeTime, $numberOfLaps)
    {
        $this->driver = $driver;
        $this->team = $team;
        $this->qualifyingOneTime = $qualifyingOneTime;
        $this->qualifyingTwoTime = $qualifyingTwoTime;
        $this->qualifyingThreeTime = $qualifyingThreeTime;
        $this->numberOfLaps = $numberOfLaps;
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
    public function getQualifyingOneTime()
    {
        return $this->qualifyingOneTime;
    }

    /**
     * @return int
     */
    public function getQualifyingTwoTime()
    {
        return $this->qualifyingTwoTime;
    }

    /**
     * @return int
     */
    public function getQualifyingThreeTime()
    {
        return $this->qualifyingThreeTime;
    }

    /**
     * @return mixed
     */
    public function getNumberOfLaps()
    {
        return $this->numberOfLaps;
    }
}
