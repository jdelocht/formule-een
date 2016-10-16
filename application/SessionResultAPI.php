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

    /**
     * @param string $time
     * @return string
     */
    public function convertLapTimeForFreePractice($time)
    {
        $minutes = substr($time, 0, 1);
        $seconds = substr($time, 1, 2);
        $milliseconds = substr($time, 3, 3);
        return $minutes . ':' . $seconds . '.' . $milliseconds;
    }

    /**
     * @param SessionResult $sessionResult
     * @param $position
     * @return string
     */
    public function getFreePracticeResultForTheFirstDriverInArray($sessionResult, $position)
    {
        $lapTime = $this->convertLapTimeForFreePractice($sessionResult->getLapTime());

        return $position + 1 . '. ' . $sessionResult->getDriver() . ' ' . $sessionResult->getTeam() . ' ' . $lapTime . ' ' . $sessionResult->getNumberOfLaps();
    }

    /**
     * @param $suzukaFP1SessionResults
     * @return array
     */
    public function getFreePracticeOneResults($suzukaFP1SessionResults)
    {
        $freePracticeOneResults = [];
        foreach ($suzukaFP1SessionResults as $position => $sessionResult) {
            $freePracticeOneResults[] = $this->getFreePracticeResultForTheFirstDriverInArray($sessionResult, $position);
        }
        return $freePracticeOneResults;
    }

    /**
     * @param $suzukaFP2SessionResults
     * @return array
     */
    public function getFreePracticeTwoResults($suzukaFP2SessionResults)
    {
        $freePracticeTwoResults = [];
        foreach ($suzukaFP2SessionResults as $position => $sessionResult) {
            $freePracticeTwoResults[] = $this->getFreePracticeResultForTheFirstDriverInArray($sessionResult, $position);
        }
        return $freePracticeTwoResults;
    }

    /**
     * @param $suzukaFP3SessionResults
     * @return array
     */
    public function getFreePracticeThreeResults($suzukaFP3SessionResults)
    {
        $freePracticeThreeResults = [];
        foreach ($suzukaFP3SessionResults as $position => $sessionResult) {
            $freePracticeThreeResults[] = $this->getFreePracticeResultForTheFirstDriverInArray($sessionResult, $position);
        }
        return $freePracticeThreeResults;
    }
}

