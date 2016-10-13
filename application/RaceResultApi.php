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
}