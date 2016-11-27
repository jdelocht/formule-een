<?php
namespace domain;

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class GrandPrix
{
    /** @var string */
    private $grandPrixName;
    /** @var string */
    private $season;
    /** @var array */
    private $sessions;

    /**
     * GrandPrix constructor.
     * @param string $grandPrixName
     * @param string $season
     * @param array $sessions
     */
    public function __construct($grandPrixName, $season, array $sessions)
    {
        $this->grandPrixName = $grandPrixName;
        $this->season = $season;
        $this->sessions = $sessions;
    }

    /**
     * @param int $session
     * @return SessionResult
     */
    public function getResultsFor($session)
    {
        return $this->sessions[$session];
    }

    /** @param $grandPrix
    * @param $session
    * @return string
    */
    public function getTitleForMexican($grandPrix, $session)
    {
        if ($grandPrix == 'mexico' && $session == 1) {
            return 'FORMULA 1 GRAN PREMIO DE MÉXICO 2016 - FREE PRACTICE ONE RESULTS';
        } if ($grandPrix == 'mexico' && $session == 2) {
            return 'FORMULA 1 GRAN PREMIO DE MÉXICO 2016 - FREE PRACTICE TWO RESULTS';
        } if ($grandPrix == 'mexico' && $session == 3) {
            return 'FORMULA 1 GRAN PREMIO DE MÉXICO 2016 - FREE PRACTICE THREE RESULTS';
        } if ($grandPrix == 'mexico' && $session == 4) {
            return 'FORMULA 1 GRAN PREMIO DE MÉXICO 2016 - QUALIFYING ONE RESULTS';
        } if ($grandPrix == 'mexico' && $session == 5) {
            return 'FORMULA 1 GRAN PREMIO DE MÉXICO 2016 - QUALIFYING TWO RESULTS';
        } if ($grandPrix == 'mexico' && $session == 6) {
            return 'FORMULA 1 GRAN PREMIO DE MÉXICO 2016 - QUALIFYING THREE RESULTS';
        } if ($grandPrix == 'mexico' && $session == 7) {
            return 'FORMULA 1 GRAN PREMIO DE MÉXICO - 2016 RACE RESULTS';
        } return '';
    }
}