<?php

interface QualifyingRepository
{
    /**
     * @param $qualifying
     * return QualifyingResult[]
     */
    public function getResultsForQualifying($qualifying);
}