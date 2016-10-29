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

    public function getDriver()
    {
        return $this->driver;
    }

    public function getTeam()
    {
        return $this->team;
    }

    public function getQualifyingOneTime()
    {
        return $this->qualifyingOneTime;
    }

    public function getQualifyingTwoTime()
    {
        return $this->qualifyingTwoTime;
    }

    public function getQualifyingThreeTime()
    {
        return $this->qualifyingThreeTime;
    }

    public function getNumberOfLaps()
    {
        return $this->numberOfLaps;
    }
}
// Q1 107% time - 1:38.075 Note - Vettel penalised 3 grid places for causing a collision at previous round. Wehrlein and Raikkonen penalised 5 grid places for unscheduled gearbox changes. Button penalised 35 grid places for unscheduled power unit element changes.