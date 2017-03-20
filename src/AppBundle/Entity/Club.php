<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="Club", indexes={@ORM\Index(name="ownerId", columns={"ownerId"}), @ORM\Index(name="infrastructureListId", columns={"infrastructureListId"})})
 * @ORM\Entity
 */
class Club
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idClub", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclub;

    /**
     * @var boolean
     *
     * @ORM\Column(name="capacity", type="boolean", nullable=false)
     */
    private $capacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="ownerId", type="integer", nullable=false)
     */
    private $ownerid;

    /**
     * @var integer
     *
     * @ORM\Column(name="infrastructureListId", type="integer", nullable=false)
     */
    private $infrastructurelistid;

    /**
     * @var string
     *
     * @ORM\Column(name="signupPrice", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $signupprice;



    /**
     * Set capacity
     *
     * @param boolean $capacity
     *
     * @return Club
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return boolean
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set ownerid
     *
     * @param integer $ownerid
     *
     * @return Club
     */
    public function setOwnerid($ownerid)
    {
        $this->ownerid = $ownerid;

        return $this;
    }

    /**
     * Get ownerid
     *
     * @return integer
     */
    public function getOwnerid()
    {
        return $this->ownerid;
    }

    /**
     * Set infrastructurelistid
     *
     * @param integer $infrastructurelistid
     *
     * @return Club
     */
    public function setInfrastructurelistid($infrastructurelistid)
    {
        $this->infrastructurelistid = $infrastructurelistid;

        return $this;
    }

    /**
     * Get infrastructurelistid
     *
     * @return integer
     */
    public function getInfrastructurelistid()
    {
        return $this->infrastructurelistid;
    }

    /**
     * Set signupprice
     *
     * @param string $signupprice
     *
     * @return Club
     */
    public function setSignupprice($signupprice)
    {
        $this->signupprice = $signupprice;

        return $this;
    }

    /**
     * Get signupprice
     *
     * @return string
     */
    public function getSignupprice()
    {
        return $this->signupprice;
    }

    /**
     * Get idclub
     *
     * @return integer
     */
    public function getIdclub()
    {
        return $this->idclub;
    }
}
