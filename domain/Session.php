<?php
namespace domain;

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class Session
{
    private $sessionId;
    /**
     * @var SessionResult
     */
    private $sessionResult;

    /**
     * Session constructor.
     * @param $sessionId
     * @param SessionResult $sessionResult
     */
    public function __construct($sessionId, SessionResult $sessionResult)
    {
        $this->sessionId = $sessionId;
        $this->sessionResult = $sessionResult;
    }
}