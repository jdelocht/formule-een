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
     * @var LapTimeConverter
     */
    private $lapTimeConverter;

    /**
     * SessionResultApi constructor.
     * @param SessionRepository $sessionRepository
     * @param LapTimeConverter $lapTimeConverter
     */
    public function __construct(SessionRepository $sessionRepository, LapTimeConverter $lapTimeConverter)
    {
        $this->sessionRepository = $sessionRepository;
        $this->lapTimeConverter = $lapTimeConverter;
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
        $lapTime = $this->lapTimeConverter->getLapTimeForFreePracticeConverter($sessionResult->getLapTime());

        $lapTimeDifferenceBetween = '';
        if ($showDifference) {
            $lapTimeDifferenceBetween = getLapTimeDifferenceBetween($fastestLapTime, $sessionResult->getLapTime()) . ' ';
        }

        return $position + 1 . '. ' . $sessionResult->getDriver() . ' ' . $sessionResult->getTeam() . ' ' .  $lapTime . ' ' . $lapTimeDifferenceBetween . $sessionResult->getNumberOfLaps();
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
