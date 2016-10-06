<?php
error_reporting(E_ALL);

require_once __DIR__ . '/domain/driver/Driver.php';
require_once __DIR__ . '/domain/team/Team.php';
require_once __DIR__ . '/domain/team/TeamInfo.php';
require_once __DIR__ . '/domain/team/TeamHistory.php';
require_once __DIR__ . '/infrastructure/FormulaOneApiFactory.php';
require_once __DIR__ . '/application/DriverRepository.php';
require_once __DIR__ . '/application/DummyDriverRepository.php';
require_once __DIR__ . '/application/DriverApi.php';
require_once __DIR__ . '/application/TeamRepository.php';
require_once __DIR__ . '/application/DummyTeamRepository.php';
require_once __DIR__ . '/application/TeamApi.php';

$drivers = FormulaOneApiFactory::getDriverApi()->getDriverListForSeason2017();
$teams = FormulaOneApiFactory::getTeamApi()->getTeamListFor2016();

/** @var Driver $driver */
foreach ($drivers as $driver) {
    echo $driver->getDriverRaceNumber() . ' ' . $driver->getDriverName() . ' ' . $driver->getDriverNationality() . ' ' . $driver->getDriverTeam() . '<br>';

    if (!$driver->isFullDriver()) {
        echo '<p>Not yet confirmed</p>';
    }
}

    /** @var Team $team */
foreach ($teams as $team) {
     echo $team->getTeamName() . ' ' . $team->getTeamEngine() . ' ' . $team->getChassisName() . '<br>';
}

$grandPrix = [
    new GrandPrix ('20 March', 'Formula 1 Rolex Australian Grand Prix', 'Nico Rosberg', new GrandPrixInfo('Melbourne', 'Australia', 5303, 307574, 58, new RaceLapRecord('Michael Schumacher', 124125), new SessionInfo('FP1', 'Friday', '12:30', '14:00'))),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
    new GrandPrix (),
];
echo 'hoi';




