<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horse
 *
 * @ORM\Table(name="Horse", indexes={@ORM\Index(name="speciesId", columns={"speciesId"}), @ORM\Index(name="stablesId", columns={"stablesId"})})
 * @ORM\Entity
 */
class Horse
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="speciesId", type="integer", nullable=false)
     */
    private $speciesid;

    /**
     * @var integer
     *
     * @ORM\Column(name="resistance", type="integer", nullable=true)
     */
    private $resistance;

    /**
     * @var integer
     *
     * @ORM\Column(name="stablesId", type="integer", nullable=false)
     */
    private $stablesid;

    /**
     * @var integer
     *
     * @ORM\Column(name="endurance", type="integer", nullable=false)
     */
    private $endurance;

    /**
     * @var integer
     *
     * @ORM\Column(name="jumpAbility", type="integer", nullable=false)
     */
    private $jumpability;

    /**
     * @var integer
     *
     * @ORM\Column(name="speed", type="integer", nullable=false)
     */
    private $speed;

    /**
     * @var integer
     *
     * @ORM\Column(name="intelligence", type="integer", nullable=false)
     */
    private $intelligence;

    /**
     * @var integer
     *
     * @ORM\Column(name="sociability", type="integer", nullable=false)
     */
    private $sociability;

    /**
     * @var integer
     *
     * @ORM\Column(name="temper", type="integer", nullable=false)
     */
    private $temper;

    /**
     * @var integer
     *
     * @ORM\Column(name="health", type="integer", nullable=false)
     */
    private $health;

    /**
     * @var integer
     *
     * @ORM\Column(name="moral", type="integer", nullable=false)
     */
    private $moral;

    /**
     * @var integer
     *
     * @ORM\Column(name="stress", type="integer", nullable=false)
     */
    private $stress;

    /**
     * @var integer
     *
     * @ORM\Column(name="fatigue", type="integer", nullable=false)
     */
    private $fatigue;

    /**
     * @var integer
     *
     * @ORM\Column(name="hunger", type="integer", nullable=false)
     */
    private $hunger;

    /**
     * @var integer
     *
     * @ORM\Column(name="cleanliness", type="integer", nullable=false)
     */
    private $cleanliness;

    /**
     * @var integer
     *
     * @ORM\Column(name="experience", type="integer", nullable=true)
     */
    private $experience;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="smallint", nullable=false)
     */
    private $level = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer", nullable=true)
     */
    private $state;

    /**
     * @var integer
     *
     * @ORM\Column(name="idHorse", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhorse;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Horse
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set speciesid
     *
     * @param integer $speciesid
     *
     * @return Horse
     */
    public function setSpeciesid($speciesid)
    {
        $this->speciesid = $speciesid;

        return $this;
    }

    /**
     * Get speciesid
     *
     * @return integer
     */
    public function getSpeciesid()
    {
        return $this->speciesid;
    }

    /**
     * Set resistance
     *
     * @param integer $resistance
     *
     * @return Horse
     */
    public function setResistance($resistance)
    {
        $this->resistance = $resistance;

        return $this;
    }

    /**
     * Get resistance
     *
     * @return integer
     */
    public function getResistance()
    {
        return $this->resistance;
    }

    /**
     * Set stablesid
     *
     * @param integer $stablesid
     *
     * @return Horse
     */
    public function setStablesid($stablesid)
    {
        $this->stablesid = $stablesid;

        return $this;
    }

    /**
     * Get stablesid
     *
     * @return integer
     */
    public function getStablesid()
    {
        return $this->stablesid;
    }

    /**
     * Set endurance
     *
     * @param integer $endurance
     *
     * @return Horse
     */
    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;

        return $this;
    }

    /**
     * Get endurance
     *
     * @return integer
     */
    public function getEndurance()
    {
        return $this->endurance;
    }

    /**
     * Set jumpability
     *
     * @param integer $jumpability
     *
     * @return Horse
     */
    public function setJumpability($jumpability)
    {
        $this->jumpability = $jumpability;

        return $this;
    }

    /**
     * Get jumpability
     *
     * @return integer
     */
    public function getJumpability()
    {
        return $this->jumpability;
    }

    /**
     * Set speed
     *
     * @param integer $speed
     *
     * @return Horse
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed
     *
     * @return integer
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set intelligence
     *
     * @param integer $intelligence
     *
     * @return Horse
     */
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    /**
     * Get intelligence
     *
     * @return integer
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * Set sociability
     *
     * @param integer $sociability
     *
     * @return Horse
     */
    public function setSociability($sociability)
    {
        $this->sociability = $sociability;

        return $this;
    }

    /**
     * Get sociability
     *
     * @return integer
     */
    public function getSociability()
    {
        return $this->sociability;
    }

    /**
     * Set temper
     *
     * @param integer $temper
     *
     * @return Horse
     */
    public function setTemper($temper)
    {
        $this->temper = $temper;

        return $this;
    }

    /**
     * Get temper
     *
     * @return integer
     */
    public function getTemper()
    {
        return $this->temper;
    }

    /**
     * Set health
     *
     * @param integer $health
     *
     * @return Horse
     */
    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }

    /**
     * Get health
     *
     * @return integer
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set moral
     *
     * @param integer $moral
     *
     * @return Horse
     */
    public function setMoral($moral)
    {
        $this->moral = $moral;

        return $this;
    }

    /**
     * Get moral
     *
     * @return integer
     */
    public function getMoral()
    {
        return $this->moral;
    }

    /**
     * Set stress
     *
     * @param integer $stress
     *
     * @return Horse
     */
    public function setStress($stress)
    {
        $this->stress = $stress;

        return $this;
    }

    /**
     * Get stress
     *
     * @return integer
     */
    public function getStress()
    {
        return $this->stress;
    }

    /**
     * Set fatigue
     *
     * @param integer $fatigue
     *
     * @return Horse
     */
    public function setFatigue($fatigue)
    {
        $this->fatigue = $fatigue;

        return $this;
    }

    /**
     * Get fatigue
     *
     * @return integer
     */
    public function getFatigue()
    {
        return $this->fatigue;
    }

    /**
     * Set hunger
     *
     * @param integer $hunger
     *
     * @return Horse
     */
    public function setHunger($hunger)
    {
        $this->hunger = $hunger;

        return $this;
    }

    /**
     * Get hunger
     *
     * @return integer
     */
    public function getHunger()
    {
        return $this->hunger;
    }

    /**
     * Set cleanliness
     *
     * @param integer $cleanliness
     *
     * @return Horse
     */
    public function setCleanliness($cleanliness)
    {
        $this->cleanliness = $cleanliness;

        return $this;
    }

    /**
     * Get cleanliness
     *
     * @return integer
     */
    public function getCleanliness()
    {
        return $this->cleanliness;
    }

    /**
     * Set experience
     *
     * @param integer $experience
     *
     * @return Horse
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return integer
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Horse
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return Horse
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Get idhorse
     *
     * @return integer
     */
    public function getIdhorse()
    {
        return $this->idhorse;
    }
}
