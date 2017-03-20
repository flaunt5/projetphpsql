<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Itemtype
 *
 * @ORM\Table(name="itemtype")
 * @ORM\Entity
 */
class Itemtype
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idItemType", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iditemtype;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="text", length=16777215, nullable=true)
     */
    private $desc;





    /**
     * Set name
     *
     * @param string $name
     *
     * @return Itemtype
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set desc
     *
     * @param string $desc
     *
     * @return Itemtype
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
     * Get iditemtype
     *
     * @return integer
     */
    public function getIditemtype()
    {
        return $this->iditemtype;
    }
}
