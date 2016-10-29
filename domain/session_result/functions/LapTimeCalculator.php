<?php
namespace domain\session_result\functions;

class LapTimeCalculator
{
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

        return $differenceInSeconds . '.' . str_pad($differenceInMilliseconds, 3, '0', STR_PAD_LEFT);
    }

    /**
     * @param $lapTime
     * @param $slowerLapTime
     * @return string
     */
    public function getLapTimeDifferenceBetween($lapTime, $slowerLapTime)
    {
        $differenceBetweenLapTimes = $this->calculateLapTimeDifferenceBetween($lapTime, $slowerLapTime);

        return '+' . $differenceBetweenLapTimes;
    }
}

