<?php

class TeamApi
{
    private $teamRepository;

    /**
     * TeamApi constructor.
     * @param TeamRepository $teamRepository
     */
    public function __construct(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    public function getTeamListFor2016()
    {
        return $this->teamRepository->getTeamListForSeason(2016);
    }
}

