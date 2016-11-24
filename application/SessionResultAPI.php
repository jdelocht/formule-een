<?php
namespace application;

use domain\GrandPrix;
use domain\session_result\ResultLine;
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
     * @param int $season
     * @return mixed
     */
    public function getResultsForSeason($season)
    {
        return $this->sessionRepository->getResultsForSeason($season);
    }

    /**
     * @param string $grandPrixName
     * @param string $season
     * @return GrandPrix
     */
    public function getGrandPrix($grandPrixName, $season)
    {
        $sessions = [
            SessionResult::FreePractice1,
            SessionResult::FreePractice2,
            SessionResult::FreePractice3,
            SessionResult::Qualifying1,
            SessionResult::Qualifying2,
            SessionResult::Qualifying3,
            SessionResult::Race
        ];
        $sessionsResults = [];
        foreach ($sessions as $session) {
            $sessionsResults[$session] = $this->getSessionResultFor($grandPrixName, $session);
        }
        return new GrandPrix($grandPrixName, $season, $sessionsResults);
    }
}