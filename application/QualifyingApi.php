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

    public function getResultsForSuzukaQualifying()
    {
        return $this->qualifyingRepository->getResultsForQualifying('Suzuka');
    }
}