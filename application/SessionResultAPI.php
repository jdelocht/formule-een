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

    /**
     * @param SessionResult $sessionResult
     * @param $position
     * @param $showDifference
     * @param int $fastestLapTime
     * @return string
     */
    public function getFreePracticeResultForTheFirstDriverInArray($sessionResult, $position, $showDifference, $fastestLapTime = 0)
    {
        $lapTime = getLapTimeForFreePracticeConverter($sessionResult->getLapTime());

        $lapTimeDifferenceBetween = '';
        if ($showDifference) {
            $lapTimeDifferenceBetween = getLapTimeDifferenceBetween($fastestLapTime, $sessionResult->getLapTime()) . ' ';
        }

        return $position + 1 . '. ' . $sessionResult->getDriver() . ' ' . $sessionResult->getTeam() . ' ' . $lapTime . ' ' . $lapTimeDifferenceBetween . $sessionResult->getNumberOfLaps();
    }

    /**
     * @param $session
     * @return array
     */
    public function getFreePracticeResults($session)
    {
        $freePracticeSessionResults = $this->sessionRepository->getResultsForSession($session);
        $freePracticeResults = [];
        foreach ($freePracticeSessionResults as $position => $sessionResult) {
            if ($position == 0) {
                $showDifference = false;
                $fasterLapTime = 0;
            } else {
                $showDifference = true;
                $fasterLapTime = $freePracticeSessionResults[0]->getLapTime();
            }
            $freePracticeResults[] = $this->getFreePracticeResultForTheFirstDriverInArray($sessionResult, $position, $showDifference, $fasterLapTime);
        }
        return $freePracticeResults;
    }

}
