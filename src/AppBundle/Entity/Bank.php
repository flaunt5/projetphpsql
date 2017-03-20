<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bank
 *
 * @ORM\Table(name="Bank")
 * @ORM\Entity
 */
class Bank
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idBank", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbank;

    /**
     * @var integer
     *
     * @ORM\Column(name="moneyInt", type="integer", nullable=false)
     */
    private $moneyint;

    /**
     * @var integer
     *
     * @ORM\Column(name="moneyCents", type="integer", nullable=false)
     */
    private $moneycents;




    /**
     * Set moneyint
     *
     * @param integer $moneyint
     *
     * @return Bank
     */
    public function setMoneyint($moneyint)
    {
        $this->moneyint = $moneyint;

        return $this;
    }

    /**
     * Get moneyint
     *
     * @return integer
     */
    public function getMoneyint()
    {
        return $this->moneyint;
    }

    /**
     * Set moneycents
     *
     * @param integer $moneycents
     *
     * @return Bank
     */
    public function setMoneycents($moneycents)
    {
        $this->moneycents = $moneycents;

        return $this;
    }

    /**
     * Get moneycents
     *
     * @return integer
     */
    public function getMoneycents()
    {
        return $this->moneycents;
    }

    /**
     * Get idbank
     *
     * @return integer
     */
    public function getIdbank()
    {
        return $this->idbank;
    }
}
