<?php

class LapTimeConverter
{
    /**
     * @param $lapTime
     * @return string
     */
    public function getLapTimeForFreePracticeConverterAlternative($lapTime)
    {
        $explodedLapTime = explode('.', $lapTime);

        $minutes = floor ($explodedLapTime[0] / 60);
        $seconds = floor ($explodedLapTime[0] % 60);
        $milliseconds = $explodedLapTime[1];

        if ($lapTime == 0)
            return ' ';

        return $minutes . ':' . $seconds . '.' . $milliseconds;
    }

}