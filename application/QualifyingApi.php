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
     * @param string $timeQ1
     * @return string
     */
    public function convertLapTimeForQualifyingOne($timeQ1)
    {
        $minutesQ1 = substr($timeQ1, 0, 1);
        $secondsQ1 = substr($timeQ1, 1, 2);
        $millisecondsQ1 = substr($timeQ1, 3, 3);

        if ($timeQ1 == 0)
            return ' ';
        return $minutesQ1 . ':' . $secondsQ1 . '.' . $millisecondsQ1;

    }

    /**
     * @param QualifyingResult $qualifyingResult
     * @param $position
     * @return string
     */
    public function getQualifyingResultsForTheFirstDriverInArray($qualifyingResult, $position)
    {
        $lapTimeQ1 = $this->convertLapTimeForQualifyingOne($qualifyingResult->getQualifyingOneTime());
        $lapTimeQ2 = $this->convertLapTimeForQualifyingOne($qualifyingResult->getQualifyingTwoTime());
        $lapTimeQ3 = $this->convertLapTimeForQualifyingOne($qualifyingResult->getQualifyingThreeTime());

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



