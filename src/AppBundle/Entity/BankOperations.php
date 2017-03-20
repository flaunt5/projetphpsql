<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bankoperations
 *
 * @ORM\Table(name="BankOperations", indexes={@ORM\Index(name="bankId", columns={"bankId"})})
 * @ORM\Entity
 */
class Bankoperations
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="operationDatetime", type="datetime", nullable=false)
     */
    private $operationdatetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount;

    /**
     * @var integer
     *
     * @ORM\Column(name="bankId", type="integer", nullable=false)
     */
    private $bankid;

    /**
     * @var integer
     *
     * @ORM\Column(name="idBankOp", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbankop;



    /**
     * Set operationdatetime
     *
     * @param \DateTime $operationdatetime
     *
     * @return Bankoperations
     */
    public function setOperationdatetime($operationdatetime)
    {
        $this->operationdatetime = $operationdatetime;

        return $this;
    }

    /**
     * Get operationdatetime
     *
     * @return \DateTime
     */
    public function getOperationdatetime()
    {
        return $this->operationdatetime;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return Bankoperations
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set bankid
     *
     * @param integer $bankid
     *
     * @return Bankoperations
     */
    public function setBankid($bankid)
    {
        $this->bankid = $bankid;

        return $this;
    }

    /**
     * Get bankid
     *
     * @return integer
     */
    public function getBankid()
    {
        return $this->bankid;
    }

    /**
     * Get idbankop
     *
     * @return integer
     */
    public function getIdbankop()
    {
        return $this->idbankop;
    }
}
