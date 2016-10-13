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
                return $this->getFP1SessionResults();
            case 'Suzuka Free Practice 2':
                return $this->getFP2SessionResults();
            case 'Suzuka Free Practice 3':
                return $this->getFP3SessionResults();
            }
        return [];
    }

    /**
     * @return array
     */
    public function getFP1SessionResults()
    {
        return [
            New SessionResult ('Nico Rosberg', 'Mercedes', 132431, 24),
            New SessionResult ('Lewis Hamilton', 'Mercedes', 132646, 19),
            New SessionResult ('Sebastian Vettel', 'Ferrari', 133525, 21),
            New SessionResult ('Kimi Räikkönen', 'Ferrari', 133817, 17),
            New SessionResult ('Daniel Ricciardo', 'Red Bull Racing', 134112, 23),
            New SessionResult ('Max Verstappen', 'Red Bull Racing', 134379, 26),
            New SessionResult ('Nico Hulkenberg', 'Force India', 134530, 28),
            New SessionResult ('Sergio Perez', 'Force India', 134767, 30),
            New SessionResult ('Fernando Alonso', 'McLaren', 135003, 10),
            New SessionResult ('Valtteri Bottas', 'Williams', 135381, 31),
            New SessionResult ('Daniil Kvyat', 'Torro Rosso', 135446, 23),
            New SessionResult ('Carlos Sainz jr.', 'Torro Rosso', 135672, 27),
            New SessionResult ('Jenson Button', 'McLaren', 135677, 24),
            New SessionResult ('Romain Grosjean', 'Haas F1', 135688, 17),
            New SessionResult ('Felipe Nasr', 'Sauber', 135667, 15),
            New SessionResult ('Felipe Massa', 'Williams', 136169, 23),
            New SessionResult ('Esteban Guitierezz', 'Haas F1', 136219, 21),
            New SessionResult ('Marcus Ericsson', 'Sauber', 136882, 19),
            New SessionResult ('Kevin Magnussen', 'Renault', 135822, 30),
            New SessionResult ('Esteban Ocon', 'Manor F1', 137797, 29),
            New SessionResult ('Pascal Wehrlein', 'Manor F1', 137966, 24),
            New SessionResult ('Joylon Palmer', 'Renault', 137992, 13),
        ];
    }

    /**
     * @return array
     */
    private function getFP2SessionResults()
    {
        return [
            New SessionResult('Nico Rosberg', 'Mercedes', 132250, 35),
            New SessionResult('Lewis Hamilton', 'Mercedes', 132322, 35),
            New SessionResult('Kimi Räikkönen', 'Ferrari', 132573, 26),
            New SessionResult('Max Verstappen', 'Red Bull Racing', 133061, 29),
            New SessionResult('Sebastian Vettel', 'Ferrari', 133103, 34),
            New SessionResult('Sergio Perez', 'Force India', 133570, 37),
            New SessionResult('Nico Hülkenberg', 'Force India', 133873, 35),
            New SessionResult('Fernando Alonso', 'McLaren', 133985, 37),
            New SessionResult('Vatteri Bottas', 'Williams', 134028, 33),
            New SessionResult('Carlos Sainz jr.', 'Torro Rosso', 134086, 33),
            New SessionResult('Felipe Massa', 'Williams', 134127, 33),
            New SessionResult('Daniel Ricciardo', 'Red Bull Racing', 134150, 29),
            New SessionResult('Romain Grosjean', 'Haas F1', 134241, 33),
            New SessionResult('Daniil Kvyat', 'Torro Rosso', 134305, 27),
            New SessionResult('Kevin Magnussen', 'Renault', 134339, 36),
            New SessionResult('Jenson Button', 'McLaren', 134398, 29),
            New SessionResult('Esteban Guitierrez', 'Haas F1', 134643, 11),
            New SessionResult('Joylon Palmer', 'Renault', 134760, 40),
            New SessionResult('Felipe Nasr', 'Sauber', 134824, 26),
            New SessionResult('Pascal Wehrlein', 'Manor F1', 135292, 30),
            New SessionResult('Esteban Ocon', 'Manor F1', 135400, 37),
            New SessionResult('Marcus Ericsson', 'Sauber', 136318, 26),
        ];
    }

    /**
     * @return array
     */
    private function getFP3SessionResults()
    {
        return [
            New Sessionresult('Nico Rosberg', 'Mercedes', 132092, 14),
            New Sessionresult('Daniel Ricciardo', 'Red Bull Racing', 132394, 10),
            New Sessionresult('Sebastian Vettel', 'Ferrari', 132731, 13),
            New Sessionresult('Max Verstappen', 'Red Bull Racing', 132784, 9),
            New Sessionresult('Kimi Räikkönen', 'Ferrari', 133011, 12),
            New Sessionresult('Felipe Massa', 'Williams', 133271, 13),
            New Sessionresult('Lewis Hamilton', 'Mercedes', 133284, 12),
            New Sessionresult('Joylon palmer', 'Renault', 133639, 13),
            New Sessionresult('Kevin Magnussen', 'Renault', 133639, 10),
            New Sessionresult('Nico Hulkenberg', 'Force India', 133646, 11),
            New Sessionresult('Fernando Alonso', 'McLaren', 133714, 12),
            New Sessionresult('Esteban Guitierrez', 'Haas F1', 133787, 16),
            New Sessionresult('Valtteri Bottas', 'Williams', 133865, 9),
            New Sessionresult('Sergio Perez', 'Force India', 133921, 11),
            New Sessionresult('Daniil Kvyat', 'Torro Rosso', 134037, 12),
            New Sessionresult('Romain Grosjean', 'Haas F1', 134272, 13),
            New Sessionresult('Felipe Nasr', 'Sauber', 134388, 12),
            New Sessionresult('Marcus Ericsson', 'Sauber', 134544, 13),
            New Sessionresult('Jenson Button', 'McLaren', 134548, 11),
            New Sessionresult('Esteban Ocon', 'Manor F1', 135230, 13),
            New Sessionresult('Pascal Wehrlein', 'Manor F1', 137256, 10),
            New Sessionresult('Carlos Sainz', 'Torro Rosso', 156323, 3),
        ];
    }
}