<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competitionprices
 *
 * @ORM\Table(name="CompetitionPrices", indexes={@ORM\Index(name="itemsId", columns={"itemsId"}), @ORM\Index(name="competitionId", columns={"competitionId"})})
 * @ORM\Entity
 */
class CompetitionPrices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="itemsId", type="integer", nullable=true)
     */
    private $itemsid;

    /**
     * @var integer
     *
     * @ORM\Column(name="competitionId", type="integer", nullable=true)
     */
    private $competitionid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rank", type="boolean", nullable=true)
     */
    private $rank;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCompetPrices", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompetprices;



    /**
     * Set itemsid
     *
     * @param integer $itemsid
     *
     * @return Competitionprices
     */
    public function setItemsid($itemsid)
    {
        $this->itemsid = $itemsid;

        return $this;
    }

    /**
     * Get itemsid
     *
     * @return integer
     */
    public function getItemsid()
    {
        return $this->itemsid;
    }

    /**
     * Set competitionid
     *
     * @param integer $competitionid
     *
     * @return Competitionprices
     */
    public function setCompetitionid($competitionid)
    {
        $this->competitionid = $competitionid;

        return $this;
    }

    /**
     * Get competitionid
     *
     * @return integer
     */
    public function getCompetitionid()
    {
        return $this->competitionid;
    }

    /**
     * Set rank
     *
     * @param boolean $rank
     *
     * @return Competitionprices
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return boolean
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Get idcompetprices
     *
     * @return integer
     */
    public function getIdcompetprices()
    {
        return $this->idcompetprices;
    }
}
