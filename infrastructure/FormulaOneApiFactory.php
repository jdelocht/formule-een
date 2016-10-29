<?php
namespace infrastructure;


use application\DummySessionRepository;
use application\PdoSessionRepository;
use application\SessionRepository;
use application\SessionResultApi;
use domain\session_result\FreePracticeResultsForTheFirstDriverInArray;
use domain\session_result\functions\LapTimeCalculator;
use domain\session_result\functions\LapTimeConverter;
use domain\session_result\QualifyingResultsForTheFirstDriverInArray;
use domain\session_result\RaceResultForTheFirstDriverInArray;
use PDO;
use PDOException;

class FormulaOneApiFactory
{
    public static function getSessionResultApi()
    {
        $isInTestModus = false;
        return new SessionResultApi (
            self::createSessionRepository($isInTestModus),
            new LapTimeConverter,
            new LapTimeCalculator,
            new FreePracticeResultsForTheFirstDriverInArray(
                new LapTimeConverter,
                new LapTimeCalculator
            ),
            new QualifyingResultsForTheFirstDriverInArray(
                new LapTimeConverter
            ),
            new RaceResultForTheFirstDriverInArray()
        );
    }

    /**
     * @param bool $isInTestModus
     * @return SessionRepository
     */
    public static function createSessionRepository($isInTestModus)
    {
        if ($isInTestModus) {
            return new DummySessionRepository();
        } else {
            $databaseConnection = 'mysql:dbname=gekkojdl;host=localhost';
            $databaseUser = 'joost';
            $password = 'jdltest';
            try {
                $link = new PDO($databaseConnection, $databaseUser, $password);
            } catch (PDOException $e) {
                die('Connection failed: ' . $e->getMessage());
            }
            return new PdoSessionRepository($link);
        }
    }
}