<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lastachievements
 *
 * @ORM\Table(name="LastAchievements", indexes={@ORM\Index(name="userId", columns={"userId"})})
 * @ORM\Entity
 */
class Lastachievements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="text", length=16777215, nullable=false)
     */
    private $desc;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="value", type="integer", nullable=true)
     */
    private $value;

    /**
     * @var integer
     *
     * @ORM\Column(name="idAchievement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idachievement;



    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return Lastachievements
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
     * Set desc
     *
     * @param string $desc
     *
     * @return Lastachievements
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get desc
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Lastachievements
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
     * Set value
     *
     * @param integer $value
     *
     * @return Lastachievements
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Get idachievement
     *
     * @return integer
     */
    public function getIdachievement()
    {
        return $this->idachievement;
    }
}
