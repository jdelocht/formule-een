<?php

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class DummySessionRepository implements SessionRepository
{
    /**
     * DummySessionRepository constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param $session
     * @return SessionResult[]
     */
    public function getResultsForSession($session)
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
            }
        return [];
    }

    /**
     * @return array
     */
    public function getSuzukaFP1SessionResults()
    {
        return [
            New SessionResult ('Nico Rosberg', 'Mercedes', 92.431, 24),
            New SessionResult ('Lewis Hamilton', 'Mercedes', 92.646, 19),
            New SessionResult ('Sebastian Vettel', 'Ferrari', 93.525, 21),
            New SessionResult ('Kimi Räikkönen', 'Ferrari', 93.817, 17),
            New SessionResult ('Daniel Ricciardo', 'Red Bull Racing', 94.112, 23),
            New SessionResult ('Max Verstappen', 'Red Bull Racing', 94.379, 26),
            New SessionResult ('Nico Hulkenberg', 'Force India', 94.530, 28),
            New SessionResult ('Sergio Perez', 'Force India', 94.767, 30),
            New SessionResult ('Fernando Alonso', 'McLaren', 95.003, 10),
            New SessionResult ('Valtteri Bottas', 'Williams', 95.381, 31),
            New SessionResult ('Daniil Kvyat', 'Torro Rosso', 95.446, 23),
            New SessionResult ('Carlos Sainz jr.', 'Torro Rosso', 95.672, 27),
            New SessionResult ('Jenson Button', 'McLaren', 95.677, 24),
            New SessionResult ('Romain Grosjean', 'Haas F1', 95.688, 17),
            New SessionResult ('Felipe Nasr', 'Sauber', 95.667, 15),
            New SessionResult ('Felipe Massa', 'Williams', 96.169, 23),
            New SessionResult ('Esteban Guitierezz', 'Haas F1', 96.219, 21),
            New SessionResult ('Marcus Ericsson', 'Sauber', 96.882, 19),
            New SessionResult ('Kevin Magnussen', 'Renault', 96.822, 30),
            New SessionResult ('Esteban Ocon', 'Manor F1', 97.797, 29),
            New SessionResult ('Pascal Wehrlein', 'Manor F1', 97.966, 24),
            New SessionResult ('Joylon Palmer', 'Renault', 97.992, 13),
        ];
    }

    /**
     * @return array
     */
    private function getSuzukaFP2SessionResults()
    {
        return [
            New SessionResult('Nico Rosberg', 'Mercedes', 92.250, 35),
            New SessionResult('Lewis Hamilton', 'Mercedes', 92.322, 35),
            New SessionResult('Kimi Räikkönen', 'Ferrari', 92.573, 26),
            New SessionResult('Max Verstappen', 'Red Bull Racing', 93.061, 29),
            New SessionResult('Sebastian Vettel', 'Ferrari', 93.103, 34),
            New SessionResult('Sergio Perez', 'Force India', 93.570, 37),
            New SessionResult('Nico Hülkenberg', 'Force India', 93.873, 35),
            New SessionResult('Fernando Alonso', 'McLaren', 93.985, 37),
            New SessionResult('Vatteri Bottas', 'Williams', 94.028, 33),
            New SessionResult('Carlos Sainz jr.', 'Torro Rosso', 94.086, 33),
            New SessionResult('Felipe Massa', 'Williams', 94.127, 33),
            New SessionResult('Daniel Ricciardo', 'Red Bull Racing', 94.150, 29),
            New SessionResult('Romain Grosjean', 'Haas F1', 94.241, 33),
            New SessionResult('Daniil Kvyat', 'Torro Rosso', 94.305, 27),
            New SessionResult('Kevin Magnussen', 'Renault', 94.339, 36),
            New SessionResult('Jenson Button', 'McLaren', 94.398, 29),
            New SessionResult('Esteban Guitierrez', 'Haas F1', 94.643, 11),
            New SessionResult('Joylon Palmer', 'Renault', 94.760, 40),
            New SessionResult('Felipe Nasr', 'Sauber', 94.824, 26),
            New SessionResult('Pascal Wehrlein', 'Manor F1', 95.292, 30),
            New SessionResult('Esteban Ocon', 'Manor F1', 95.400, 37),
            New SessionResult('Marcus Ericsson', 'Sauber', 96.318, 26),
        ];
    }

    /**
     * @return array
     */
    private function getSuzukaFP3SessionResults()
    {
        return [
            New Sessionresult('Nico Rosberg', 'Mercedes', 92.092, 14),
            New Sessionresult('Daniel Ricciardo', 'Red Bull Racing', 92.394, 10),
            New Sessionresult('Sebastian Vettel', 'Ferrari', 92.731, 13),
            New Sessionresult('Max Verstappen', 'Red Bull Racing', 92.784, 9),
            New Sessionresult('Kimi Räikkönen', 'Ferrari', 93.011, 12),
            New Sessionresult('Felipe Massa', 'Williams', 93.271, 13),
            New Sessionresult('Lewis Hamilton', 'Mercedes', 93.284, 12),
            New Sessionresult('Joylon palmer', 'Renault', 93.639, 13),
            New Sessionresult('Kevin Magnussen', 'Renault', 93.639, 10),
            New Sessionresult('Nico Hulkenberg', 'Force India', 93.646, 11),
            New Sessionresult('Fernando Alonso', 'McLaren', 93.714, 12),
            New Sessionresult('Esteban Guitierrez', 'Haas F1', 93.787, 16),
            New Sessionresult('Valtteri Bottas', 'Williams', 93.865, 9),
            New Sessionresult('Sergio Perez', 'Force India', 93.921, 11),
            New Sessionresult('Daniil Kvyat', 'Torro Rosso', 94.037, 12),
            New Sessionresult('Romain Grosjean', 'Haas F1', 94.272, 13),
            New Sessionresult('Felipe Nasr', 'Sauber', 94.388, 12),
            New Sessionresult('Marcus Ericsson', 'Sauber', 94.544, 13),
            New Sessionresult('Jenson Button', 'McLaren', 94.548, 11),
            New Sessionresult('Esteban Ocon', 'Manor F1', 95.230, 13),
            New Sessionresult('Pascal Wehrlein', 'Manor F1', 97.256, 10),
            New Sessionresult('Carlos Sainz', 'Torro Rosso', 116.323, 3),
        ];
    }

    private function getAustinFP1SessionResults()
    {
        return [
            New SessionResult('Nico Rosberg', 'Mercedes', 92.092, 14),
            New SessionResult('Lewis Hamilton', 'Mercedes', 93.284, 12),
        ];
    }
}