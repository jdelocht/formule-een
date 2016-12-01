<?php
namespace infrastructure;


use application\DummySessionRepository;
use application\PdoSessionRepository;
use application\SessionRepository;
use application\SessionResultApi;
use PDO;
use PDOException;

class FormulaOneApiFactory
{
    /**
     * @return SessionResultApi
     */
    public static function getSessionResultApi()
    {
        $isInTestModus = false;
        return new SessionResultApi (
            self::createSessionRepository($isInTestModus)
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
            $databaseConnection = 'mysql:dbname=;host=';
            $databaseUser = '';
            $password = '';
            try {
                $link = new PDO($databaseConnection, $databaseUser, $password);
            } catch (PDOException $e) {
                die('Connection failed: ' . $e->getMessage());
            }
            return new PdoSessionRepository($link);
        }
    }
}
