<?php
namespace application;

interface SessionRepository
{
    /**
     * @param string $grandPrix
     * @param int $session
     * return SessionResult
     * @return
     */
    public function getResultsForSession($grandPrix, $session);
    public function getResultsForQualifying($qualifying);
    public function getResultsForRace($race);
}
