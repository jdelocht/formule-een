<?php

class QualifyingApi
{
    /**
     * @var QualifyingRepository
     */
    private $qualifyingRepository;
    /**
     * @var LapTimeConverter
     */
    private $lapTimeConverter;

    /**
     * QualifyingApi constructor.
     * @param QualifyingRepository $qualifyingRepository
     * @param LapTimeConverter $lapTimeConverter
     */
    public function __construct(QualifyingRepository $qualifyingRepository, LapTimeConverter $lapTimeConverter)
    {
        $this->qualifyingRepository = $qualifyingRepository;
        $this->lapTimeConverter = $lapTimeConverter;
    }

    /**
     * @param QualifyingResult $qualifyingResult
     * @param $position
     * @return string
     */
    public function getQualifyingResultsForTheFirstDriverInArray($qualifyingResult, $position)
    {
        $lapTimeQ1 = $this->lapTimeConverter->getLapTimeForFreePracticeConverterAlternative($qualifyingResult->getQualifyingOneTime());
        $lapTimeQ2 = $this->lapTimeConverter->getLapTimeForFreePracticeConverterAlternative($qualifyingResult->getQualifyingTwoTime());
        $lapTimeQ3 = $this->lapTimeConverter->getLapTimeForFreePracticeConverterAlternative($qualifyingResult->getQualifyingThreeTime());

        return $position + 1 . '. ' . $qualifyingResult->getDriver() . ' ' . $qualifyingResult->getTeam() . ' ' . $lapTimeQ1 . ' ' . $lapTimeQ2 . ' ' . $lapTimeQ3  . ' ' . $qualifyingResult->getNumberOfLaps();
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



