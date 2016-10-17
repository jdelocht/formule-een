<?php

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class DummyQualifyingRepository implements QualifyingRepository
{
    /**
     * DummySessionRepository constructor.
     */
    public function __construct()
    {
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
}

