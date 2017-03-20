<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ads
 *
 * @ORM\Table(name="Ads")
 * @ORM\Entity
 */
class Ads
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAds", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idads;

    /**
     * @var integer
     *
     * @ORM\Column(name="name", type="integer", nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="content", type="integer", nullable=false)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="link", type="integer", nullable=true)
     */
    private $link;



    /**
     * Set name
     *
     * @param integer $name
     *
     * @return Ads
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return integer
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set content
     *
     * @param integer $content
     *
     * @return Ads
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return integer
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set link
     *
     * @param integer $link
     *
     * @return Ads
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return integer
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Get idads
     *
     * @return integer
     */
    public function getIdads()
    {
        return $this->idads;
    }
}
