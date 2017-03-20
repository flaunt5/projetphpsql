<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infrastructuretype
 *
 * @ORM\Table(name="InfrastructureType")
 * @ORM\Entity
 */
class InfrastructureType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idInfraType", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinfratype;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemCapacity", type="integer", nullable=true)
     */
    private $itemcapacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="horseCapacity", type="integer", nullable=true)
     */
    private $horsecapacity;

    /**
     * @var string
     *
     * @ORM\Column(name="typeName", type="string", length=32, nullable=false)
     */
    private $typename;

    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="text", length=16777215, nullable=false)
     */
    private $desc;



    /**
     * Set itemcapacity
     *
     * @param integer $itemcapacity
     *
     * @return Infrastructuretype
     */
    public function setItemcapacity($itemcapacity)
    {
        $this->itemcapacity = $itemcapacity;

        return $this;
    }

    /**
     * Get itemcapacity
     *
     * @return integer
     */
    public function getItemcapacity()
    {
        return $this->itemcapacity;
    }

    /**
     * Set horsecapacity
     *
     * @param integer $horsecapacity
     *
     * @return Infrastructuretype
     */
    public function setHorsecapacity($horsecapacity)
    {
        $this->horsecapacity = $horsecapacity;

        return $this;
    }

    /**
     * Get horsecapacity
     *
     * @return integer
     */
    public function getHorsecapacity()
    {
        return $this->horsecapacity;
    }

    /**
     * Set typename
     *
     * @param string $typename
     *
     * @return Infrastructuretype
     */
    public function setTypename($typename)
    {
        $this->typename = $typename;

        return $this;
    }

    /**
     * Get typename
     *
     * @return string
     */
    public function getTypename()
    {
        return $this->typename;
    }

    /**
     * Set desc
     *
     * @param string $desc
     *
     * @return Infrastructuretype
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
     * Get idinfratype
     *
     * @return integer
     */
    public function getIdinfratype()
    {
        return $this->idinfratype;
    }
}
