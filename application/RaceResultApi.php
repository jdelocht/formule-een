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

    /** @var RaceResult $raceResult
     * @param $position
     * @param RaceResult $raceResult
     * @return string
     */
    public function getRaceResultsForTheFirstDriverInArray($position, $raceResult)
    {
        return $position + 1 . '. ' . $raceResult->getDriver() . ' ' . $raceResult->getTeam() . ' ' . $raceResult->getNumberOfLaps() . ' ' . $raceResult->getTimeOrRetired() . ' ' . $raceResult->getChampionshipPoints();
    }

    /**
     * @param $raceSession
     * @return array
     */
    public function getRaceResults($raceSession)
    {
        $raceSessionForGrandPrixOf = $this->raceRepository->getResultsForRace($raceSession);
        $raceResults = [];
        foreach ($raceSessionForGrandPrixOf as $position => $raceResult) {
            $raceResults[] = $this->getRaceResultsForTheFirstDriverInArray($position, $raceResult);
        }
        return $raceResults;
    }
}