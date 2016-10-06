<?php

/**
 * Created by PhpStorm.
 * User: Joost
 * Date: 25-9-2016
 * Time: 16:24
 */
interface TeamRepository
{
    /**
     * @param int $season
     * @return Driver[]
     */
    public function getTeamListForSeason($season);
}