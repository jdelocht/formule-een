<?php

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class RaceLapRecord
{
    private $raceLapRecordHolder;
    private $raceLaprecordTime;

    /**
     * RaceLapRecord constructor.
     * @param string $raceLapRecordHolder
     * @param int $raceLaprecordTime
     */
    public function __construct($raceLapRecordHolder, $raceLaprecordTime)
    {
        $this->raceLapRecordHolder = $raceLapRecordHolder;
        $this->raceLaprecordTime = $raceLaprecordTime;
    }

    /**
     * @return string
     */
    public function getRaceLapRecordHolder()
    {
        return $this->raceLapRecordHolder;
    }

    /**
     * @return int
     */
    public function getRaceLapRecordTime()
    {
        return $this->raceLaprecordTime;
    }
}