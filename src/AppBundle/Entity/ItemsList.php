<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Itemslist
 *
 * @ORM\Table(name="ItemsList", indexes={@ORM\Index(name="infrastructureId", columns={"infrastructureId"}), @ORM\Index(name="itemsId", columns={"itemsId"}), @ORM\Index(name="horseId", columns={"horseId"})})
 * @ORM\Entity
 */
class ItemsList
{
    /**
     * @var integer
     *
     * @ORM\Column(name="infrastructureId", type="integer", nullable=true)
     */
    private $infrastructureid;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemsId", type="integer", nullable=false)
     */
    private $itemsid;

    /**
     * @var integer
     *
     * @ORM\Column(name="horseId", type="integer", nullable=true)
     */
    private $horseid;

    /**
     * @var integer
     *
     * @ORM\Column(name="idItemsList", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iditemslist;



    /**
     * Set infrastructureid
     *
     * @param integer $infrastructureid
     *
     * @return Itemslist
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
     * Set itemsid
     *
     * @param integer $itemsid
     *
     * @return Itemslist
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
     * Set horseid
     *
     * @param integer $horseid
     *
     * @return Itemslist
     */
    public function setHorseid($horseid)
    {
        $this->horseid = $horseid;

        return $this;
    }

    /**
     * Get horseid
     *
     * @return integer
     */
    public function getHorseid()
    {
        return $this->horseid;
    }

    /**
     * Get iditemslist
     *
     * @return integer
     */
    public function getIditemslist()
    {
        return $this->iditemslist;
    }
}
