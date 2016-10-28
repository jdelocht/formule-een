<?php

class PdoSessionRepository implements SessionRepository
{

   public function __construct()
    {
    }

    /**
     * @param $link
     * @return SessionResult[]
     * @internal param $session
     */
    public function getResultsForSession($link)
    {
        $session = new PdoSessionRepository($link);
//        $session = 'SELECT
//              `driver`,
//              `number`,
//              `nationality`,
//              `team`,
//              `grandprix`,
//              `sessionone`,
//              `sessiontwo`,
//              `sessionthree`,
//              `sessionfour`,
//              `sessionfive`
//              FROM `formulaone`';
//
//        $sessionResults = [];
//        foreach ($link->query($session) as $row) {
//            $sessionResults[] = $row['driver'] . $row['number'] . $row['nationality'] . $row['team'] . $row['grandprix'] . $row['sessionone'] . $row['sessiontwo'] . $row['sessionthree'] . $row['sessionfour'] . $row['sessionfive'];
//        }
//        echo $sessionResults;
    }


//
    // Doe een query om een array met de goede data te krijgen

    // Zet de array van data om naar results
//        $results = [];
//        foreach ($goedeData as $regelUitDeDatabase) {
//            $results[] =    -('..', '..', 94873465, 4);
//        }
//        return $results;
    /**
     * @param $link
     * @return string
     */
    public function getResultsForQualifying($link)
    {
        return '';
    }

    /**
     * @param $link
     * @return string
     */
    public function getResultsForRace($link)
    {
        return '';
    }
}