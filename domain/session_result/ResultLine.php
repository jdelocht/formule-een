<?php
namespace domain\session_result;

class ResultLine
{
    /**
     * @var string
     */
    private $driver;
    /**
     * @var string
     */
    private $team;
    /**
     * @var int
     */
    private $lapTime;
    /**
     * @var int
     */
    private $numberOfLaps;

    /**
     * SessionResult constructor.
     * @param string $driver
     * @param string $team
     * @param int $lapTime
     * @param int $numberOfLaps
     */
    public function __construct($driver, $team, $lapTime, $numberOfLaps)
    {
        $this->driver = $driver;
        $this->team = $team;
        $this->lapTime = $lapTime;
        $this->numberOfLaps = $numberOfLaps;
    }

    /**
     * @return string
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @return string
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @return int
     */
    public function getLapTime()
    {
        return $this->lapTime;
    }

    /**
     * @return int
     */
    public function getNumberOfLaps()
    {
        return $this->numberOfLaps;
    }

    /**
     * @return string
     */
    public function getLapTimeAsFormattedString()
    {
        if ($this->lapTime == 0) {
            return ' ';
        }

        $explodedLapTime = explode('.', $this->lapTime);

        $minutes = floor ($explodedLapTime[0] / 60);
        $seconds = floor ($explodedLapTime[0] % 60);
        $milliseconds = $explodedLapTime[1];

        return $minutes . ':' . str_pad($seconds, 2, '0', STR_PAD_LEFT) . '.' . str_pad($milliseconds, 3, '0', STR_PAD_RIGHT);
    }

    /**
     * @param $lapTime
     * @param $slowerLapTime
     * @return mixed
     */
    public function calculateLapTimeDifferenceBetween($lapTime, $slowerLapTime)
    {
        $difference = floor(($slowerLapTime - $lapTime) * 1000);

        $differenceInSeconds = floor($difference / 1000);
        $differenceInMilliseconds = floor($difference % 1000);

        return '+'  . $differenceInSeconds . '.' . str_pad($differenceInMilliseconds, 3, '0', STR_PAD_LEFT);
    }

    /**
     * @param $lapTime
     * @return mixed
     */
    public function getDifferenceBetween($lapTime)
    {
        $lapTimeDifferenceBetween = $this->calculateLapTimeDifferenceBetween($lapTime, $this->getLapTime());
        return $lapTimeDifferenceBetween;
    }
}
