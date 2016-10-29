<?php
use application\Test;

error_reporting(E_ALL);

spl_autoload_register(function ($class) {
    $file = __DIR__  . '/' . str_replace('\\', '/', $class) . '.php';

    if(file_exists($file)) {
        require_once $file;
        return;
    }
    echo $file . ' bestaat niet';
});

new Test();
exit;

require_once __DIR__ . '/infrastructure/FormulaOneApiFactory.php';
require_once __DIR__ . '/application/SessionRepository.php';
require_once __DIR__ . '/application/SessionResultApi.php';
require_once __DIR__ . '/application/PdoSessionRepository.php';
//require_once __DIR__ . '/domain/session_result/fp_session_result/SessionResult.php';
//require_once __DIR__ . '/domain/session_result/qualifying_result/QualifyingResult.php';
//require_once __DIR__ . '/domain/session_result/race_result/RaceResult.php';
//require_once __DIR__ . '/domain/session_result/FreePracticeResultsForTheFirstDriverInArray.php';
//require_once __DIR__ . '/domain/session_result/QualifyingResultsForTheFirstDriverInArray.php';
//require_once __DIR__ . '/domain/session_result/RaceResultForTheFirstDriverInArray.php';
//require_once __DIR__ . '/domain/session_result/functions/LapTimeConverter.php';
//require_once __DIR__ . '/domain/session_result/functions/LapTimeDifferenceCalculator.php';
//require_once __DIR__ . '/application/DummySessionRepository.php';

$sessionResultApi = FormulaOneApiFactory::getSessionResultApi();

//$displayFreePracticeOneResults = $sessionResultApi->getFreePracticeResults('Suzuka Free Practice 1');
//$displayFreePracticeTwoResults = $sessionResultApi->getFreePracticeResults('Suzuka Free Practice 2');
//$displayFreePracticeThreeResults = $sessionResultApi->getFreePracticeResults('Suzuka Free Practice 3');
//$displayQualifyingResults = $sessionResultApi->getQualifyingResults('Suzuka');
//$displayRaceResults = $sessionResultApi->getRaceResults('Suzuka');
$displayPdoResults = $sessionResultApi->getSessionResultFromPDO('drivers');


//echo '2016 FORMULA 1 EMIRATES JAPANESE GRAND PRIX' . '<BR>' . 'SUZUKA INTERNATIONAL RACING COURSE' . '<BR><BR>';
//echo  'Free Practice One:' . '<BR>';
//foreach ($displayFreePracticeOneResults as $resultLine) {
//    echo $resultLine . '<BR>';
//}
//echo '<BR>';
//echo 'Free Practice Two:' . '<BR>';
//foreach ($displayFreePracticeTwoResults as $resultLine) {
//    echo $resultLine . '<BR>';
//}
//echo '<BR>';
//echo 'Free Practice Three:' . '<BR>';
//foreach ($displayFreePracticeThreeResults as $resultLine) {
//    echo $resultLine . '<BR>';
//}
//echo '<BR>';
//echo 'Qualifying Results:' . '<BR>';
//foreach ($displayQualifyingResults as $resultLine) {
//    echo $resultLine . '<BR>';
//}
//echo '<BR>';
//echo 'Race Results:' . '<BR>';
//foreach ($displayRaceResults as $resultLine) {
//    echo $resultLine . '<BR>';
//}

echo $displayPdoResults;