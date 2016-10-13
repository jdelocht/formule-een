<?php

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
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

    public function getResultsForSuzuka2016FreePractice1()
    {
        return $this->sessionRepository->getResultsForSession('Suzuka Free Practice 1');
    }

    public function getResultsForSuzuka2016FreePractice2()
    {
        return $this->sessionRepository->getResultsForSession('Suzuka Free Practice 2');
    }

    public function getResultsForSuzuka2016FreePractice3()
    {
        return $this->sessionRepository->getResultsForSession('Suzuka Free Practice 3');
    }
}

