<?php

namespace AppBundle\Entity;

use \Doctrine\ORM\Mapping as ORM;

/**
 * Class Package
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="package")
 * @ORM\HasLifecycleCallbacks
 */
class Package
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $modifiedIn;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @ORM\PrePersist
     * @return $this
     */
    public function setCreatedAt()
    {
        $this->createdAt = new \DateTime();
        return $this;
    }

    /**
     * @return mixed
     */
    public function getModifiedIn()
    {
        return $this->modifiedIn;
    }

    /**
     * @ORM\PreUpdate
     * @return $this
     */
    public function setModifiedIn()
    {
        $this->modifiedIn = new \DateTime();
        return $this;
    }
}
