<?php

class DummyTeamRepository implements TeamRepository
{
    /**
     * DummyDriverRepository constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param $season
     * @return Team[]
     */
    public function getTeamListForSeason($season)
    {
        switch ($season) {
            case 2016:
                return $this->getTeamListFor2016();
            case 2017:
                return $this->getTeamListFor2017();
        }
        return [];
    }

    /**
     * @return array
     */
    public function getTeamListFor2016()
    {
        return [
            new Team ('Mercedes AMG Petronas Formula One', 'Mercedes', 'F1 W07 Hybrid', new TeamInfo ('Toto Wolff', new TeamHistory (1970, 0, 50, 2), 'Brackley, United Kingdom'),'Lewis Hamilton', 'Nico Rosberg'),
            new Team ('Red Bull Racing', 'TAG Heuer', 'RB12', new TeamInfo ('Christian Horner', new TeamHistory (1997, 0, 51, 4), 'Milton Keynes, United Kingdom'), 'Daniel Ricciardo', 'Max Verstappen'),
            new Team ('Scuderia Ferrari', 'Ferrari', 'SF16-H', new TeamInfo ('Maurizio Arrivabene', new TeamHistory(1950, 0, 225, 16), '	Maranello, Italy'), 'Sebastian Vettel', 'Kimi Raikonnen'),
            new Team ('Sahara Force India F1 Team', 'Mercedes', 'VJM09', new TeamInfo ('Vijay Mallya', new TeamHistory(1991, 0, 0, 0), 'Silverstone, United Kingdom'), 'Sergio Perez', 'Nico Hulkenberg'),
            new Team ('Williams Martini Racing', 'Mercedes', 'FW38', new TeamInfo('Frank Williams', new TeamHistory(1978, 0, 114, 9), 'Grove, United Kingdom'), 'Valteri Bottas', 'Felipe Massa'),
            new Team ('McLaren Honda', 'Honda', 'MP-31', new TeamInfo ('Eric Boullier', new TeamHistory(1966, 0, 182, 8), 'Woking, United Kingdom'), 'Fernando Alonso', 'Jenson Button'),
            new Team ('Scuderia Torro Rosso', 'Ferrari', 'STR11', new TeamInfo('Franz Tost', new TeamHistory(1985, 0, 1, 0), 'Faenza, Italy'), 'Daniil Kvyatt', 'Carlos Sainz'),
            new Team ('Haas F1 Team', 'Ferrari', 'VF-16', new TeamInfo('Guenther Steiner', new TeamHistory(2016, 0, 0, 0), 'Kannapolis, United States'), 'Romain Grosjean', 'Esteban Guittierez'),
            new Team ('Renault Sport Formula 1 Team', 'Renault', 'R.S.16', new TeamInfo('Frederic Vasseur', new TeamHistory(1986, 0, 20, 2), 'Enstone, United Kingdom'), 'Kevin Magnussen', 'Joylon Palmer'),
            new Team ('Manor Racing MRT', 'Mercedes', 'MRT05', new TeamInfo('Dave Ryan', new TeamHistory(2010, 0, 0, 0), 'Banbury, United Kingdom'), 'Pascal Wehrlein', 'Esteban Ocon'),
            new Team ('Sauber F1 Team', 'Ferrari', 'C35', new TeamInfo('Monisha Kaltenborn', new TeamHistory(1993, 0, 1, 0), 'Hinwil, Switzerland'), 'Marcus Ericsson', 'Felipe Nasr'),
        ];
    }

    /**
     * @return array
     */
    public function getTeamListFor2017()
    {
        return [
            new Team ('Mercedes AMG Petronas Formula One', 'Mercedes', 'F1 W07 Hybrid', new TeamInfo ('Toto Wolff', new TeamHistory (1970, 0, 50, 2), 'Brackley, United Kingdom'),'Lewis Hamilton', 'Nico Rosberg'),
            new Team ('Red Bull Racing', 'TAG Heuer', 'RB12', new TeamInfo ('Christian Horner', new TeamHistory (1997, 0, 51, 4), 'Milton Keynes, United Kingdom'), 'Daniel Ricciardo', 'Max Verstappen'),
            new Team ('Scuderia Ferrari', 'Ferrari', 'SF16-H', new TeamInfo ('Maurizio Arrivabene', new TeamHistory(1950, 0, 225, 16), '	Maranello, Italy'), 'Sebastian Vettel', 'Kimi Raikonnen'),
            new Team ('Sahara Force India F1 Team', 'Mercedes', 'VJM09', new TeamInfo ('Vijay Mallya', new TeamHistory(1991, 0, 0, 0), 'Silverstone, United Kingdom'), 'Sergio Perez', 'Nico Hulkenberg'),
            new Team ('Williams Martini Racing', 'Mercedes', 'FW38', new TeamInfo('Frank Williams', new TeamHistory(1978, 0, 114, 9), 'Grove, United Kingdom'), 'Valteri Bottas', 'Felipe Massa'),
            new Team ('McLaren Honda', 'Honda', 'MP-31', new TeamInfo ('Eric Boullier', new TeamHistory(1966, 0, 182, 8), 'Woking, United Kingdom'), 'Fernando Alonso', 'Jenson Button'),
            new Team ('Scuderia Torro Rosso', 'Ferrari', 'STR11', new TeamInfo('Franz Tost', new TeamHistory(1985, 0, 1, 0), 'Faenza, Italy'), 'Daniil Kvyatt', 'Carlos Sainz'),
            new Team ('Haas F1 Team', 'Ferrari', 'VF-16', new TeamInfo('Guenther Steiner', new TeamHistory(2016, 0, 0, 0), 'Kannapolis, United States'), 'Romain Grosjean', 'Esteban Guittierez'),
            new Team ('Renault Sport Formula 1 Team', 'Renault', 'R.S.16', new TeamInfo('Frederic Vasseur', new TeamHistory(1986, 0, 20, 2), 'Enstone, United Kingdom'), 'Kevin Magnussen', 'Joylon Palmer'),
            new Team ('Manor Racing MRT', 'Mercedes', 'MRT05', new TeamInfo('Dave Ryan', new TeamHistory(2010, 0, 0, 0), 'Banbury, United Kingdom'), 'Pascal Wehrlein', 'Esteban Ocon'),
            new Team ('Sauber F1 Team', 'Ferrari', 'C35', new TeamInfo('Monisha Kaltenborn', new TeamHistory(1993, 0, 1, 0), 'Hinwil, Switzerland'), 'Marcus Ericsson', 'Felipe Nasr'),
        ];
    }
}