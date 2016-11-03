<?php
namespace domain;

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class SessionResult
{
    /**
     * @var array
     */
    private $resultLines;

    /**
     * SessionResult constructor.
     * @param array $resultLines
     */
    public function __construct($resultLines)
    {
        $this->resultLines = $resultLines;
    }

    /**
     *
     */
    public function asArray()
    {
        return $this->resultLines;
    }
}