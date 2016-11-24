<?php
namespace domain;

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class GrandPrix
{
    /**
     * @var string
     */
    private $grandPrixName;
    /**
     * @var string
     */
    private $season;
    /**
     * @var array
     */
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
    public function getSessionResult($session)
    {
        return $this->sessions[$session];
    }
}