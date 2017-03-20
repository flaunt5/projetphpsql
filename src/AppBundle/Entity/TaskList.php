<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tasklist
 *
 * @ORM\Table(name="TaskList", indexes={@ORM\Index(name="stableId", columns={"stableId"}), @ORM\Index(name="taskId", columns={"taskId"})})
 * @ORM\Entity
 */
class TaskList
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTaskList", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtasklist;

    /**
     * @var integer
     *
     * @ORM\Column(name="stableId", type="integer", nullable=false)
     */
    private $stableid;

    /**
     * @var integer
     *
     * @ORM\Column(name="taskId", type="integer", nullable=false)
     */
    private $taskid;



    /**
     * Set stableid
     *
     * @param integer $stableid
     *
     * @return Tasklist
     */
    public function setStableid($stableid)
    {
        $this->stableid = $stableid;

        return $this;
    }

    /**
     * Get stableid
     *
     * @return integer
     */
    public function getStableid()
    {
        return $this->stableid;
    }

    /**
     * Set taskid
     *
     * @param integer $taskid
     *
     * @return Tasklist
     */
    public function setTaskid($taskid)
    {
        $this->taskid = $taskid;

        return $this;
    }

    /**
     * Get taskid
     *
     * @return integer
     */
    public function getTaskid()
    {
        return $this->taskid;
    }

    /**
     * Get idtasklist
     *
     * @return integer
     */
    public function getIdtasklist()
    {
        return $this->idtasklist;
    }
}
