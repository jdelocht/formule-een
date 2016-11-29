<?php
namespace domain\season_result;

/**
 * @since 1.0
 * @author Echodes / Joost de Locht
 */
class SeasonResultLine
{
    /** @var string */
    private $driver;
    /** @var string  */
    private $team;
    /** @var int  */
    private $australia;
    /** @var int  */
    private $bahrain;
    /** @var int  */
    private $china;
    /** @var int  */
    private $russia;
    /** @var int  */
    private $spain;
    /** @var int  */
    private $monaco;
    /** @var int  */
    private $canada;
    /** @var int  */
    private $azerbeidzjan;
    /** @var int  */
    private $austria;
    /** @var int  */
    private $greatBritain;
    /** @var int  */
    private $hungary;
    /** @var int  */
    private $germany;
    /** @var int  */
    private $belgium;
    /** @var int  */
    private $italy;
    /** @var int  */
    private $singapore;
    /** @var int  */
    private $malaysia;
    /** @var int  */
    private $japan;
    /** @var int  */
    private $unitedStates;
    /** @var int  */
    private $mexico;
    /** @var int  */
    private $brazil;
    /** @var int  */
    private $abuDhabi;

    /**
     * Season constructor.
     * @param string $driver
     * @param string $team
     * @param int $australia
     * @param int $bahrain
     * @param int $china
     * @param int $russia
     * @param int $spain
     * @param int $monaco
     * @param int $canada
     * @param int $azerbeidzjan
     * @param int $austria
     * @param int $greatBritain
     * @param int $hungary
     * @param int $germany
     * @param int $belgium
     * @param int $italy
     * @param int $singapore
     * @param int $malaysia
     * @param int $japan
     * @param int $unitedStates
     * @param int $mexico
     * @param int $brazil
     * @param int $abuDhabi
     */
    public function __construct($driver, $team, $australia, $bahrain, $china, $russia, $spain, $monaco, $canada, $azerbeidzjan, $austria, $greatBritain, $hungary, $germany, $belgium, $italy, $singapore, $malaysia, $japan, $unitedStates, $mexico, $brazil, $abuDhabi)
    {
        $this->driver = $driver;
        $this->australia = $australia;
        $this->bahrain = $bahrain;
        $this->china = $china;
        $this->russia = $russia;
        $this->spain = $spain;
        $this->monaco = $monaco;
        $this->canada = $canada;
        $this->austria = $austria;
        $this->greatBritain = $greatBritain;
        $this->hungary = $hungary;
        $this->germany = $germany;
        $this->belgium = $belgium;
        $this->italy = $italy;
        $this->singapore = $singapore;
        $this->malaysia = $malaysia;
        $this->japan = $japan;
        $this->unitedStates = $unitedStates;
        $this->mexico = $mexico;
        $this->brazil = $brazil;
        $this->abuDhabi = $abuDhabi;
        $this->azerbeidzjan = $azerbeidzjan;
        $this->team = $team;
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
    public function getAbuDhabi()
    {
        return $this->abuDhabi;
    }

    /**
     * @return int
     */
    public function getAustralia()
    {
        return $this->australia;
    }

    /**
     * @return int
     */
    public function getAustria()
    {
        return $this->austria;
    }

    /**
     * @return int
     */
    public function getAzerbeidzjan()
    {
        return $this->azerbeidzjan;
    }

    /**
     * @return int
     */
    public function getBahrain()
    {
        return $this->bahrain;
    }

    /**
     * @return int
     */
    public function getBelgium()
    {
        return $this->belgium;
    }

    /**
     * @return int
     */
    public function getBrazil()
    {
        return $this->brazil;
    }

    /**
     * @return int
     */
    public function getCanada()
    {
        return $this->canada;
    }

    /**
     * @return int
     */
    public function getChina()
    {
        return $this->china;
    }

    /**
     * @return int
     */
    public function getGermany()
    {
        return $this->germany;
    }

    /**
     * @return int
     */
    public function getGreatBritain()
    {
        return $this->greatBritain;
    }

    /**
     * @return int
     */
    public function getHungary()
    {
        return $this->hungary;
    }

    /**
     * @return int
     */
    public function getItaly()
    {
        return $this->italy;
    }

    /**
     * @return int
     */
    public function getJapan()
    {
        return $this->japan;
    }

    /**
     * @return int
     */
    public function getMalaysia()
    {
        return $this->malaysia;
    }

    /**
     * @return int
     */
    public function getMexico()
    {
        return $this->mexico;
    }

    /**
     * @return int
     */
    public function getMonaco()
    {
        return $this->monaco;
    }

    /**
     * @return int
     */
    public function getRussia()
    {
        return $this->russia;
    }

    /**
     * @return int
     */
    public function getSingapore()
    {
        return $this->singapore;
    }

    /**
     * @return int
     */
    public function getSpain()
    {
        return $this->spain;
    }

    /**
     * @return int
     */
    public function getUnitedStates()
    {
        return $this->unitedStates;
    }

    /**
     * @return int
     */
    public function calculateTotalChampionshipPointsForDriverStandings() {
        $totalPoints =  $this->getAustralia() + $this->getBahrain() + $this->getChina() + $this->getRussia() + $this->getSpain() + $this->getMonaco() + $this->getCanada() + $this->getAzerbeidzjan() + $this->getAustria() + $this->getGreatBritain() + $this->getHungary() + $this->getGermany() + $this->getBelgium() + $this->getItaly() + $this->getSingapore() + $this->getMalaysia() + $this->getJapan() + $this->getUnitedStates() + $this->getMexico() + $this->getBrazil() + $this->getAbuDhabi();

        return $totalPoints;
    }
}