<?php

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class LapTimeCalculator
{
    /**
     * @param $lapTime
     * @param $slowerLapTime
     * @return mixed
     */
    public function getLapTimeDifferenceInMilliSecondsBetween($lapTime, $slowerLapTime)
    {
        $difference = floor(($slowerLapTime - $lapTime) * 1000);
        $differenceSeconds = floor($difference / 1000);
        $differenceMilliSeconds = floor($difference % 1000);

        if ($differenceMilliSeconds < 10) {
            return $differenceSeconds . '.' . '00' . $differenceMilliSeconds;}
        if ($differenceMilliSeconds < 100) {
            return $differenceSeconds . '.' . '0' . $differenceMilliSeconds;}
        return $differenceSeconds . '.' . $differenceMilliSeconds;
    }

    /**
     * @param $lapTime
     * @param $slowerLapTime
     * @return string
     */
    public function getLapTimeDifferenceBetween($lapTime, $slowerLapTime)
    {
        $differenceBetweenLapTimes = $this->getLapTimeDifferenceInMilliSecondsBetween($lapTime, $slowerLapTime);

        return '+' . $differenceBetweenLapTimes;
    }
}

