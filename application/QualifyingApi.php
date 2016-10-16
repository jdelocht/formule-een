<?php

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
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
     * @return mixed
     */
    public function getResultsForSuzukaQualifying()
    {
        return $this->qualifyingRepository->getResultsForQualifying('Suzuka');
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
        return $minutesQ1 . ':' . $secondsQ1 . '.' . $millisecondsQ1;
    }

    /**
     * @param string $timeQ2
     * @return string
     */
    public function convertLapTimeForQualifyingTwo($timeQ2)
    {
        $minutesQ2 = substr($timeQ2, 0, 1);
        $secondsQ2 = substr($timeQ2, 1, 2);
        $millisecondsQ2 = substr($timeQ2, 3, 3);

        if ($timeQ2 == 0)
            return ' ';
        return $minutesQ2 . ':' . $secondsQ2 . '.' . $millisecondsQ2;
    }

    /**
     * @param string $timeQ3
     * @return string
     */
    public function convertLapTimeForQualifyingThree($timeQ3)
    {
        $minutesQ3 = substr($timeQ3, 0, 1);
        $secondsQ3 = substr($timeQ3, 1, 2);
        $millisecondsQ3 = substr($timeQ3, 3, 3);

        if ($timeQ3 == 0)
            return ' ';
        return $minutesQ3 . ':' . $secondsQ3 . '.' . $millisecondsQ3;
    }

    /**
     * @param QualifyingResult $qualifyingResult
     * @param $position
     * @return string
     */
    public function getQualifyingResultsForTheFirstDriverInArray($qualifyingResult, $position)
    {
        $lapTimeQ1 = $this->convertLapTimeForQualifyingOne($qualifyingResult->getQualifyingOneTime());
        $lapTimeQ2 = $this->convertLapTimeForQualifyingTwo($qualifyingResult->getQualifyingTwoTime());
        $lapTimeQ3 = $this->convertLapTimeForQualifyingThree($qualifyingResult->getQualifyingThreeTime());

        return $position + 1 . '. ' . $qualifyingResult->getDriver() . ' ' . $qualifyingResult->getTeam() . ' ' . $lapTimeQ1 . ' ' . $lapTimeQ2 . ' ' . $lapTimeQ3 . ' ' . ' ' . $qualifyingResult->getNumberOfLaps();
    }

    /**
     * @param $suzukaQualifyingResult
     * @return array
     */
    public function getQualifyingResults($suzukaQualifyingResult)
    {
        $qualifyingResults = [];
        foreach ($suzukaQualifyingResult as $position => $qualifyingResult) {

            $qualifyingResults[] = $this->getQualifyingResultsForTheFirstDriverInArray($qualifyingResult, $position);
        }
        return $qualifyingResults;
    }
}



