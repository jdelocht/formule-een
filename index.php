<?php

use domain\season_result\SeasonResultLine;
use domain\session_result\ResultLine;
use domain\SessionResult;
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

$sessionResultApi = FormulaOneApiFactory::getSessionResultApi();
$requestedGrandPrix = $_GET['grandprix'];
$requestedSession = $_GET['session'];
$requestedSeason = $_GET['season'];

$seasonResults = $sessionResultApi->getDriverChampionshipStandingFor($requestedSeason);
$grandPrixResults = $sessionResultApi->getGrandPrix($requestedGrandPrix, $requestedSeason);
$results = $grandPrixResults->getResultsFor($requestedSession);
$lapTimes = $results->getFirstResultLinesLapTime();


?>
<!DOCTYPE html>
<HTML>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css">
            <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        </head>

        <body bgcolor="lightgrey" text = "black">
            <div class="division">
                <img src="http://logos-download.com/wp-content/uploads/2016/06/F1_Formula_1_logo_black_background.png" height = "50px" align="middle">
                <a href = "http://localhost:4433/formulaone2017/index.php?grandprix=mexico&session=1&season=2016" class = "button">Free Practice One</a>
                <a href = "http://localhost:4433/formulaone2017/index.php?grandprix=mexico&session=2&season=2016" class = "button">Free Practice Two</a>
                <a href = "http://localhost:4433/formulaone2017/index.php?grandprix=mexico&session=3&season=2016" class = "button">Free Practice Three</a>
                <a href = "http://localhost:4433/formulaone2017/index.php?grandprix=mexico&session=4&season=2016" class = "button">Qualifying One</a>
                <a href = "http://localhost:4433/formulaone2017/index.php?grandprix=mexico&session=5&season=2016" class = "button">Qualifying Two</a>
                <a href = "http://localhost:4433/formulaone2017/index.php?grandprix=mexico&session=6&season=2016" class = "button">Qualifying Three</a>
                <a href = "http://localhost:4433/formulaone2017/index.php?grandprix=mexico&session=7&season=2016" class = "button">Race</a>
            </div>
            <div class="division2">

<?php

echo '<h3>' . $grandPrixResults->getTitleForMexican($requestedGrandPrix, $requestedSession) . '</h3>';

/** @var ResultLine $sessionResult */
foreach($results->asArray() as $position => $sessionResult) {
    if ($requestedSession == SessionResult::Race && $position == 0) {
        echo $position + 1 . ' | ' . $sessionResult->getDriver() . ' | ' . $sessionResult->getTeam() . ' | ' . $sessionResult->getNumberOfLaps() . ' | ' . $sessionResult->getRaceDurationOrException() . ' | ' . $results->getRaceResultPointPerGrandPrixAsDedicatedPer($position) . '<br>';
    } elseif ($requestedSession == SessionResult::Race && $sessionResult->getLapTime() >= 9999) {
        echo 'NC' . ' | ' . $sessionResult->getDriver() . ' | ' . $sessionResult->getTeam() . ' | ' . $sessionResult->getNumberOfLaps() . ' | ' . $sessionResult->getRaceDurationOrException() . ' | ' . $results->getRaceResultPointPerGrandPrixAsDedicatedPer($position) . '<br>';
    } elseif ($requestedSession == SessionResult::Race && $sessionResult->getLapTime() >= 9991) {
        echo $position + 1 . ' | ' . $sessionResult->getDriver() . ' | ' . $sessionResult->getTeam() . ' | ' . $sessionResult->getNumberOfLaps() . ' | ' . $sessionResult->getRaceDurationOrException() . ' | ' . $results->getRaceResultPointPerGrandPrixAsDedicatedPer($position) . '<br>';
    } elseif ($requestedSession == SessionResult::Race) {
        echo $position + 1 . ' | ' . $sessionResult->getDriver() . ' | ' . $sessionResult->getTeam() . ' | ' . $sessionResult->getNumberOfLaps() . ' | ' . $sessionResult->getDifferenceBetween($lapTimes) . ' | ' . $results->getRaceResultPointPerGrandPrixAsDedicatedPer($position) . '<br>';
    } elseif($position == 0) {
        echo $position + 1 . ' | ' . $sessionResult->getDriver() . ' | ' . $sessionResult->getTeam() . ' | ' . $sessionResult->getLapTimeAsFormattedString() . ' | ' . ' ' . ' | ' . $sessionResult->getNumberOfLaps() . '<br>';
    } else
        echo $position + 1 . ' | ' . $sessionResult->getDriver() . ' | ' . $sessionResult->getTeam() . ' | ' . $sessionResult->getLapTimeAsFormattedString() . ' | ' . $sessionResult->getDifferenceBetween($lapTimes) . ' | ' . $sessionResult->getNumberOfLaps() . '<br>';
}
?>
            </div>
            <br>
            <div class="division2">

<?php

echo '<h3>' . $requestedSeason . ' DRIVER STANDINGS</h3>';

/** @var SeasonResultLine $seasonResult */
foreach($seasonResults->asArray() as $position => $seasonResult) {
    echo $position + 1 . ' ' . $seasonResult->getDriver() . ' | ' . $seasonResult->getTeam() . ' | ' . $seasonResult->getAustralia() . ' | ' . $seasonResult->getBahrain() . ' | ' . $seasonResult->getChina() . ' | ' . $seasonResult->getRussia() . ' | ' . $seasonResult->getSpain() . ' | ' . $seasonResult->getMonaco() . ' | ' . $seasonResult->getCanada() . ' | ' . $seasonResult->getAzerbeidzjan() . ' | ' . $seasonResult->getAustria() . ' | ' . $seasonResult->getGreatBritain() . ' | ' . $seasonResult->getHungary() . ' | ' . $seasonResult->getGermany() . ' | ' . $seasonResult->getBelgium() . ' | ' . $seasonResult->getItaly() . ' | ' . $seasonResult->getSingapore() . ' | ' . $seasonResult->getMalaysia() . ' | ' . $seasonResult->getJapan() . ' | ' . $seasonResult->getUnitedStates() . ' | ' . $seasonResult->getMexico() . ' | ' . $seasonResult->getBrazil() . ' | ' . $seasonResult->getAbuDhabi() . ' | ' . $seasonResult->calculateTotalChampionshipPointsForDriverStandings() . '<BR>';
}
?>
            </div>
     </body>
</HTML>