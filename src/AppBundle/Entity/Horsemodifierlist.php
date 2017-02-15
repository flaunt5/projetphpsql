<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horsemodifierlist
 *
 * @ORM\Table(name="horsemodifierlist", indexes={@ORM\Index(name="horseId", columns={"horseId"}), @ORM\Index(name="modifierId", columns={"modifierId"})})
 * @ORM\Entity
 */
class Horsemodifierlist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="horseId", type="integer", nullable=false)
     */
    private $horseid;

    /**
     * @var integer
     *
     * @ORM\Column(name="modifierId", type="integer", nullable=false)
     */
    private $modifierid;

    /**
     * @var integer
     *
     * @ORM\Column(name="idHorseModifierList", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhorsemodifierlist;



    /**
     * Set horseid
     *
     * @param integer $horseid
     *
     * @return Horsemodifierlist
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
     * Set modifierid
     *
     * @param integer $modifierid
     *
     * @return Horsemodifierlist
     */
    public function setModifierid($modifierid)
    {
        $this->modifierid = $modifierid;

        return $this;
    }

    /**
     * Get modifierid
     *
     * @return integer
     */
    public function getModifierid()
    {
        return $this->modifierid;
    }

    /**
     * Get idhorsemodifierlist
     *
     * @return integer
     */
    public function getIdhorsemodifierlist()
    {
        return $this->idhorsemodifierlist;
    }
}
