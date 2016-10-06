<?php
/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class DummyDriverRepository implements DriverRepository
{
    /**
     * DummyDriverRepository constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param int $season
     * @return Driver[]
     */
    public function getDriverListForSeason($season)
    {
        switch ($season) {
            case 2016:
                return $this->getDriverListFor2016();
            case 2017:
                return $this->getDriverListFor2017();
        }
        return [];
    }

    /**
     * @return array
     */
    public function getDriverListFor2016()
    {
        return [
            new Driver (44, 'Lewis Hamilton', 'GBR', 'Mercedes'),
            new Driver (6, 'Nico Rosberg', 'GER', 'Mercedes'),
            new Driver (3, 'Daniel Ricciardo', 'AUS', 'Red Bull Racing'),
            new Driver (33, 'Max Verstappen', 'NLD', 'Red Bull Racing'),
            new Driver (5, 'Sebastian Vettel', 'GER', 'Ferrari'),
            new Driver (7, 'Kimi Raikonnen', 'FIN', 'Ferrari'),
            new Driver (11, 'Sergio Perez', 'MEX', 'Force India'),
            new Driver (27, 'Nico Hulkenberg', 'GER', 'Force India'),
            new Driver (77, 'Valtteri Bottas', 'FIN', 'Williams'),
            new Driver (19, 'Felipe Massa', 'BRA', 'Williams'),
            new Driver (14, 'Fernando Alonso', 'ESP', 'McLaren'),
            new Driver (22, 'Jenson Button', 'GBR', 'McLaren'),
            new Driver (55, 'Carlos Sainz', 'ESP', 'Torro Rosso'),
            new Driver (26, 'Daniil Kvyat', 'RUS', 'Torro Rosso'),
            new Driver (8, 'Romain Grosjean', 'FRA', 'Haas'),
            new Driver (21, 'Esteban Gutierez', 'MEX', 'Haas'),
            new Driver (20, 'Kevin Magnussen', 'DEN', 'Renault'),
            new Driver (30, 'Joylon Palmer', 'GBR', 'Renault'),
            new Driver (94, 'Pascal Wehrlein', 'GER', 'Manor Racing Team'),
            new Driver (31, 'Esteban Ocon', 'FRA', 'Manor Racing Team'),
            new Driver (9, 'Marcus Ericsson', 'SWE', 'Sauber'),
            new Driver (12, 'Felipe Nasr', 'BRA', 'Sauber'),
        ];
    }

    /**
     * @return array
     */
    public function getDriverListFor2017()
    {
        return [
            new Driver (44, 'Lewis Hamilton', 'GBR', 'Mercedes'),
            new Driver (6, 'Nico Rosberg', 'GER', 'Mercedes'),
            new Driver (3, 'Daniel Ricciardo', 'AUS', 'Red Bull Racing'),
            new Driver (33, 'Max Verstappen', 'NLD', 'Red Bull Racing'),
            new Driver (5, 'Sebastian Vettel', 'GER', 'Ferrari'),
            new Driver (7, 'Kimi Raikonnen', 'FIN', 'Ferrari'),
            new Driver (11, 'Sergio Perez', 'MEX', 'Force India', false),
            new Driver (27, 'Nico Hulkenberg', 'GER', 'Force India'),
            new Driver (77, 'Valtteri Bottas', 'FIN', 'Williams'),
            Driver::unknownDriver('Williams'),
            new Driver (14, 'Fernando Alonso', 'ESP', 'McLaren'),
            new Driver (47, 'Stoffel Vandoorne', 'BEL', 'McLaren'),
            new Driver (55, 'Carlos Sainz', 'ESP', 'Torro Rosso'),
            new Driver (26, 'Daniil Kvyat', 'RUS', 'Torro Rosso', false),
            new Driver (8, 'Romain Grosjean', 'FRA', 'Haas', false),
            new Driver (21, 'Esteban Gutierez', 'MEX', 'Haas', false),
            new Driver (20, 'Kevin Magnussen', 'DEN', 'Renault', false),
            new Driver (30, 'Joylon Palmer', 'GBR', 'Renault', false),
            new Driver (94, 'Pascal Wehrlein', 'GER', 'Manor Racing Team', false),
            new Driver (31, 'Esteban Ocon', 'FRA', 'Manor Racing Team', false),
            new Driver (9, 'Marcus Ericsson', 'SWE', 'Sauber', false),
            new Driver (12, 'Felipe Nasr', 'BRA', 'Sauber', false),
        ];
    }
}