<?php
error_reporting(E_ALL);

require_once __DIR__ . '/domain/driver/Driver.php';
require_once __DIR__ . '/domain/team/Team.php';
require_once __DIR__ . '/domain/team/TeamInfo.php';
require_once __DIR__ . '/domain/team/TeamHistory.php';
require_once __DIR__ . '/domain/session_result/fp_session_result/SessionResult.php';
require_once __DIR__ . '/domain/session_result/qualifying_result/QualifyingResult.php';
require_once __DIR__ . '/domain/session_result/race_result/RaceResult.php';
require_once __DIR__ . '/domain/functions/LapTimeConverter.php';
require_once __DIR__ . '/domain/functions/LapTimeDifferenceCalculator.php';
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
$sessionResultApi = FormulaOneApiFactory::getSessionResultApi();
$qualifyingApi = FormulaOneApiFactory::getQualifyingApi();
$raceResultApi = FormulaOneApiFactory::getRaceResultApi();

$displayFreePracticeOneResults = $sessionResultApi->getFreePracticeResults('Suzuka Free Practice 1');
$displayFreePracticeTwoResults = $sessionResultApi->getFreePracticeResults('Suzuka Free Practice 2');
$displayFreePracticeThreeResults = $sessionResultApi->getFreePracticeResults('Suzuka Free Practice 3');
$displayQualifyingResults = $qualifyingApi->getQualifyingResults('Suzuka');
$displayRaceResults = $raceResultApi->getRaceResults('Suzuka');

$displayFreePracticeOneResultsAustin = $sessionResultApi->getFreePracticeResults('Austin Free Practice 1');





echo '2016 FORMULA 1 EMIRATES JAPANESE GRAND PRIX' . '<BR>' . 'Suzuka' . '<BR><BR>';
echo  'Free Practice One:' . '<BR>';
foreach ($displayFreePracticeOneResults as $resultLine) {
    echo $resultLine . '<BR>';
}
echo '<BR>';
echo 'Free Practice Two:' . '<BR>';
foreach ($displayFreePracticeTwoResults as $resultLine) {
    echo $resultLine . '<BR>';
}
echo '<BR>';
echo 'Free Practice Three:' . '<BR>';
foreach ($displayFreePracticeThreeResults as $resultLine) {
    echo $resultLine . '<BR>';
}
echo '<BR>';
echo 'Qualifying Results:' . '<BR>';
foreach ($displayQualifyingResults as $resultLine) {
    echo $resultLine . '<BR>';
}
echo '<BR>';
echo 'Race Results:' . '<BR>';
foreach ($displayRaceResults as $resultLine) {
    echo $resultLine . '<BR>';
}

echo '<BR>';
echo 'Session Results Austin' . '<BR>';
foreach ($displayFreePracticeOneResultsAustin as $resultLine) {
    echo $resultLine . '<BR>';
}



//$lapTime = 134128;
//$slowerLapTime = 154713;
//
//echo getLapTimeDifferenceBetween($lapTime, $slowerLapTime);





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

