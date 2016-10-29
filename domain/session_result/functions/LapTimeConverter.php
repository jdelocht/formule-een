<?php
namespace domain\session_result\functions;

class LapTimeConverter
{
    /**
     * @param $lapTime
     * @return string
     */
    public function defineLapTimeForFreePracticeConverter($lapTime)
    {
        $explodedLapTime = explode('.', $lapTime);

        $minutes = floor ($explodedLapTime[0] / 60);
        $seconds = floor ($explodedLapTime[0] % 60);
        $milliseconds = $explodedLapTime[1];

        if ($lapTime == 0)
            return ' ';
        return $minutes . ':' . str_pad($seconds, 2, '0', STR_PAD_LEFT) . '.' . str_pad($milliseconds, 3, '0', STR_PAD_RIGHT);
    }
}