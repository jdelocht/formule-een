<?php

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class LapTimeCalculator
{
    /**
     * @param $lapTime
     * @return float
     */
    function convertTimeOneForLapTimeDifferenceFreePractice($lapTime)
    {
        $minutes = floor($lapTime / 100000);
        $seconds = floor($lapTime / 1000) % 100;

        return $minutes * 60 + $seconds;
    }

    /**
     * @param $lapTime
     * @param $slowerLapTime
     * @return float
     */
    function getLapTimeDifferenceInSecondsBetween($lapTime, $slowerLapTime)
    {
        $convertTimeOneForLapTimeDifferenceFreePractice = $this->convertTimeOneForLapTimeDifferenceFreePractice($lapTime);
        $convertTimeOneForLapTimeDifferenceFreePractice1 = $this->convertTimeOneForLapTimeDifferenceFreePractice($slowerLapTime);

        return $convertTimeOneForLapTimeDifferenceFreePractice1 - $convertTimeOneForLapTimeDifferenceFreePractice;
    }

    /**
     * @param $lapTime
     * @param $slowerLapTime
     * @return float
     */
    function getLapTimeDifferenceInMilliSecondsBetween($lapTime, $slowerLapTime)
    {
        return floor($slowerLapTime % 1000) - floor($lapTime % 1000);
    }

    /**
     * @param $lapTime
     * @param $slowerLapTime
     * @return string
     */
    function getLapTimeDifferenceBetween($lapTime, $slowerLapTime)
    {
        $differenceSeconds = $this->getLapTimeDifferenceInSecondsBetween($lapTime, $slowerLapTime);
        $differenceMilliseconds = $this->getLapTimeDifferenceInMilliSecondsBetween($lapTime, $slowerLapTime);

        return '+' . $differenceSeconds . '.' . $differenceMilliseconds;
    }
}