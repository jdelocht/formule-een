<?php

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class DriverApi
{
    /**
     * @var DriverRepository
     */
    private $driverRepository;

    /**
     * DriverApi constructor.
     * @param DriverRepository $driverRepository
     */
    public function __construct(DriverRepository $driverRepository)
    {
        $this->driverRepository = $driverRepository;
    }

    public function getDriverListForSeason2017()
    {
        return $this->driverRepository->getDriverListForSeason(2017);
    }
}

