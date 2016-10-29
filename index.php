<?php
use application\Test;
use infrastructure\FormulaOneApiFactory;

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
$sessionResultApi = FormulaOneApiFactory::getSessionResultApi();

//$displayFreePracticeOneResults = $sessionResultApi->getFreePracticeResults('Suzuka Free Practice 1');
//$displayFreePracticeTwoResults = $sessionResultApi->getFreePracticeResults('Suzuka Free Practice 2');
//$displayFreePracticeThreeResults = $sessionResultApi->getFreePracticeResults('Suzuka Free Practice 3');
//$displayQualifyingResults = $sessionResultApi->getQualifyingResults('Suzuka');
//$displayRaceResults = $sessionResultApi->getRaceResults('Suzuka');
$displayPdoResults = $sessionResultApi->getSessionResultFromPDO('Mexico', 1);


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

var_dump($displayPdoResults);