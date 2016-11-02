<?php
namespace application;

use domain\session_result\fp_session_result\SessionResult;

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
     * @return SessionResult[]
     */
    public function getSessionResultFor($grandPrix, $session)
    {
        return $this->sessionRepository->getResultsForSession($grandPrix, $session);
    }
}