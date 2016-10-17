<?php

class QualifyingApi
{
    /**
     * @var QualifyingRepository
     */
    private $qualifyingRepository;

    /**
     * QualifyingApi constructor.
     * @param QualifyingRepository $qualifyingRepository
     */
    public function __construct(QualifyingRepository $qualifyingRepository)
    {
        $this->qualifyingRepository = $qualifyingRepository;
    }

    /**
     * @param QualifyingResult $qualifyingResult
     * @param $position
     * @return string
     */
    public function getQualifyingResultsForTheFirstDriverInArray($qualifyingResult, $position)
    {
        $lapTimeQ1 = getLapTimeForFreePracticeConverter($qualifyingResult->getQualifyingOneTime());
        $lapTimeQ2 = getLapTimeForFreePracticeConverter($qualifyingResult->getQualifyingTwoTime());
        $lapTimeQ3 = getLapTimeForFreePracticeConverter($qualifyingResult->getQualifyingThreeTime());

        return $position + 1 . '. ' . $qualifyingResult->getDriver() . ' ' . $qualifyingResult->getTeam() . ' ' . $lapTimeQ1 . ' ' . $lapTimeQ2 . ' ' . $lapTimeQ3 . ' ' . ' ' . $qualifyingResult->getNumberOfLaps();
    }

    /**
     * @param $qualifyingSession
     * @return array
     */
    public function getQualifyingResults($qualifyingSession)
    {
        $qualifyingSessionForGranPrixOf = $this->qualifyingRepository->getResultsForQualifying($qualifyingSession);
        $qualifyingResults = [];
        foreach ($qualifyingSessionForGranPrixOf as $position => $qualifyingResult) {

            $qualifyingResults[] = $this->getQualifyingResultsForTheFirstDriverInArray($qualifyingResult, $position);
        }
        return $qualifyingResults;
    }
}



