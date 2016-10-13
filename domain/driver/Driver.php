<?php

class Driver
{
    private $driverName;
    private $driverNationality;
    private $driverRaceNumber;
    private $driverTeam;
    private $isFullDriver;

    public static function unknownDriver($driverTeam)
    {
        return new self(00, 'Unknown Driver', 'UNK', $driverTeam, false);
    }

    /**
     * Driver constructor.
     * @param $driverName
     * @param $driverNationality
     * @param $driverRaceNumber
     * @param $driverTeam
     * @param bool $isFullDriver
     */
    public function __construct($driverRaceNumber, $driverName, $driverNationality, $driverTeam, $isFullDriver = true)
    {
        $this->driverName = $driverName;
        $this->driverNationality = $driverNationality;
        $this->driverRaceNumber = $driverRaceNumber;
        $this->driverTeam = $driverTeam;
        $this->isFullDriver = $isFullDriver;
    }

    public function getDriverName()
    {
        return $this->driverName;
    }

    public function getDriverNationality()
    {
        return $this->driverNationality;
    }

    public function getDriverRaceNumber()
    {
        return $this->driverRaceNumber;
    }

    public function getDriverTeam()
    {
        return $this->driverTeam;
    }

    public function isFullDriver()
    {
        return $this->isFullDriver;
    }
}