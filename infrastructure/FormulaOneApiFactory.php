<?php

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
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
}