<?php

class LapTimeDefiner
{
    /**
     * @param SessionResult $sessionResult
     * @return int
     */
    public function defineLapTime(SessionResult $sessionResult)
    {
        return $time = $sessionResult->getLapTime();
        $minutes = substr($time, 0, 1);
        $seconds = substr($time, 1, 2);
        $milliseconds = substr($time, 3, 3);
        $lapTime =  $minutes . ':' . $seconds . '.' . $milliseconds;
    }
}