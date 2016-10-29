<?php
namespace application;

use domain\session_result\fp_session_result\SessionResult;
use PDO;

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

    public function getResultsForSession($grandPrix, $session)
    {
        $sessionResults = [];
        $query = "SELECT `driver`, `team`, `lap_time`, `number_of_laps` FROM `formula_one_session_results`
                 WHERE `grand_prix` = '$grandPrix' AND `session` = $session
                 ORDER BY `lap_time` ASC";

        foreach ($this->link->query($query) as $row) {
            $sessionResults[] = new SessionResult($row['driver'], $row['team'], $row['lap_time'], $row['number_of_laps']);
        }
        return $sessionResults;
    }

    public function getResultsForQualifying($qualifying)
    {
        // TODO: Implement getResultsForQualifying() method.
    }

    public function getResultsForRace($race)
    {
        // TODO: Implement getResultsForRace() method.
    }
}