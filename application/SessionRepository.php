<?php

interface SessionRepository
{
    /**
     * @param $session
     * return SessionResult[]
     */
    public function getResultsForSession($session);
}
