<?php
namespace application;

use domain\session_result\fp_session_result\ResultLine;
use domain\session_result\qualifying_result\QualifyingResult;
use domain\session_result\race_result\RaceResult;

class DummySessionRepository implements SessionRepository
{
    /**
     * DummySessionRepository constructor.
     */
    public function __construct()
    {
    }

    public function getResultsForSession($grandPrix, $session)
    {
        switch ($session) {
            case 'Suzuka Free Practice 1':
                return $this->getSuzukaFP1SessionResults();
            case 'Suzuka Free Practice 2':
                return $this->getSuzukaFP2SessionResults();
            case 'Suzuka Free Practice 3':
                return $this->getSuzukaFP3SessionResults();
            case 'Austin Free Practice 1':
                return $this->getAustinFP1SessionResults();
            case 'Austin Free Practice 2':
                return $this->getAustinFP2SessionResults();
            case 'Austin Free Practice 3':
                return $this->getAustinFP3SessionResults();
        }
        return [];
    }

    /**
     * @param $qualifying
     * @return QualifyingResult[]
     */
    public function getResultsForQualifying($qualifying)
    {
        switch ($qualifying) {
            case 'Suzuka':
                return $this->getSuzukaQualifyingResult();
        }
        return [];
    }

    public function getResultsForRace($race)
    {
        switch ($race) {
            case 'Suzuka':
                return $this->getSuzukaRaceResult();
        }
        return [];
    }

    /**
     * @return array
     */
    public function getSuzukaFP1SessionResults()
    {
        return [
            New ResultLine ('Nico Rosberg', 'Mercedes', 92.431, 24),
            New ResultLine ('Lewis Hamilton', 'Mercedes', 92.646, 19),
            New ResultLine ('Sebastian Vettel', 'Ferrari', 93.525, 21),
            New ResultLine ('Kimi Räikkönen', 'Ferrari', 93.817, 17),
            New ResultLine ('Daniel Ricciardo', 'Red Bull Racing', 94.112, 23),
            New ResultLine ('Max Verstappen', 'Red Bull Racing', 94.379, 26),
            New ResultLine ('Nico Hulkenberg', 'Force India', 94.530, 28),
            New ResultLine ('Sergio Perez', 'Force India', 94.767, 30),
            New ResultLine ('Fernando Alonso', 'McLaren', 95.003, 10),
            New ResultLine ('Valtteri Bottas', 'Williams', 95.381, 31),
            New ResultLine ('Daniil Kvyat', 'Torro Rosso', 95.446, 23),
            New ResultLine ('Carlos Sainz jr.', 'Torro Rosso', 95.672, 27),
            New ResultLine ('Jenson Button', 'McLaren', 95.677, 24),
            New ResultLine ('Romain Grosjean', 'Haas F1', 95.688, 17),
            New ResultLine ('Felipe Nasr', 'Sauber', 95.967, 15),
            New ResultLine ('Felipe Massa', 'Williams', 96.169, 23),
            New ResultLine ('Esteban Guitierezz', 'Haas F1', 96.219, 21),
            New ResultLine ('Marcus Ericsson', 'Sauber', 96.294, 19),
            New ResultLine ('Kevin Magnussen', 'Renault', 96.822, 30),
            New ResultLine ('Esteban Ocon', 'Manor F1', 97.797, 29),
            New ResultLine ('Pascal Wehrlein', 'Manor F1', 97.966, 24),
            New ResultLine ('Joylon Palmer', 'Renault', 97.992, 13),
        ];
    }

    /**
     * @return array
     */
    private function getSuzukaFP2SessionResults()
    {
        return [
            New ResultLine('Nico Rosberg', 'Mercedes', 92.250, 35),
            New ResultLine('Lewis Hamilton', 'Mercedes', 92.322, 35),
            New ResultLine('Kimi Räikkönen', 'Ferrari', 92.573, 26),
            New ResultLine('Max Verstappen', 'Red Bull Racing', 93.061, 29),
            New ResultLine('Sebastian Vettel', 'Ferrari', 93.103, 34),
            New ResultLine('Sergio Perez', 'Force India', 93.570, 37),
            New ResultLine('Nico Hülkenberg', 'Force India', 93.873, 35),
            New ResultLine('Fernando Alonso', 'McLaren', 93.985, 37),
            New ResultLine('Vatteri Bottas', 'Williams', 94.028, 33),
            New ResultLine('Carlos Sainz jr.', 'Torro Rosso', 94.086, 33),
            New ResultLine('Felipe Massa', 'Williams', 94.127, 33),
            New ResultLine('Daniel Ricciardo', 'Red Bull Racing', 94.150, 29),
            New ResultLine('Romain Grosjean', 'Haas F1', 94.241, 33),
            New ResultLine('Daniil Kvyat', 'Torro Rosso', 94.305, 27),
            New ResultLine('Kevin Magnussen', 'Renault', 94.339, 36),
            New ResultLine('Jenson Button', 'McLaren', 94.398, 29),
            New ResultLine('Esteban Guitierrez', 'Haas F1', 94.643, 11),
            New ResultLine('Joylon Palmer', 'Renault', 94.760, 40),
            New ResultLine('Felipe Nasr', 'Sauber', 94.824, 26),
            New ResultLine('Pascal Wehrlein', 'Manor F1', 95.292, 30),
            New ResultLine('Esteban Ocon', 'Manor F1', 95.400, 37),
            New ResultLine('Marcus Ericsson', 'Sauber', 96.318, 26),
        ];
    }

    /**
     * @return array
     */
    private function getSuzukaFP3SessionResults()
    {
        return [
            New ResultLine('Nico Rosberg', 'Mercedes', 92.092, 14),
            New ResultLine('Daniel Ricciardo', 'Red Bull Racing', 92.394, 10),
            New ResultLine('Sebastian Vettel', 'Ferrari', 92.731, 13),
            New ResultLine('Max Verstappen', 'Red Bull Racing', 92.784, 9),
            New ResultLine('Kimi Räikkönen', 'Ferrari', 93.011, 12),
            New ResultLine('Felipe Massa', 'Williams', 93.271, 13),
            New ResultLine('Lewis Hamilton', 'Mercedes', 93.284, 12),
            New ResultLine('Joylon palmer', 'Renault', 93.639, 13),
            New ResultLine('Kevin Magnussen', 'Renault', 93.639, 10),
            New ResultLine('Nico Hulkenberg', 'Force India', 93.646, 11),
            New ResultLine('Fernando Alonso', 'McLaren', 93.714, 12),
            New ResultLine('Esteban Guitierrez', 'Haas F1', 93.787, 16),
            New ResultLine('Valtteri Bottas', 'Williams', 93.865, 9),
            New ResultLine('Sergio Perez', 'Force India', 93.921, 11),
            New ResultLine('Daniil Kvyat', 'Torro Rosso', 94.037, 12),
            New ResultLine('Romain Grosjean', 'Haas F1', 94.272, 13),
            New ResultLine('Felipe Nasr', 'Sauber', 94.388, 12),
            New ResultLine('Marcus Ericsson', 'Sauber', 94.544, 13),
            New ResultLine('Jenson Button', 'McLaren', 94.548, 11),
            New ResultLine('Esteban Ocon', 'Manor F1', 95.230, 13),
            New ResultLine('Pascal Wehrlein', 'Manor F1', 97.256, 10),
            New ResultLine('Carlos Sainz', 'Torro Rosso', 116.323, 3),
        ];
    }

    /**
     * @return array
     */
    public function getSuzukaQualifyingResult()
    {
        return [
            new QualifyingResult('Nico Rosberg', 'Mercedes', 91.858, 90.714, 90.647, 13),
            new QualifyingResult('Lewis Hamilton', 'Mercedes', 92.218, 91.129, 90.660, 13),
            new QualifyingResult('Kimi Räikkönen', 'Ferrari', 91.674, 91.406, 90.949, 12),
            new QualifyingResult('Sebastian Vettel', 'Ferrari', 91.659, 91.227, 91.028, 12),
            new QualifyingResult('Max Verstappen', 'Red Bull Racing', 92.487, 91.489, 91.178, 14),
            new QualifyingResult('Daniel Ricciardo', 'Red Bull Racing', 92.538, 91.719, 91.240, 14),
            new QualifyingResult('Sergio Perez', 'Force India', 92.683, 92.237, 91.961, 12),
            new QualifyingResult('Romain Grosjean', 'Haas F1', 92.458, 92.176, 91.961, 17),
            new QualifyingResult('Nico Hulkenberg', 'Force India', 92.448, 92.200, 92.142, 12),
            new QualifyingResult('Esteban Guitierrez', 'Haas F1', 92.620, 92.155, 92.547, 15),
            new QualifyingResult('Valtteri Bottas', 'Williams', 92.383, 92.315, 0, 11),
            new QualifyingResult('Felipe Massa', 'Williams', 92.562, 92.380, 0, 11),
            new QualifyingResult('Daniil Kvyatt', 'Torro Rosso', 92.645, 92.623, 0, 11),
            new QualifyingResult('Carlos Sainz', 'Torro Rosso', 92.789, 92.685, 0, 12),
            new QualifyingResult('Fernando Alonso', 'Mclaren', 92.819, 92.689, 0, 12),
            new QualifyingResult('Joylon Palmer', 'Renault', 92.796, 92.807, 0, 12),
            new QualifyingResult('Jenson Button', 'McLaren', 92.851, 0, 0, 6),
            new QualifyingResult('Kevin Magnussen', 'Renault', 93.023, 0, 0, 6),
            new QualifyingResult('Marcus Ericsson', 'Sauber', 93.222, 0, 0, 7),
            new QualifyingResult('Felipe Nasr', 'Sauber', 93.332, 0, 0, 7),
            new QualifyingResult('Esteban Ocon', 'Manor F1', 93.353, 0, 0, 9),
            new QualifyingResult('Pascal Wehrlein', 'Manor F1', 93.561, 0, 0, 9),
        ];
    }

    private function getSuzukaRaceResult()
    {
        return [
            new RaceResult('Nico Rosbeg', 'Mercedes', 53, '1:26:43.333', 25),
            new RaceResult('Max Verstappen', 'Red Bull Racing', 53, '+4.978', 18),
            new RaceResult('Lewis Hamilton', 'Mercedes', 53, '+5.776', 15),
            new RaceResult('Sebastian Vettel', 'Ferrari', 53, '+20.269', 12),
            new RaceResult('Kimi Räikönnen', 'Ferrari', 53, '+28.370', 10),
            new RaceResult('Daniel Ricciardo', 'Red Bull Racing', 53, '+33.941', 8),
            new RaceResult('Sergio Perez', 'Force India', 53, '+57.495', 6),
            new RaceResult('Nico Hulkenberg', 'Force India', 53, '+59.177', 4),
            new RaceResult('Felipe Massa', 'Williams', 53, '+97.763', 2),
            new RaceResult('Valtteri Bottas', 'Williams', 53, '+98.323', 1),
            new RaceResult('Romain Grosjean', 'Haas F1', 52, '+1 lap', 0),
            new RaceResult('Joylon Palmer', 'Renault', 52, '+1 lap', 0),
            new RaceResult('Daniil Kvyatt', 'Torro Rosso', 52, '+1 lap', 0),
            new RaceResult('Kevin Magnussen', 'Renault', 52, '+1 lap', 0),
            new RaceResult('Marcus Ericsson', 'Sauber', 52, '+1 lap', 0),
            new RaceResult('Fernando Alonso', 'McLaren', 52, '+1 lap', 0),
            new RaceResult('Carlos Sainz', 'Torro Rosso', 52, '+1 lap', 0),
            new RaceResult('Jenson Button', 'McLaren', 52, '+1 lap', 0),
            new RaceResult('Felipe Nasr', 'Sauber', 52, '+1 lap', 0),
            new RaceResult('Esteban Guitierrez', 'Haas F1', 52, '+1 lap', 0),
            new RaceResult('Esteban Ocon', 'Manor F1', 52, '+1 lap', 0),
            new RaceResult('Pascal Wehrlein', 'Manor F1', 52, '+1 lap', 0),
        ];
    }

    private function getAustinFP1SessionResults()
    {
        return [
            New ResultLine('Lewis Hamilton', 'Mercedes', 00.000, 0),
            New ResultLine('Nico Rosberg', 'Mercedes', 00.000, 0),
            New ResultLine('Daniel Ricciardo', 'Red Bull Racing', 00.000, 0),
            New ResultLine('Max Verstappen', 'Red Bull Racing', 00.000, 0),
            New ResultLine('Sebastian Vettel', 'Ferrari', 00.000, 0),
            New ResultLine('Kimi Raikonnen', 'Ferrari', 00.000, 0),
            New ResultLine('Sergio Perez', 'Force India', 00.000, 0),
            New ResultLine('Nico Hulkenberg', 'Force India', 00.000, 0),
            New ResultLine('Valtteri Bottas', 'Williams', 00.000, 0),
            New ResultLine('Felipe Massa', 'Willaims', 00.000, 0),
            New ResultLine('Fernando Alonso', 'McLaren', 00.000, 0),
            New ResultLine('Jenson Button', 'McLaren', 00.000, 0),
            New ResultLine('Carlos Sainz', 'Torro Rosso', 00.000, 0),
            New ResultLine('Daniil Kvyat', 'Torro Rosso', 00.000, 0),
            New ResultLine('Romain Grosjean', 'Haas F1', 00.000, 0),
            New ResultLine('Esteban Gutierrez', 'Haas F1', 00.000, 0),
            New ResultLine('Kevin Magnussen', 'Renault', 00.000, 0),
            New ResultLine('Joylon Palmer', 'Renault', 00.000, 0),
            New ResultLine('Pascal Wehrlein', 'Manor F1', 00.000, 0),
            New ResultLine('Esteban Ocon', 'Manor F1', 00.000, 0),
            New ResultLine('Marcus Ericsson', 'Sauber', 00.000, 0),
            New ResultLine('Felipe Nasr', 'Sauber', 00.000, 0),
        ];
    }

    private function getAustinFP2SessionResults()
    {
        return [
            New ResultLine('Lewis Hamilton', 'Mercedes', 00.000, 0),
            New ResultLine('Nico Rosberg', 'Mercedes', 00.000, 0),
            New ResultLine('Daniel Ricciardo', 'Red Bull Racing', 00.000, 0),
            New ResultLine('Max Verstappen', 'Red Bull Racing', 00.000, 0),
            New ResultLine('Sebastian Vettel', 'Ferrari', 00.000, 0),
            New ResultLine('Kimi Raikonnen', 'Ferrari', 00.000, 0),
            New ResultLine('Sergio Perez', 'Force India', 00.000, 0),
            New ResultLine('Nico Hulkenberg', 'Force India', 00.000, 0),
            New ResultLine('Valtteri Bottas', 'Williams', 00.000, 0),
            New ResultLine('Felipe Massa', 'Willaims', 00.000, 0),
            New ResultLine('Fernando Alonso', 'McLaren', 00.000, 0),
            New ResultLine('Jenson Button', 'McLaren', 00.000, 0),
            New ResultLine('Carlos Sainz', 'Torro Rosso', 00.000, 0),
            New ResultLine('Daniil Kvyat', 'Torro Rosso', 00.000, 0),
            New ResultLine('Romain Grosjean', 'Haas F1', 00.000, 0),
            New ResultLine('Esteban Gutierrez', 'Haas F1', 00.000, 0),
            New ResultLine('Kevin Magnussen', 'Renault', 00.000, 0),
            New ResultLine('Joylon Palmer', 'Renault', 00.000, 0),
            New ResultLine('Pascal Wehrlein', 'Manor F1', 00.000, 0),
            New ResultLine('Esteban Ocon', 'Manor F1', 00.000, 0),
            New ResultLine('Marcus Ericsson', 'Sauber', 00.000, 0),
            New ResultLine('Felipe Nasr', 'Sauber', 00.000, 0),
        ];
    }

    private function getAustinFP3SessionResults()
    {
        return [
            New ResultLine('Lewis Hamilton', 'Mercedes', 00.000, 0),
            New ResultLine('Nico Rosberg', 'Mercedes', 00.000, 0),
            New ResultLine('Daniel Ricciardo', 'Red Bull Racing', 00.000, 0),
            New ResultLine('Max Verstappen', 'Red Bull Racing', 00.000, 0),
            New ResultLine('Sebastian Vettel', 'Ferrari', 00.000, 0),
            New ResultLine('Kimi Raikonnen', 'Ferrari', 00.000, 0),
            New ResultLine('Sergio Perez', 'Force India', 00.000, 0),
            New ResultLine('Nico Hulkenberg', 'Force India', 00.000, 0),
            New ResultLine('Valtteri Bottas', 'Williams', 00.000, 0),
            New ResultLine('Felipe Massa', 'Willaims', 00.000, 0),
            New ResultLine('Fernando Alonso', 'McLaren', 00.000, 0),
            New ResultLine('Jenson Button', 'McLaren', 00.000, 0),
            New ResultLine('Carlos Sainz', 'Torro Rosso', 00.000, 0),
            New ResultLine('Daniil Kvyat', 'Torro Rosso', 00.000, 0),
            New ResultLine('Romain Grosjean', 'Haas F1', 00.000, 0),
            New ResultLine('Esteban Gutierrez', 'Haas F1', 00.000, 0),
            New ResultLine('Kevin Magnussen', 'Renault', 00.000, 0),
            New ResultLine('Joylon Palmer', 'Renault', 00.000, 0),
            New ResultLine('Pascal Wehrlein', 'Manor F1', 00.000, 0),
            New ResultLine('Esteban Ocon', 'Manor F1', 00.000, 0),
            New ResultLine('Marcus Ericsson', 'Sauber', 00.000, 0),
            New ResultLine('Felipe Nasr', 'Sauber', 00.000, 0),
        ];
    }
}