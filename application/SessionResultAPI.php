<?php
namespace application;

use domain\SessionResult;

class SessionResultApi
{
    /**
     * @var SessionRepository
     */
    private $sessionRepository;

    /**
     * SessionResultApi constructor.
     * @param SessionRepository $sessionRepository
    */
    public function __construct(SessionRepository $sessionRepository)
    {
        $this->sessionRepository = $sessionRepository;
    }

    /**
     * @param string $grandPrix
     * @param int $session
     * @return SessionResult
     */
    public function getSessionResultFor($grandPrix, $session)
    {
        return $this->sessionRepository->getResultsForSession($grandPrix, $session);
    }

    /**
     * @param $season
     * @return mixed
     */
    public function getResultsForSeason($season)
    {
        return $this->sessionRepository->getResultsForSeason($season);
    }
}