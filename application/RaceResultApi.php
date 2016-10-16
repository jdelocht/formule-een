<?php

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class RaceResultApi
{
    /**
     * @var RaceRepository
     */
    private $raceRepository;

    /**
     * RaceResultApi constructor.
     * @param RaceRepository $raceRepository
     */
    public function __construct(RaceRepository $raceRepository)
    {
        $this->raceRepository = $raceRepository;
    }

    public function getResultsForSuzukaRace()
    {
        return $this->raceRepository->getResultsForRace('Suzuka');
    }

    /** @var RaceResult $raceResult */
    /**
     * @param $position
     * @param RaceResult $raceResult
     * @return string
     */
    public function getRaceResultsForTheFirstDriverInArray($position, $raceResult)
    {
        return $position + 1 . '. ' . $raceResult->getDriver() . ' ' . $raceResult->getTeam() . ' ' . $raceResult->getNumberOfLaps() . ' ' . $raceResult->getTimeOrRetired() . ' ' . $raceResult->getChampionshipPoints();
    }

    /**
     * @param $suzukaRaceResult
     * @return array
     */
    public function getRaceResults($suzukaRaceResult)
    {
        $raceResults = [];
        foreach ($suzukaRaceResult as $position => $raceResult) {
            $raceResults[] = $this->getRaceResultsForTheFirstDriverInArray($position, $raceResult);
        }
        return $raceResults;
    }
}