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

function getGrandPrixForTitle($grandPrix)
{
    if ($grandPrix == 'mexico') {
        return 'FORMULA 1 GRAN PREMIO DE MÉXICO 2016';
    } return '';
}

function getSessionForTitle($session)
{
    if ($session == 1) {
        return 'FREE PRACTICE ONE RESULTS';
    } if ($session == 2) {
        return 'FREE PRACTICE ONE RESULTS';
    } if ($session == 3) {
        return 'FREE PRACTICE ONE RESULTS';
    } if ($session == 4 || $session == 5 || $session == 6) {
        return 'QUALIFYING RESULTS';
    } if ($session == 7) {
        return 'RACE RESULTS';
    } return '';
}

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
                <a href = "http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=4" class = "button">Qualifying</a>
                <a href = "http://localhost:63342/formulaone2017/index.php?grandprix=mexico&session=7" class = "button">Race</a>
            </div>
            <div class="division2">

<?php

echo '<h3>' . getGrandPrixForTitle($grandPrix) . ' - ' . getSessionForTitle($session) . '</h3>';
/** @var ResultLine $sessionResult */
foreach($sessionResults->asArray() as $position => $sessionResult) {
    if ($session == 4 || $session == 5 || $session == 6) {
        echo $position + 1 . ' | ' . $sessionResult->getDriver() . ' | ' . $sessionResult->getTeam() . ' | ' . $sessionResult->getLapTimeAsFormattedString() . ' | ' .  $sessionResult->getLapTimeAsFormattedString() . ' | ' .  $sessionResult->getLapTimeAsFormattedString() . ' | '  . $sessionResult->getNumberOfLaps() . '<br>';
    } elseif($position == 0) {
        echo $position + 1 . ' | ' . $sessionResult->getDriver() . ' | ' . $sessionResult->getTeam() . ' | ' . $sessionResult->getLapTimeAsFormattedString() . ' | ' . ' ' . ' | ' . $sessionResult->getNumberOfLaps() . '<br>';
    } else
        echo $position + 1 . ' | ' . $sessionResult->getDriver() . ' | ' . $sessionResult->getTeam() . ' | ' . $sessionResult->getLapTimeAsFormattedString() . ' | ' . $sessionResult->getDifferenceBetween($lapTime) . ' | ' . $sessionResult->getNumberOfLaps() . '<br>';
}
?>
            </div>
</HTML>