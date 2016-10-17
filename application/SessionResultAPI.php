<?php

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
     * @var LapTimeCalculator
     */
    private $lapTimeCalculator;

    /**
     * SessionResultApi constructor.
     * @param SessionRepository $sessionRepository
     * @param LapTimeConverter $lapTimeConverter
     * @param LapTimeCalculator $lapTimeCalculator
     */
    public function __construct(SessionRepository $sessionRepository, LapTimeConverter $lapTimeConverter, LapTimeCalculator $lapTimeCalculator)
    {
        $this->sessionRepository = $sessionRepository;
        $this->lapTimeConverter = $lapTimeConverter;
        $this->lapTimeCalculator = $lapTimeCalculator;
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
        $lapTime = $this->lapTimeConverter->getLapTimeForFreePracticeConverterAlternative($sessionResult->getLapTime());

        $lapTimeDifferenceBetween = '';
        if ($showDifference) {
            $lapTimeDifferenceBetween = $this ->lapTimeCalculator->getLapTimeDifferenceBetweenAlternative($fastestLapTime, $sessionResult->getLapTime()) . ' ';
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
