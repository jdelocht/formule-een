<?php

class FormulaOneApiFactory
{
    public static function getDriverApi()
    {
        return new DriverApi(new DummyDriverRepository);
    }

    public static function getTeamApi()
    {
        return new TeamApi (new DummyTeamRepository);
    }

    public static function getSessionResultApi()
    {
        return new SessionResultApi (new DummySessionRepository);
    }

    public static function getQualifyingApi()
    {
        return new QualifyingApi (new DummyQualifyingRepository);
    }

    public static function getRaceResultApi()
    {
        return new RaceResultApi (new DummyRaceRepository);
    }
}