<?php
namespace domain\session_result;

use domain\session_result\fp_session_result\SessionResult;
use domain\session_result\functions\LapTimeCalculator;
use domain\session_result\functions\LapTimeConverter;

class FreePracticeResultsForTheFirstDriverInArray
{
    /**
     * @var LapTimeConverter
     */
    private $lapTimeConverter;
    /**
     * @var LapTimeCalculator
     */
    private $lapTimeCalculator;

    /**
     * getFreePracticeResultsForOneDriver constructor.
     * @param LapTimeConverter $lapTimeConverter
     * @param LapTimeCalculator $lapTimeCalculator
     */
    public function __construct(LapTimeConverter $lapTimeConverter, LapTimeCalculator $lapTimeCalculator)
    {
        $this->lapTimeConverter = $lapTimeConverter;
        $this->lapTimeCalculator = $lapTimeCalculator;
    }

    /**
     * @param SessionResult $sessionResult
     * @param $position
     * @param $showDifference
     * @param int $fastestLapTime
     * @return string
     */
    public function getFreePracticeResultForTheFirstDriverInArray($sessionResult, $position, $showDifference, $fastestLapTime = 0)
    {
        $lapTime = $this->lapTimeConverter->defineLapTimeForFreePracticeConverter($sessionResult->getLapTime());
        $lapTimeDifferenceBetween = '';

        if ($showDifference) {
            $lapTimeDifferenceBetween = $this ->lapTimeCalculator->getLapTimeDifferenceBetween($fastestLapTime, $sessionResult->getLapTime()) . ' ';
        }
        return $position + 1 . '. ' . $sessionResult->getDriver() . ' ' . $sessionResult->getTeam() . ' ' .  $lapTime . ' ' . $lapTimeDifferenceBetween . $sessionResult->getNumberOfLaps();
    }
}