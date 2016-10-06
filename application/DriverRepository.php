<?php

/**
 * Created by PhpStorm.
 * User: Joost
 * Date: 22-9-2016
 * Time: 21:47
 */
interface DriverRepository
{
    /**
     * @param int $season
     * @return Driver[]
     */
    public function getDriverListForSeason($season);
}