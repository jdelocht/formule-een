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

$i = 1;

/** @var ResultLine $sessionResult */
foreach($sessionResults->asArray() as $sessionResult) {
    echo $i . ' | ' . $sessionResult->getDriver() . ' | ' . $sessionResult->getTeam() . ' | ' . $sessionResult->getLapTimeAsFormattedString() . ' | ' . $sessionResult->getDifferenceBetween() . ' | ' . $sessionResult->getNumberOfLaps() . '<br>';
    $i++;
}

