<?php

class QualifyingResultsForTheFirstDriverInArray
{
    /**
     * @var LapTimeConverter
     */
    private $lapTimeConverter;

    /**
     * QualifyingResultsForTheFirstDriverInArray constructor.
     * @param LapTimeConverter $lapTimeConverter
     */
    public function __construct(LapTimeConverter $lapTimeConverter)
    {
        $this->lapTimeConverter = $lapTimeConverter;
    }

    /**
     * @param QualifyingResult $qualifyingResult
     * @param $position
     * @return string
     */
    public function getQualifyingResultsForTheFirstDriverInArray($qualifyingResult, $position)
    {
        $lapTimeQ1 = $this->lapTimeConverter->defineLapTimeForFreePracticeConverter($qualifyingResult->getQualifyingOneTime());
        $lapTimeQ2 = $this->lapTimeConverter->defineLapTimeForFreePracticeConverter($qualifyingResult->getQualifyingTwoTime());
        $lapTimeQ3 = $this->lapTimeConverter->defineLapTimeForFreePracticeConverter($qualifyingResult->getQualifyingThreeTime());

        return $position + 1 . '. ' . $qualifyingResult->getDriver() . ' ' . $qualifyingResult->getTeam() . ' ' . $lapTimeQ1 . ' ' . $lapTimeQ2 . ' ' . $lapTimeQ3  . ' ' . $qualifyingResult->getNumberOfLaps();
    }
}