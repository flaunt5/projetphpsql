<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competition
 *
 * @ORM\Table(name="Competition", indexes={@ORM\Index(name="clubId", columns={"clubId"}), @ORM\Index(name="infrastructureId", columns={"infrastructureId"})})
 * @ORM\Entity
 */
class Competition
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="date", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="date", nullable=false)
     */
    private $enddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="clubId", type="integer", nullable=false)
     */
    private $clubid;

    /**
     * @var string
     *
     * @ORM\Column(name="signupPrice", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $signupprice;

    /**
     * @var integer
     *
     * @ORM\Column(name="infrastructureId", type="integer", nullable=false)
     */
    private $infrastructureid;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCompetition", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcompetition;



    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Competition
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     *
     * @return Competition
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set clubid
     *
     * @param integer $clubid
     *
     * @return Competition
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
     * Set signupprice
     *
     * @param string $signupprice
     *
     * @return Competition
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
     * Set infrastructureid
     *
     * @param integer $infrastructureid
     *
     * @return Competition
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
     * Get idcompetition
     *
     * @return integer
     */
    public function getIdcompetition()
    {
        return $this->idcompetition;
    }
}
