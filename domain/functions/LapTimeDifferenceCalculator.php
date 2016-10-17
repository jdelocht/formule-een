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
    public function getLapTimeDifferenceInMilliSecondsBetweenAlternative($lapTime, $slowerLapTime)
    {
        return $slowerLapTime - $lapTime ;
    }

    /**
     * @param $lapTime
     * @param $slowerLapTime
     * @return string
     */
    public function getLapTimeDifferenceBetweenAlternative($lapTime, $slowerLapTime)
    {
        $differenceBetweenLapTimes = $this->getLapTimeDifferenceInMilliSecondsBetweenAlternative($lapTime, $slowerLapTime);

        return '+' . $differenceBetweenLapTimes;
    }
}