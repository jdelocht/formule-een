<?php
namespace application;

use domain\session_result\FreePracticeResultsForTheFirstDriverInArray;
use domain\session_result\functions\LapTimeCalculator;
use domain\session_result\functions\LapTimeConverter;
use domain\session_result\QualifyingResultsForTheFirstDriverInArray;
use domain\session_result\RaceResultForTheFirstDriverInArray;

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
     * @var QualifyingResultsForTheFirstDriverInArray
     */
    private $qualifyingResultsForTheFirstDriverInArray;
    /**
     * @var RaceResultForTheFirstDriverInArray
     */
    private $raceResultForTheFirstDriverInArray;

    /**
     * SessionResultApi constructor.
     * @param SessionRepository $sessionRepository
     * @param LapTimeConverter $lapTimeConverter
     * @param LapTimeCalculator $lapTimeCalculator
     * @param FreePracticeResultsForTheFirstDriverInArray $freePracticeResultsForTheFirstDriverInArray
     * @param QualifyingResultsForTheFirstDriverInArray $qualifyingResultsForTheFirstDriverInArray
     * @param RaceResultForTheFirstDriverInArray $raceResultForTheFirstDriverInArray
     */
    public function __construct(SessionRepository $sessionRepository, LapTimeConverter $lapTimeConverter, LapTimeCalculator $lapTimeCalculator, FreePracticeResultsForTheFirstDriverInArray $freePracticeResultsForTheFirstDriverInArray, QualifyingResultsForTheFirstDriverInArray $qualifyingResultsForTheFirstDriverInArray, RaceResultForTheFirstDriverInArray $raceResultForTheFirstDriverInArray)
    {
        $this->sessionRepository = $sessionRepository;
        $this->lapTimeConverter = $lapTimeConverter;
        $this->lapTimeCalculator = $lapTimeCalculator;
        $this->freePracticeResultsForTheFirstDriverInArray = $freePracticeResultsForTheFirstDriverInArray;
        $this->qualifyingResultsForTheFirstDriverInArray = $qualifyingResultsForTheFirstDriverInArray;
        $this->raceResultForTheFirstDriverInArray = $raceResultForTheFirstDriverInArray;
    }

    /**
     * @param $session
     * @return array
     */
    public function getFreePracticeResults($grandPrix, $session)
    {
        $freePracticeSessionResults = $this->sessionRepository->getResultsForSession($grandPrix, $session);
        $freePracticeResults = [];
        foreach ($freePracticeSessionResults as $position => $sessionResult) {
            if ($position == 0) {
                $showDifference = false;
                $fasterLapTime = 0;
            } else {
                $showDifference = true;
                $fasterLapTime = $freePracticeSessionResults[0]->getLapTime();
            }
            $freePracticeResults[] = $this->freePracticeResultsForTheFirstDriverInArray->getFreePracticeResultForTheFirstDriverInArray($sessionResult, $position, $showDifference, $fasterLapTime);
        }
        return $freePracticeResults;
    }

    /**
     * @param $qualifyingSession
     * @return array
     */
    public function getQualifyingResults($qualifyingSession)
    {
        $qualifyingSessionForGrandPrixOf = $this->sessionRepository->getResultsForQualifying($qualifyingSession);
        $qualifyingResults = [];
        foreach ($qualifyingSessionForGrandPrixOf as $position => $qualifyingResult) {
            $qualifyingResults[] = $this->qualifyingResultsForTheFirstDriverInArray->getQualifyingResultsForTheFirstDriverInArray($qualifyingResult, $position);
        }
        return $qualifyingResults;
    }

    /**
     * @param $raceSession
     * @return array
     */
    public function getRaceResults($raceSession)
    {
        $raceSessionForGrandPrixOf = $this->sessionRepository->getResultsForRace($raceSession);
        $raceResults = [];
        foreach ($raceSessionForGrandPrixOf as $position => $raceResult) {
            $raceResults[] = $this->raceResultForTheFirstDriverInArray->getRaceResultsForTheFirstDriverInArray($position, $raceResult);
        }
        return $raceResults;
    }

    public function getSessionResultFromPDO($grandPrix, $session)
    {
        return $this->sessionRepository->getResultsForSession($grandPrix, $session);
    }
}