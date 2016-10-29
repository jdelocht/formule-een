<?php
namespace application;

interface SessionRepository
{
    /**
     * @param $session
     * return SessionResult[]
     */
    public function getResultsForSession($session);
    public function getResultsForQualifying($qualifying);
    public function getResultsForRace($race);
}
