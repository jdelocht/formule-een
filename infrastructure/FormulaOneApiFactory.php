<?php

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
            $databaseConnection = 'mysql:dbname=phpmyadmin;host=localhost';
            $databaseUser = 'root';
            try {
                $link = new PDO($databaseConnection, $databaseUser);
            } catch (PDOException $e) {
                die('Connection failed: ' . $e->getMessage());
            }
            return new PdoSessionRepository($link);
        }
    }
}