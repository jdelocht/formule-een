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
            new QualifyingResult('Nico Rosberg', 'Mercedes', 131858, 130714, 130647, 13),
            new QualifyingResult('Lewis Hamilton', 'Mercedes', 132218, 131129, 130660, 13),
            new QualifyingResult('Kimi Räikkönen', 'Ferrari', 131674, 131406, 130949, 12),
            new QualifyingResult('Sebastian Vettel', 'Ferrari', 131659, 131227, 131028, 12),
            new QualifyingResult('Max Verstappen', 'Red Bull Racing', 132487, 131489, 131178, 14),
            new QualifyingResult('Daniel Ricciardo', 'Red Bull Racing', 132538, 131719, 131240, 14),
            new QualifyingResult('Sergio Perez', 'Force India', 132683, 132237, 131961, 12),
            new QualifyingResult('Romain Grosjean', 'Haas F1', 132458, 132176, 131961, 17),
            new QualifyingResult('Nico Hulkenberg', 'Force India', 132448, 132200, 132142, 12),
            new QualifyingResult('Esteban Guitierrez', 'Haas F1', 132620, 132155, 132547, 15),
            new QualifyingResult('Valtteri Bottas', 'Williams', 132383, 132315, 0, 11),
            new QualifyingResult('Felipe Massa', 'Williams', 132562, 132380, 0, 11),
            new QualifyingResult('Daniil Kvyatt', 'Torro Rosso', 132645, 132623, 0, 11),
            new QualifyingResult('Carlos Sainz', 'Torro Rosso', 132789, 132685, 0, 12),
            new QualifyingResult('Fernando Alonso', 'Mclaren', 132819, 132689, 0, 12),
            new QualifyingResult('Joylon Palmer', 'Renault', 132796, 132807, 0, 12),
            new QualifyingResult('Jenson Button', 'McLaren', 132851, 0, 0, 6),
            new QualifyingResult('Kevin Magnussen', 'Renault', 133023, 0, 0, 6),
            new QualifyingResult('Marcus Ericsson', 'Sauber', 133222, 0, 0, 7),
            new QualifyingResult('Felipe Nasr', 'Sauber', 133332, 0, 0, 7),
            new QualifyingResult('Esteban Ocon', 'Manor F1', 133353, 0, 0, 9),
            new QualifyingResult('Pascal Wehrlein', 'Manor F1', 133561, 0, 0, 9),
        ];
    }
}

