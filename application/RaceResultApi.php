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
     */
    public function displayRaceResultsForTheFirstDriverInArray($position, $raceResult)
    {
        echo $position + 1 . '. ' . $raceResult->getDriver() . ' ' . $raceResult->getTeam() . ' ' . $raceResult->getNumberOfLaps() . ' ' . $raceResult->getTimeOrRetired() . ' ' . $raceResult->getChampionshipPoints() . '<BR>';
    }

    /**
     * @param $suzukaRaceResult
     */
    public function displayRaceResults($suzukaRaceResult)
    {
        foreach ($suzukaRaceResult as $position => $raceResult) {
            $this->displayRaceResultsForTheFirstDriverInArray($position, $raceResult);
        }
    }
}