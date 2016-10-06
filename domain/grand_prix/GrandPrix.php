<?php

class GrandPrix
{
    private $grandPrixName;
    private $grandPrixDate;
    private $grandPrixWinner;
    private $grandPrixInfo;

    /**
     * GrandPrixInfo constructor.
     * @param string $grandPrixDate
     * @param string $grandPrixName
     * @param string$grandPrixWinner
     * @param GrandPrixInfo $grandPrixInfo
     */

    public function __construct($grandPrixDate, $grandPrixName, $grandPrixWinner, GrandPrixInfo $grandPrixInfo)
    {
        $this->grandPrixName = $grandPrixName;
        $this->grandPrixDate = $grandPrixDate;
        $this->grandPrixWinner = $grandPrixWinner;
        $this->grandPrixInfo = $grandPrixInfo;
    }

    public function getGrandPrixDate()
    {
        return $this->grandPrixDate;
    }

    public function getGrandPrixName()
    {
        return $this->grandPrixName;
    }

    public function getGrandPrixWinner()
    {
        return $this->grandPrixWinner;
    }

    public function getGrandPrixLocation()
    {
        return $this->grandPrixInfo->getGrandPrixLocation();
    }

    public function getGrandPrixCountry()
    {
        return $this->grandPrixInfo->getGrandPrixCountry();
    }

    public function getCircuitLength()
    {
        return $this->grandPrixInfo->getCircuitLength();
    }

    public function getRaceDistance()
    {
        return $this->grandPrixInfo->getRaceDistance();
    }

    public function getRaceLaps()
    {
        return $this->grandPrixInfo->getRaceLaps();
    }

    public function getRaceLapRecordHolder()
    {
        return $this->grandPrixInfo->raceLapRecord->getRaceLapRecordHolder();
    }

    public function getRaceLapRecordTime()
    {
        return $this->grandPrixInfo->raceLapRecord->getRaceLapRecordTime();
    }

    public function getSessionName()
    {
        return $this->grandPrixInfo->sessionInfo->getSessionName();
    }

    public function getSessionDay()
    {
        return $this->grandPrixInfo->sessionInfo->getSessionDay();
    }

    public function getSessionStart()
    {
        return $this->grandPrixInfo->sessionInfo->getSessionStart();
    }

    public function getSessionEnd()
    {
        return $this->grandPrixInfo->sessionInfo->getSessionEnd();
    }
}