<?php
namespace domain;

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class SessionResult
{
    /**
     * @var array
     */
    private $resultLines;

    /**
     * SessionResult constructor.
     * @param array $resultLines
     */
    public function __construct($resultLines)
    {
        $this->resultLines = $resultLines;
    }

    /**
     *
     */
    public function asArray()
    {
        return $this->resultLines;
    }

    /**
     * @param $lapTime
     * @param $slowerLapTime
     * @return mixed
     */
    public function calculateLapTimeDifferenceBetween($lapTime, $slowerLapTime)
    {
        $difference = floor(($slowerLapTime - $lapTime) * 1000);
        $differenceInSeconds = floor($difference / 1000);
        $differenceInMilliseconds = floor($difference % 1000);

        return '+'  . $differenceInSeconds . '.' . str_pad($differenceInMilliseconds, 3, '0', STR_PAD_LEFT);
    }
}