<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infrastructurefamily
 *
 * @ORM\Table(name="InfrastructureFamily")
 * @ORM\Entity
 */
class InfrastructureFamily
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idInfraFamily", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinfrafamily;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=16777215, nullable=true)
     */
    private $description;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Infrastructurefamily
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
     * @return Infrastructurefamily
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get desc
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get idinfrafamily
     *
     * @return integer
     */
    public function getIdinfrafamily()
    {
        return $this->idinfrafamily;
    }
}
