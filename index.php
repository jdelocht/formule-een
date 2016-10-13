<?php
error_reporting(E_ALL);

require_once __DIR__ . '/domain/driver/Driver.php';
require_once __DIR__ . '/domain/team/Team.php';
require_once __DIR__ . '/domain/team/TeamInfo.php';
require_once __DIR__ . '/domain/team/TeamHistory.php';
require_once __DIR__ . '/domain/session_result/fp_session_result/SessionResult.php';
require_once __DIR__ . '/domain/session_result/qualifying_result/QualifyingResult.php';
require_once __DIR__ . '/domain/laptimedefiner/LapTimeDefiner.php';
require_once __DIR__ . '/domain/session_result/race_result/RaceResult.php';
require_once __DIR__ . '/infrastructure/FormulaOneApiFactory.php';
require_once __DIR__ . '/application/DriverApi.php';
require_once __DIR__ . '/application/DriverRepository.php';
require_once __DIR__ . '/application/DummyDriverRepository.php';
require_once __DIR__ . '/application/TeamApi.php';
require_once __DIR__ . '/application/TeamRepository.php';
require_once __DIR__ . '/application/DummyTeamRepository.php';
require_once __DIR__ . '/application/SessionResultApi.php';
require_once __DIR__ . '/application/SessionRepository.php';
require_once __DIR__ . '/application/DummySessionRepository.php';
require_once __DIR__ . '/application/QualifyingApi.php';
require_once __DIR__ . '/application/QualifyingRepository.php';
require_once __DIR__ . '/application/DummyQualifyingRepository.php';
require_once __DIR__ . '/application/RaceResultApi.php';
require_once __DIR__ . '/application/RaceRepository.php';
require_once __DIR__ . '/application/DummyRaceRepository.php';

$drivers = FormulaOneApiFactory::getDriverApi()->getDriverListForSeason2017();
$teams = FormulaOneApiFactory::getTeamApi()->getTeamListFor2016();
$suzukaFP1SessionResults = FormulaOneApiFactory::getSessionResultApi()->getResultsForSuzuka2016FreePractice1();
$suzukaFP2SessionResults = FormulaOneApiFactory::getSessionResultApi()->getResultsForSuzuka2016FreePractice2();
$suzukaFP3SessionResults = FormulaOneApiFactory::getSessionResultApi()->getResultsForSuzuka2016FreePractice3();
$suzukaQualifyingResult = FormulaOneApiFactory::getQualifyingApi()->getResultsForSuzukaQualifying();
$suzukaRaceResult = FormulaOneApiFactory::getRaceResultApi()->getResultsForSuzukaRace();

echo '2016 FORMULA 1 EMIRATES JAPANESE GRAND PRIX' . '<BR>' . 'Suzuka' . '<BR><BR>';
echo  'Free Practice One:' . '<BR>';

/** @var SessionResult $sessionResult */
foreach ($suzukaFP1SessionResults as $position => $sessionResult) {
    $time = $sessionResult->getLapTime();
    $minutes = substr($time, 0, 1);
    $seconds = substr($time, 1, 2);
    $milliseconds = substr($time, 3, 3);
    $lapTime =  $minutes . ':' . $seconds . '.' . $milliseconds;

    echo  $position+1 . '.' . ' ' . ' ' . $sessionResult->getDriver() . ' ' . $sessionResult->getTeam() . ' ' . $lapTime . ' ' . $sessionResult->getNumberOfLaps() . '<br>';
}

echo '<BR>';
echo 'Free Practice Two:' . '<BR>';

/** @var SessionResult $SessionResults */
foreach ($suzukaFP2SessionResults as $position => $sessionResult) {
    $time = $sessionResult->getLapTime();
    $minutes = substr($time, 0, 1);
    $seconds = substr($time, 1, 2);
    $milliseconds = substr($time, 3, 3);
    $lapTime =  $minutes . ':' . $seconds . '.' . $milliseconds;

    echo  $position+1 . '.' . ' ' . ' ' . $sessionResult->getDriver() . ' ' . $sessionResult->getTeam() . ' ' . $lapTime . ' ' . $sessionResult->getNumberOfLaps() . '<br>';
}

echo '<BR>';
echo 'Free Practice Three:' . '<BR>';
/** @var SessionResult $SessionResults */
foreach ($suzukaFP3SessionResults as $position => $sessionResult) {
    $time = $sessionResult->getLapTime();
    $minutes = substr($time, 0, 1);
    $seconds = substr($time, 1, 2);
    $milliseconds = substr($time, 3, 3);
    $lapTime = $minutes . ':' . $seconds . '.' . $milliseconds;

    echo $position + 1 . '.' . ' ' . ' ' . $sessionResult->getDriver() . ' ' . $sessionResult->getTeam() . ' ' . $lapTime . ' ' . $sessionResult->getNumberOfLaps() . '<br>';
}

echo '<BR>';
echo 'Qualifying Results:' . '<BR>';

/** @var QualifyingResult $qualifyingResult */
foreach ($suzukaQualifyingResult as $position => $qualifyingResult) {
    $timeQ1 = $qualifyingResult->getQualifyingOneTime();
    $timeQ2 = $qualifyingResult->getQualifyingTwoTime();
    $timeQ3 = $qualifyingResult->getQualifyingThreeTime();

    $minutesQ1 = substr($timeQ1, 0, 1);
    $secondsQ1 = substr($timeQ1, 1, 2);
    $millisecondsQ1 = substr($timeQ1, 3, 3);
    $lapTimeQ1 = $minutesQ1 . ':' . $secondsQ1 . '.' . $millisecondsQ1;

    $minutesQ2 = substr($timeQ2, 0, 1);
    $secondsQ2 = substr($timeQ2, 1, 2);
    $millisecondsQ2 = substr($timeQ2, 3, 3);
    $laptTimeQ2 = $minutesQ2 . ':' . $secondsQ2 . '.' . $millisecondsQ2;

    $minutesQ3 = substr($timeQ3, 0, 1);
    $secondsQ3 = substr($timeQ3, 1, 2);
    $millisecondsQ3 = substr($timeQ3, 3, 3);
    $lapTimeQ3 = $minutesQ3 . ':' . $secondsQ3 . '.' . $millisecondsQ3;

    echo $position + 1 . '.' . ' ' . ' ' . $qualifyingResult->getDriver() . ' '. $qualifyingResult->getTeam() . ' ' . $lapTimeQ1 . ' ' . $laptTimeQ2 . ' ' . $lapTimeQ3 . ' ' . ' ' . $qualifyingResult->getNumberOfLaps() . '<br>';
}

echo '<BR>';
echo 'Race Results:' . '<BR>';

/** @var RaceResult $raceResult */
foreach ($suzukaRaceResult as $position => $raceResult) {
    echo $position + 1 . '.' . ' ' . ' ' . $raceResult->getDriver() . ' ' . $raceResult->getTeam() . ' ' . $raceResult->getNumberOfLaps() . ' ' . $raceResult->getTimeOrRetired() . ' ' . $raceResult->getChampionshipPoints() . '<BR>';
}
//    /** @var Driver $driver */
//foreach ($drivers as $driver) {
//    echo $driver->getDriverRaceNumber() . ' ' . $driver->getDriverName() . ' ' . $driver->getDriverNationality() . ' ' . $driver->getDriverTeam() . '<br>';
//
//    if (!$driver->isFullDriver()) {
//        echo '<p>Not yet confirmed</p>';
//    }
//}
//
//    /** @var Team $team */
//foreach ($teams as $team) {
//     echo $team->getTeamName() . ' ' . $team->getTeamEngine() . ' ' . $team->getChassisName() . '<br>';
//}

//echo 'hoi' . '<br><BR>';

