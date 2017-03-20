<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horsespecies
 *
 * @ORM\Table(name="HorseSpecies")
 * @ORM\Entity
 */
class HorseSpecies
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="text", length=16777215, nullable=false)
     */
    private $desc;

    /**
     * @var integer
     *
     * @ORM\Column(name="idHorseSpecies", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhorsespecies;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Horsespecies
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
     * @return Horsespecies
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
     * Get idhorsespecies
     *
     * @return integer
     */
    public function getIdhorsespecies()
    {
        return $this->idhorsespecies;
    }
}
