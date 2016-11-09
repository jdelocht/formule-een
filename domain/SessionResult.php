<?php
namespace domain;
use domain\session_result\ResultLine;

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class SessionResult
{
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

    public function getPointsForSession($position)
    {
        if ($position == 1) {
            return 25;
        } if ($position == 2) {
            return 18;
        } if ($position == 3) {
            return 15;
        } if ($position == 4) {
            return 12;
        } if ($position == 5) {
            return 10;
        } if ($position == 6) {
            return 8;
        } if ($position == 7) {
            return 6;
        } if ($position == 8) {
            return 4;
        } if ($position == 9) {
            return 2;
        } if ($position == 10) {
            return 1;
        }
        return '0';
    }
}