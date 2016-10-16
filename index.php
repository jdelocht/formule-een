<?php
error_reporting(E_ALL);

require_once __DIR__ . '/domain/driver/Driver.php';
require_once __DIR__ . '/domain/team/Team.php';
require_once __DIR__ . '/domain/team/TeamInfo.php';
require_once __DIR__ . '/domain/team/TeamHistory.php';
require_once __DIR__ . '/domain/session_result/fp_session_result/SessionResult.php';
require_once __DIR__ . '/domain/session_result/qualifying_result/QualifyingResult.php';
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

$displayFreePracticeOneResults = FormulaOneApiFactory::getSessionResultApi()->getFreePracticeOneResults($suzukaFP1SessionResults);
$displayFreePracticeTwoResults = FormulaOneApiFactory::getSessionResultApi()->getFreePracticeTwoResults($suzukaFP1SessionResults);
$displayFreePracticeThreeResults = FormulaOneApiFactory::getSessionResultApi()->getFreePracticeThreeResults($suzukaFP1SessionResults);
$displayQualifyingResults = FormulaOneApiFactory::getQualifyingApi()->displayQualifyingResults($suzukaQualifyingResult);



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
echo FormulaOneApiFactory::getRaceResultApi()->displayRaceResults($suzukaRaceResult);





//Optie 1: onderstaande berekening zou kunnen werken, ook met de convertlaptimer. Het enige probleem is dat, wanneer de verschillen 10+ in sec worden, wat rare is maar wel met Sainz in Japan gebeurde, er een error komt. Wat zijn alternatieven?
//Ook is het zo dat dit een berekening is, maar ik nog niet weet hoe ik van hieruit alle arraywaarden vergelijk met de sessiewinnaar.
//misschien: http://stackoverflow.com/questions/8662539/php-compare-values-in-a-single-array-and-output-the-difference?


$time = 134128;
$time2 = 154713;



/**
 * @param $time2
 * @return float
 */
function convertTimeTwoForLapTimeDifferenceFreePractice($time2)
{
    $mins2 = floor($time2 / 100000);
    $sec2 = floor($time2 / 1000) % 100;

    $secondsForDifference2 = $mins2 * 60 + $sec2;
    return $secondsForDifference2;
}

/**
 * @param $time
 * @return float
 */
function convertTimeOneForLapTimeDifferenceFreePractice($time)
{
    $mins = floor($time / 100000);
    $sec = floor($time / 1000) % 100;

    return $mins * 60 + $sec;
}

/**
 * @param $time
 * @param $time2
 * @return array
 */
function calculateDifferenceInLapTimeForFreePractice($time, $time2)
{
    $secondsForDifference1 = convertTimeOneForLapTimeDifferenceFreePractice($time);
    $secondsForDifference2 = convertTimeTwoForLapTimeDifferenceFreePractice($time2);

    $millisecs = floor($time % 1000);
    $millisecs2 = floor($time2 % 1000);

    $differenceSeconds = $secondsForDifference2 - $secondsForDifference1;
    $differenceMilliseconds = $millisecs2 - $millisecs;
    return array($differenceSeconds, $differenceMilliseconds);
}

/**
 * @param $time
 * @param $time2
 */
function displayLapTimeDifferenceForFreePractice($time, $time2)
{
    list($differenceSeconds, $differenceMilliseconds) = calculateDifferenceInLapTimeForFreePractice($time, $time2);

    echo '+' . $differenceSeconds . '.' . $differenceMilliseconds;
}
displayLapTimeDifferenceForFreePractice($time, $time2);




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

