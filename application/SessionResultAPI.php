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
     */
    public function displayFreePracticeResultForTheFirstDriverInArray($sessionResult, $position)
    {
        $lapTime = $this->convertLapTimeForFreePractice($sessionResult->getLapTime());

        echo $position + 1 . '. ' . $sessionResult->getDriver() . ' ' . $sessionResult->getTeam() . ' ' . $lapTime . ' ' . $sessionResult->getNumberOfLaps() . '<br>';
    }

    /**
     * @param $suzukaFP1SessionResults
     */
    public function displayFreePracticeOneResults($suzukaFP1SessionResults)
    {
        foreach ($suzukaFP1SessionResults as $position => $sessionResult) {
            $this->displayFreePracticeResultForTheFirstDriverInArray($sessionResult, $position);
        }
    }

    /**
     * @param $suzukaFP2SessionResults
     */
    public function displayFreePracticeTwoResults($suzukaFP2SessionResults)
    {
        foreach ($suzukaFP2SessionResults as $position => $sessionResult) {
            $this->displayFreePracticeResultForTheFirstDriverInArray($sessionResult, $position);
        }
    }

    /**
     * @param $suzukaFP3SessionResults
     */
    public function displayFreePracticeThreeResults($suzukaFP3SessionResults)
    {
        foreach ($suzukaFP3SessionResults as $position => $sessionResult) {
            $this->displayFreePracticeResultForTheFirstDriverInArray($sessionResult, $position);
        }
    }
}

