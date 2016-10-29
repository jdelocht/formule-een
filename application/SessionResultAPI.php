<?php
namespace application;

use domain\session_result\fp_session_result\SessionResult;
use domain\session_result\functions\LapTimeCalculator;

class SessionResultApi
{
    /**
     * @var SessionRepository
     */
    private $sessionRepository;
    /**
     * @var LapTimeCalculator
     */
    private $lapTimeCalculator;

    /**
     * SessionResultApi constructor.
     * @param SessionRepository $sessionRepository
     * @param LapTimeCalculator $lapTimeCalculator
     */
    public function __construct(SessionRepository $sessionRepository, LapTimeCalculator $lapTimeCalculator)
    {
        $this->sessionRepository = $sessionRepository;
        $this->lapTimeCalculator = $lapTimeCalculator;
    }

    /**
     * @param string $grandPrix
     * @param int $session
     * @return SessionResult[]
     */
    public function getSessionResultFor($grandPrix, $session)
    {
        return $this->sessionRepository->getResultsForSession($grandPrix, $session);
    }
}