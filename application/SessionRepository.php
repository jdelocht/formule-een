<?php
namespace application;

use domain\SeasonResult;

interface SessionRepository
{
    /**
     * @param string $grandPrix
     * @param int $session
     * return SessionResult
     * @return
     */
    public function getResultsFor($grandPrix, $session);

    /**
     * @param $season
     * @return SeasonResult
     */
    public function getDriversChampionshipResultsFor($season);
}
