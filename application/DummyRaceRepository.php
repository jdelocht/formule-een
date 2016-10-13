<?php

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class DummyRaceRepository implements RaceRepository
{
    /**
     * DummyRaceRepository constructor.
     */
    public function __construct()
    {
    }

    public function getResultsForRace($race)
    {
        switch ($race) {
            case 'Suzuka':
                return $this->getSuzukaRaceResult();
        }
        return [];
    }

    private function getSuzukaRaceResult()
    {
        return [
            new RaceResult('Nico Rosbeg', 'Mercedes', 53, 12643333, 25),
            new RaceResult('Max Verstappen', 'Red Bull Racing', 53, +4978, 18),
            new RaceResult('Lewis Hamilton', 'Mercedes', 53, +5776, 15),
            new RaceResult('Sebastian Vettel', 'Ferrari', 53, +20269, 12),
            new RaceResult('Kimi Räikönnen', 'Ferrari', 53, +28370, 10),
            new RaceResult('Daniel Ricciardo', 'Red Bull Racing', 53, +33941, 8),
            new RaceResult('Sergio Perez', 'Force India', 53, +57495, 6),
            new RaceResult('Nico Hulkenberg', 'Force India', 53, +59177, 4),
            new RaceResult('Felipe Massa', 'Williams', 53, +97763, 2),
            new RaceResult('Valtteri Bottas', 'Williams', 53, +98323, 1),
            new RaceResult('Romain Grosjean', 'Haas F1', 52, +1, 0),
            new RaceResult('Joylon Palmer', 'Renault', 52, +1, 0),
            new RaceResult('Daniil Kvyatt', 'Torro Rosso', 52, +1, 0),
            new RaceResult('Kevin Magnussen', 'Renault', 52, +1, 0),
            new RaceResult('Marcus Ericsson', 'Sauber', 52, +1, 0),
            new RaceResult('Fernando Alonso', 'McLaren', 52, +1, 0),
            new RaceResult('Carlos Sainz', 'Torro Rosso', 52, +1, 0),
            new RaceResult('Jenson Button', 'McLaren', 52, +1, 0),
            new RaceResult('Felipe Nasr', 'Sauber', 52, +1, 0),
            new RaceResult('Esteban Guitierrez', 'Haas F1', 52, +1, 0),
            new RaceResult('Esteban Ocon', 'Manor F1', 52, +1, 0),
            new RaceResult('Pascal Wehrlein', 'Manor F1', 52, +1, 0),
        ];
    }
}