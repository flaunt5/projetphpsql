<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stables
 *
 * @ORM\Table(name="Stables", indexes={@ORM\Index(name="userId", columns={"userId"})})
 * @ORM\Entity
 */
class Stables
{
    /**
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="infrastructureCapacity", type="integer", nullable=false)
     */
    private $infrastructurecapacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="idStable", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstable;



    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return Stables
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
     * Set infrastructurecapacity
     *
     * @param integer $infrastructurecapacity
     *
     * @return Stables
     */
    public function setInfrastructurecapacity($infrastructurecapacity)
    {
        $this->infrastructurecapacity = $infrastructurecapacity;

        return $this;
    }

    /**
     * Get infrastructurecapacity
     *
     * @return integer
     */
    public function getInfrastructurecapacity()
    {
        return $this->infrastructurecapacity;
    }

    /**
     * Get idstable
     *
     * @return integer
     */
    public function getIdstable()
    {
        return $this->idstable;
    }
}
