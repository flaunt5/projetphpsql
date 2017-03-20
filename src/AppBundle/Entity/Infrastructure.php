<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infrastructure
 *
 * @ORM\Table(name="Infrastructure", indexes={@ORM\Index(name="typeIdInfra", columns={"typeIdInfra"}), @ORM\Index(name="InfraFamilyId", columns={"InfraFamilyId"})})
 * @ORM\Entity
 */
class Infrastructure
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idInfrastructure", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinfrastructure;

    /**
     * @var integer
     *
     * @ORM\Column(name="typeIdInfra", type="integer", nullable=false)
     */
    private $typeidinfra;

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean", nullable=false)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=16777215, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="InfraFamilyId", type="integer", nullable=true)
     */
    private $infrafamilyid;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="ressourceConsumption", type="text", length=16777215, nullable=true)
     */
    private $ressourceconsumption;



    /**
     * Set typeidinfra
     *
     * @param integer $typeidinfra
     *
     * @return Infrastructure
     */
    public function setTypeidinfra($typeidinfra)
    {
        $this->typeidinfra = $typeidinfra;

        return $this;
    }

    /**
     * Get typeidinfra
     *
     * @return integer
     */
    public function getTypeidinfra()
    {
        return $this->typeidinfra;
    }

    /**
     * Set level
     *
     * @param boolean $level
     *
     * @return Infrastructure
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
     * Set desc
     *
     * @param string $desc
     *
     * @return Infrastructure
     */
    public function setDesc($description)
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
     * Set infrafamilyid
     *
     * @param integer $infrafamilyid
     *
     * @return Infrastructure
     */
    public function setInfrafamilyid($infrafamilyid)
    {
        $this->infrafamilyid = $infrafamilyid;

        return $this;
    }

    /**
     * Get infrafamilyid
     *
     * @return integer
     */
    public function getInfrafamilyid()
    {
        return $this->infrafamilyid;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Infrastructure
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
     * Set ressourceconsumption
     *
     * @param string $ressourceconsumption
     *
     * @return Infrastructure
     */
    public function setRessourceconsumption($ressourceconsumption)
    {
        $this->ressourceconsumption = $ressourceconsumption;

        return $this;
    }

    /**
     * Get ressourceconsumption
     *
     * @return string
     */
    public function getRessourceconsumption()
    {
        return $this->ressourceconsumption;
    }

    /**
     * Get idinfrastructure
     *
     * @return integer
     */
    public function getIdinfrastructure()
    {
        return $this->idinfrastructure;
    }
}
