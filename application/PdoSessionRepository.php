<?php
namespace application;

use domain\season_result\SeasonResultLine;
use domain\SeasonResult;
use domain\session_result\ResultLine;
use domain\SessionResult;
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

    /**
     * @param string $grandPrix
     * @param int $session
     * @return SessionResult
     */
    public function getResultsForSession($grandPrix, $session)
    {
        $resultLines = [];
        $query = "SELECT `driver`, `team`, `lap_time`, `number_of_laps` FROM `formula_one_session_results`
                 WHERE `grand_prix` = '$grandPrix' AND `session` = $session
                 ORDER BY `lap_time` ASC";

        foreach ($this->link->query($query) as $row) {
            $resultLines[] = new ResultLine($row['driver'], $row['team'], $row['lap_time'], $row['number_of_laps']);
        }
        return new SessionResult($resultLines);
    }


    /**
     * @param int $season
     * @return SeasonResultLine[] $seasonResultLine
     */
    public function getResultsForSeason($season)
    {
        $seasonResultLine = [];
        $query = "SELECT `driver`, `team`, `australia`, `bahrain`, `china`, `russia`, `spain`, `monaco`, `canada`, `azerbeidzjan`, `austria`, `great_britain`, `hungary`, `germany`, `belgium`, `italy`, `singapore`, `malaysia`, `japan`, `united_states`, `mexico`, `brazil`, `abu_dhabi`
                  FROM `season`
                  WHERE `current_season` = $season";

        foreach ($this->link->query($query) as $row) {
            $seasonResultLine[] = new SeasonResultLine($row['driver'], $row['team'], $row['australia'], $row['bahrain'], $row['china'], $row['russia'], $row['spain'], $row['monaco'], $row['canada'], $row['azerbeidzjan'], $row['austria'], $row['great_britain'], $row['hungary'], $row['germany'], $row['belgium'], $row['italy'], $row['singapore'], $row['malaysia'], $row['japan'], $row['united_states'], $row['mexico'], $row['brazil'], $row['abu_dhabi']);
        }
        return $seasonResultLine;
    }
}