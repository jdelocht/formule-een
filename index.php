<?php

use domain\session_result\fp_session_result\ResultLine;
use infrastructure\FormulaOneApiFactory;

//URL: http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=1
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
$grandPrix = $_GET['grandprix'];
$session = $_GET['session'];
$sessionResults = $sessionResultApi->getSessionResultFor($grandPrix, $session);
$lapTime = $sessionResults->getFirstResultLineLapTime();

echo '<HTML>
        <body bgcolor="lightgrey" text = "black">
            <a href = "http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=1">Free Practice One</a><br>
            <a href = "http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=2">Free Practice Two</a><br>
            <a href = "http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=3">Free Practice Three</a><br>
            <a href = "http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=4">Qualifying One</a><br>
            <a href = "http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=5">Qualifying Two</a><br>
            <a href = "http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=6">Qualifying Three</a><br>
            <a href = "http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=7">Race</a>
        <body>
    </HTML><br>';

echo '<br><br>';

/** @var ResultLine $sessionResult */
foreach($sessionResults->asArray() as $position => $sessionResult) {
    echo $position + 1 . ' | ' . $sessionResult->getDriver() . ' | ' . $sessionResult->getTeam() . ' | ' . $sessionResult->getLapTimeAsFormattedString() . ' | ' . $sessionResult->getDifferenceBetween($lapTime) . ' | ' . $sessionResult->getNumberOfLaps() . '<br>';;
}

