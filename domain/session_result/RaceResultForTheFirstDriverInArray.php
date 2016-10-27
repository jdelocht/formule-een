<?php

class RaceResultForTheFirstDriverInArray
{
    /** @var RaceResult $raceResult
     * @param $position
     * @param RaceResult $raceResult
     * @return string
     */
    public function getRaceResultsForTheFirstDriverInArray($position, $raceResult)
    {
        return $position + 1 . '. ' . $raceResult->getDriver() . ' ' . $raceResult->getTeam() . ' ' . $raceResult->getNumberOfLaps() . ' ' . $raceResult->getTimeOrRetired() . ' ' . $raceResult->getChampionshipPoints();
    }
}