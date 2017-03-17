<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tasks
 *
 * @ORM\Table(name="Tasks", indexes={@ORM\Index(name="infrastructureId", columns={"infrastructureId"}), @ORM\Index(name="horseId", columns={"horseId"})})
 * @ORM\Entity
 */
class Tasks
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
     * @ORM\Column(name="infrastructureId", type="integer", nullable=false)
     */
    private $infrastructureid;

    /**
     * @var integer
     *
     * @ORM\Column(name="horseId", type="integer", nullable=false)
     */
    private $horseid;

    /**
     * @var integer
     *
     * @ORM\Column(name="frequency", type="integer", nullable=false)
     */
    private $frequency;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTasks", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtasks;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Tasks
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
     * @return Tasks
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
     * Set infrastructureid
     *
     * @param integer $infrastructureid
     *
     * @return Tasks
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
     * Set horseid
     *
     * @param integer $horseid
     *
     * @return Tasks
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
     * Set frequency
     *
     * @param integer $frequency
     *
     * @return Tasks
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Get frequency
     *
     * @return integer
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Get idtasks
     *
     * @return integer
     */
    public function getIdtasks()
    {
        return $this->idtasks;
    }
}
