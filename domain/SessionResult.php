<?php
namespace domain;
use domain\session_result\ResultLine;

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class SessionResult
{
    const FreePractice1 = 1;
    const FreePractice2 = 2;
    const FreePractice3 = 3;
    const Qualifying1 = 4;
    const Qualifying2 = 5;
    const Qualifying3 = 6;
    const Race = 7;
    const FastestLapRace = 8;

    /**
     * @var ResultLine[]
     */
    private $resultLines;

    /**
     * SessionResult constructor.
     * @param ResultLine[] $resultLines
     */
    public function __construct($resultLines)
    {
        $this->resultLines = $resultLines;
    }

    /**
     * @return ResultLine[]
     */
    public function asArray()
    {
        return $this->resultLines;
    }

    /**
     * @return int
     */
    public function getFirstResultLineLapTime()
    {
        return $this->resultLines[0]->getLapTime();
    }

    /**
     * @param $position
     * @return int
     */
    public function getPointsForSession($position)
    {
        foreach ($this->resultLines as $position => $this->resultLines)
            if ($position == 0) {
                return 25;
            }
            if ($position == 1) {
                return 18;
            }
            if ($position == 2) {
                return 15;
            }
            if ($position == 3) {
                return 12;
            }
            if ($position == 4) {
                return 10;
            }
            if ($position == 5) {
                return 8;
            }
            if ($position == 6) {
                return 6;
            }
            if ($position == 7) {
                return 4;
            }
            if ($position == 8) {
                return 2;
            }
            if ($position == 9) {
                return 1;
            }
        return 0;
    }
}