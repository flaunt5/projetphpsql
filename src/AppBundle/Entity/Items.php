<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 *
 * @ORM\Table(name="items", indexes={@ORM\Index(name="itemTypeId", columns={"itemTypeId"})})
 * @ORM\Entity
 */
class Items
{
    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="text", length=16777215, nullable=true)
     */
    private $desc;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean", nullable=true)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="family", type="string", length=32, nullable=true)
     */
    private $family;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemTypeId", type="integer", nullable=false)
     */
    private $itemtypeid;

    /**
     * @var integer
     *
     * @ORM\Column(name="idItems", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iditems;



    /**
     * Set desc
     *
     * @param string $desc
     *
     * @return Items
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
     * Set price
     *
     * @param string $price
     *
     * @return Items
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set level
     *
     * @param boolean $level
     *
     * @return Items
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return boolean
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set family
     *
     * @param string $family
     *
     * @return Items
     */
    public function setFamily($family)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * Get family
     *
     * @return string
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Set itemtypeid
     *
     * @param integer $itemtypeid
     *
     * @return Items
     */
    public function setItemtypeid($itemtypeid)
    {
        $this->itemtypeid = $itemtypeid;

        return $this;
    }

    /**
     * Get itemtypeid
     *
     * @return integer
     */
    public function getItemtypeid()
    {
        return $this->itemtypeid;
    }

    /**
     * Get iditems
     *
     * @return integer
     */
    public function getIditems()
    {
        return $this->iditems;
    }
}
