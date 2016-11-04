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
}
