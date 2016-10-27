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

    //When installing PDO as a shared module, the php.ini file needs to be updated so that the PDO extension will be loaded
    // automatically when PHP runs. You will also need to enable any database specific drivers there too; make sure that they are listed
    // after the pdo.so line, as PDO must be initialized before the database-specific extensions can be loaded.
    //// If you built PDO and the database-specific extensions statically, you can skip this step.

    //Windows users
    //PDO and all the major drivers ship with PHP as shared extensions, and simply need to be activated by editing the php.ini file:
    //
    //extension=php_pdo.dll

    /**
     * @param bool $isInTestModus
     * @return SessionRepository
     */
    public static function createSessionRepository($isInTestModus)
    {
        if ($isInTestModus) {
            $sessionRepository = new DummySessionRepository();
            return $sessionRepository;
        } else {
            $databaseConnection = 'mysqli:dbname=gekkojdl;host=localhost';
            $databaseUser = 'joost';
            $password = 'jdltest';

            try {
                $link = new PDO($databaseConnection, $databaseUser, $password);
            } catch (PDOException $e) {
                phpinfo();
                die('Connection failed: ' . $e->getMessage());
            }
            $sessionRepository = new PdoSessionRepository ($link);
            return $sessionRepository;
        }
    }
}