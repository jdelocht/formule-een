<?php

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class GrandPrixInfo
{
    private $grandPrixCountry;
    private $circuitLength;
    private $raceDistance;
    private $raceLaps;
    private $raceLapRecord;
    private $sessionInfo;
    private $grandPrixLocation;

    /**
     * GrandPrixInfo constructor.
     * @param string $grandPrixLocation
     * @param string $grandPrixCountry
     * @param int $circuitLength
     * @param int $raceDistance
     * @param int $raceLaps
     * @param RaceLapRecord $raceLapRecord
     * @param SessionInfo $sessionInfo
     */
    public function __construct($grandPrixLocation, $grandPrixCountry, $circuitLength, $raceDistance, $raceLaps, RaceLapRecord $raceLapRecord, SessionInfo $sessionInfo)
    {
        $this->grandPrixCountry = $grandPrixCountry;
        $this->circuitLength = $circuitLength;
        $this->raceDistance = $raceDistance;
        $this->raceLaps = $raceLaps;
        $this->raceLapRecord = $raceLapRecord;
        $this->sessionInfo = $sessionInfo;
        $this->grandPrixLocation = $grandPrixLocation;
    }

    public function getGrandPrixLocation()
    {
        return $this->grandPrixLocation;
    }

    public function getGrandPrixCountry()
    {
        return $this->grandPrixCountry;
    }

    public function getCircuitLength()
    {
        return $this->circuitLength;
    }

    public function getRaceDistance()
    {
        return $this->raceDistance;
    }

    public function getRaceLaps()
    {
        return $this->raceLaps;
    }

    public function getRaceLapRecordHolder()
    {
        return $this->raceLapRecord->getRaceLapRecordHolder();
    }

    public function getRaceLapRecordTime()
    {
        return $this->raceLapRecord->getRaceLapRecordTime();
    }

    public function getSessionName()
    {
        return $this->sessionInfo->getSessionName();
    }

    public function getSessionDay()
    {
        return $this->sessionInfo->getSessionDay();
    }

    public function getSessionStart()
    {
        return $this->sessionInfo->getSessionStart();
    }

    public function getSessionEnd()
    {
        return $this->sessionInfo->getSessionEnd();
    }
}