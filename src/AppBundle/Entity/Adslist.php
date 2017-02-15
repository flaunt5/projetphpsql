<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adslist
 *
 * @ORM\Table(name="adslist", indexes={@ORM\Index(name="adsId", columns={"adsId"}), @ORM\Index(name="newsPaperId", columns={"newsPaperId"})})
 * @ORM\Entity
 */
class Adslist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="adsId", type="integer", nullable=false)
     */
    private $adsid;

    /**
     * @var integer
     *
     * @ORM\Column(name="newsPaperId", type="integer", nullable=false)
     */
    private $newspaperid;

    /**
     * @var integer
     *
     * @ORM\Column(name="idAdsList", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadslist;



    /**
     * Set adsid
     *
     * @param integer $adsid
     *
     * @return Adslist
     */
    public function setAdsid($adsid)
    {
        $this->adsid = $adsid;

        return $this;
    }

    /**
     * Get adsid
     *
     * @return integer
     */
    public function getAdsid()
    {
        return $this->adsid;
    }

    /**
     * Set newspaperid
     *
     * @param integer $newspaperid
     *
     * @return Adslist
     */
    public function setNewspaperid($newspaperid)
    {
        $this->newspaperid = $newspaperid;

        return $this;
    }

    /**
     * Get newspaperid
     *
     * @return integer
     */
    public function getNewspaperid()
    {
        return $this->newspaperid;
    }

    /**
     * Get idadslist
     *
     * @return integer
     */
    public function getIdadslist()
    {
        return $this->idadslist;
    }
}
