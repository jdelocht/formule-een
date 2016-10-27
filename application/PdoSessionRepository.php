<?php

class PdoSessionRepository implements SessionRepository
{
    /**
     * @var PDO
     */
    private $link;

    /**
     * PdoSessionRepository constructor.
     * @param PDO $link
     */
    public function __construct(PDO $link)
    {
        $this->link = $link;
    }

    /**
     * @param $session
     * @return SessionResult[]
     */
    public function getResultsForSession($session)
    {
        $session = 'SELECT
              `driver`,
              `number`,
              `nationality`,
              `team`,
              `grandprix`,
              `sessionone`,
              `sessiontwo`,
              `sessionthree`,
              `sessionfour`,
              `sessionfive`
              FROM `formulaone`';

        $sessionResults = [];
        foreach ($this->link->query($session) as $row) {
            $sessionResults[] = $row['driver'] . $row['number'] . $row['nationality'] . $row['team'] . $row['grandprix'] . $row['sessionone'] . $row['sessiontwo'] . $row['sessionthree'] . $row['sessionfour'] . $row['sessionfive'];
        }
        print_r($sessionResults);
    }
//
    // Doe een query om een array met de goede data te krijgen

    // Zet de array van data om naar results
//        $results = [];
//        foreach ($goedeData as $regelUitDeDatabase) {
//            $results[] =    -('..', '..', 94873465, 4);
//        }
//        return $results;
    public function getResultsForQualifying($qualifying)
    {
        // TODO: Implement getResultsForQualifying() method.
    }

    public function getResultsForRace($race)
    {
        // TODO: Implement getResultsForRace() method.
    }
}