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

    public function getResultsForSession($session)
    {
        if ($session = 'drivers') {
            $query = 'SELECT `name` FROM `test`';

            return $this->link->query($query);
        } return '';
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