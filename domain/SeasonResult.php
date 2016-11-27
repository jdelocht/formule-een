<?php
namespace domain;
use domain\season_result\SeasonResultLine;

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class SeasonResult
{
    /** @var SeasonResultLine[] */
    private $seasonResultLine;

    /**
     * SeasonResult constructor.
     * @param array $seasonResultLine
     */
    public function __construct($seasonResultLine)
    {
        $this->seasonResultLine = $seasonResultLine;
    }

    /**
     * @return SeasonResultLine[]
     */
    public function asArray()
    {
        return $this->seasonResultLine;
    }


}