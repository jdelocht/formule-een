<?php

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class SessionInfo
{
    private $sessionName;
    private $sessionDay;
    private $sessionStart;
    private $sessionEnd;

    /**
     * SessionInfo constructor.
     * @param string $sessionName
     * @param string $sessionDay
     * @param string $sessionStart
     * @param string $sessionEnd
     */
    public function __construct($sessionName, $sessionDay, $sessionStart, $sessionEnd)
    {
        $this->sessionName = $sessionName;
        $this->sessionDay = $sessionDay;
        $this->sessionStart = $sessionStart;
        $this->sessionEnd = $sessionEnd;
    }

    public function getSessionName()
    {
        return $this->sessionName;
    }

    public function getSessionDay()
    {
        return $this->sessionDay;
    }

    public function getSessionStart()
    {
        return $this->sessionStart;
    }

    public function getSessionEnd()
    {
        return $this->sessionEnd;
    }
}