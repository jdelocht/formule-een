<?php

use domain\session_result\ResultLine;
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



?>
<HTML>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>

        <body bgcolor="lightgrey" text = "black">
            <div class="division">
                <img src="http://logos-download.com/wp-content/uploads/2016/06/F1_Formula_1_logo_black_background.png" height = "50px" align="middle">
                <a href = "http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=1" class = "button">Free Practice One</a>
                <a href = "http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=2" class = "button">Free Practice Two</a>
                <a href = "http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=3" class = "button">Free Practice Three</a>
                <a href = "http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=4" class = "button">Qualifying One</a>
                <a href = "http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=5" class = "button">Qualifying Two</a>
                <a href = "http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=6" class = "button">Qualifying Three</a>
                <a href = "http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=7" class = "button">Race</a>
            </div>
            <div class="division2">

<?php

/**
 * @param $session
 * @return string
 */
function getTitleForSession($grandPrix, $session)
{
    if ($grandPrix == 'mexico' && $session == 1) {
        return 'FORMULA 1 GRAN PREMIO DE MÉXICO 2016 - FREE PRACTICE ONE RESULTS';
    } if ($grandPrix == 'mexico' && $session == 2) {
    return 'FORMULA 1 GRAN PREMIO DE MÉXICO 2016 - FREE PRACTICE TWO RESULTS';
} if ($grandPrix == 'mexico' && $session == 3) {
    return 'FORMULA 1 GRAN PREMIO DE MÉXICO 2016 - FREE PRACTICE THREE RESULTS';
} if ($grandPrix == 'mexico' && $session == 4) {
    return 'FORMULA 1 GRAN PREMIO DE MÉXICO 2016 - QUALIFYING ONE RESULTS';
} if ($grandPrix == 'mexico' && $session == 5) {
    return 'FORMULA 1 GRAN PREMIO DE MÉXICO 2016 - QUALIFYING TWO RESULTS';
} if ($grandPrix == 'mexico' && $session == 6) {
    return 'FORMULA 1 GRAN PREMIO DE MÉXICO 2016 - QUALIFYING THREE RESULTS';
} if ($grandPrix == 'mexico' && $session == 7) {
    return 'FORMULA 1 GRAN PREMIO DE MÉXICO - 2016 RACE RESULTS';
} return '';
}

echo '<h3>' . getTitleForSession($grandPrix, $session) . '</h3>';

/** @var ResultLine $sessionResult */
foreach($sessionResults->asArray() as $position => $sessionResult) {
    if ($session == 7 && $position == 0) {
        echo $position + 1 . ' | ' . $sessionResult->getDriver() . ' | ' . $sessionResult->getTeam() . ' | ' . $sessionResult->getNumberOfLaps() . ' | ' . $sessionResult->getLapTimeAsFormattedString() . ' | ' . $sessionResults->getPointsForSession($position) . '<br>';
    }  elseif ($session == 7 && $sessionResult->getLapTime() == 991 || $sessionResult->getLapTime() == 992 || $sessionResult->getLapTime() == 993 || $sessionResult->getLapTime() == 999) {
        echo $position + 1 . ' | ' . $sessionResult->getDriver() . ' | ' . $sessionResult->getTeam() . ' | ' . $sessionResult->getNumberOfLaps() . ' | ' . $sessionResult->getLapTimeAsFormattedString() . ' | ' . $sessionResults->getPointsForSession($position) . '<br>';
    } elseif ($session == 7) {
        echo $position + 1 . ' | ' . $sessionResult->getDriver() . ' | ' . $sessionResult->getTeam() . ' | ' . $sessionResult->getNumberOfLaps() . ' | ' . $sessionResult->getDifferenceBetween($lapTime) . ' | ' . $sessionResults->getPointsForSession($position) . '<br>';
    } elseif($position == 0) {
        echo $position + 1 . ' | ' . $sessionResult->getDriver() . ' | ' . $sessionResult->getTeam() . ' | ' . $sessionResult->getLapTimeAsFormattedString() . ' | ' . ' ' . ' | ' . $sessionResult->getNumberOfLaps() . '<br>';
    } else
        echo $position + 1 . ' | ' . $sessionResult->getDriver() . ' | ' . $sessionResult->getTeam() . ' | ' . $sessionResult->getLapTimeAsFormattedString() . ' | ' . $sessionResult->getDifferenceBetween($lapTime) . ' | ' . $sessionResult->getNumberOfLaps() . '<br>';
}
?>
            </div>
</HTML>