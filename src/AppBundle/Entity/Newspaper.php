<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newspaper
 *
 * @ORM\Table(name="Newspaper", indexes={@ORM\Index(name="userId", columns={"userId"}), @ORM\Index(name="achievementId", columns={"achievementId"}), @ORM\Index(name="weatherId", columns={"weatherId"})})
 * @ORM\Entity
 */
class Newspaper
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idNewsPaper", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnewspaper;

    /**
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="achievementId", type="integer", nullable=false)
     */
    private $achievementid;

    /**
     * @var integer
     *
     * @ORM\Column(name="weatherId", type="integer", nullable=false)
     */
    private $weatherid;



    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return Newspaper
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set achievementid
     *
     * @param integer $achievementid
     *
     * @return Newspaper
     */
    public function setAchievementid($achievementid)
    {
        $this->achievementid = $achievementid;

        return $this;
    }

    /**
     * Get achievementid
     *
     * @return integer
     */
    public function getAchievementid()
    {
        return $this->achievementid;
    }

    /**
     * Set weatherid
     *
     * @param integer $weatherid
     *
     * @return Newspaper
     */
    public function setWeatherid($weatherid)
    {
        $this->weatherid = $weatherid;

        return $this;
    }

    /**
     * Get weatherid
     *
     * @return integer
     */
    public function getWeatherid()
    {
        return $this->weatherid;
    }

    /**
     * Get idnewspaper
     *
     * @return integer
     */
    public function getIdnewspaper()
    {
        return $this->idnewspaper;
    }
}
