<?php

/**
 * @param $lapTime
 * @return string
 */
function getLapTimeForFreePracticeConverter($lapTime)
{
    $minutes = substr($lapTime, 0, 1);
    $seconds = substr($lapTime, 1, 2);
    $milliseconds = substr($lapTime, 3, 3);

    if ($lapTime == 0)
        return ' ';
    return $minutes . ':' . $seconds . '.' . $milliseconds;
}