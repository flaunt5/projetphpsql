<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infrastructurelist
 *
 * @ORM\Table(name="infrastructurelist", indexes={@ORM\Index(name="clubId", columns={"clubId"}), @ORM\Index(name="stableId", columns={"stableId"}), @ORM\Index(name="infrastructureId", columns={"infrastructureId"})})
 * @ORM\Entity
 */
class Infrastructurelist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="clubId", type="integer", nullable=true)
     */
    private $clubid;

    /**
     * @var integer
     *
     * @ORM\Column(name="stableId", type="integer", nullable=true)
     */
    private $stableid;

    /**
     * @var integer
     *
     * @ORM\Column(name="infrastructureId", type="integer", nullable=false)
     */
    private $infrastructureid;

    /**
     * @var integer
     *
     * @ORM\Column(name="idInfraList", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinfralist;



    /**
     * Set clubid
     *
     * @param integer $clubid
     *
     * @return Infrastructurelist
     */
    public function setClubid($clubid)
    {
        $this->clubid = $clubid;

        return $this;
    }

    /**
     * Get clubid
     *
     * @return integer
     */
    public function getClubid()
    {
        return $this->clubid;
    }

    /**
     * Set stableid
     *
     * @param integer $stableid
     *
     * @return Infrastructurelist
     */
    public function setStableid($stableid)
    {
        $this->stableid = $stableid;

        return $this;
    }

    /**
     * Get stableid
     *
     * @return integer
     */
    public function getStableid()
    {
        return $this->stableid;
    }

    /**
     * Set infrastructureid
     *
     * @param integer $infrastructureid
     *
     * @return Infrastructurelist
     */
    public function setInfrastructureid($infrastructureid)
    {
        $this->infrastructureid = $infrastructureid;

        return $this;
    }

    /**
     * Get infrastructureid
     *
     * @return integer
     */
    public function getInfrastructureid()
    {
        return $this->infrastructureid;
    }

    /**
     * Get idinfralist
     *
     * @return integer
     */
    public function getIdinfralist()
    {
        return $this->idinfralist;
    }
}
