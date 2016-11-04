<?php
namespace domain;
use domain\session_result\fp_session_result\ResultLine;

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class SessionResult
{
    /**
     * @var ResultLine[]
     */
    private $resultLines;

    /**
     * SessionResult constructor.
     * @param ResultLine[] $resultLines
     */
    public function __construct($resultLines)
    {
        $this->resultLines = $resultLines;
    }

    /**
     * @return ResultLine[]
     */
    public function asArray()
    {
        return $this->resultLines;
    }

    /**
     * @return int
     */
    public function getFirstResultLineLapTime()
    {
        return $this->resultLines[0]->getLapTime();
    }
}