<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modifier
 *
 * @ORM\Table(name="Modifier")
 * @ORM\Entity
 */
class Modifier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idModifier", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodifier;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="text", length=16777215, nullable=false)
     */
    private $desc;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32, nullable=false)
     */
    private $type;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Modifier
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
     * @return Modifier
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
     * Set type
     *
     * @param string $type
     *
     * @return Modifier
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get idmodifier
     *
     * @return integer
     */
    public function getIdmodifier()
    {
        return $this->idmodifier;
    }
}
