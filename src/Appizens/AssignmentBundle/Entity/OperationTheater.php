<?php

namespace Appizens\AssignmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperationTheater
 */
class OperationTheater
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $theaterName;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set theaterName
     *
     * @param string $theaterName
     * @return OperationTheater
     */
    public function setTheaterName($theaterName)
    {
        $this->theaterName = $theaterName;

        return $this;
    }

    /**
     * Get theaterName
     *
     * @return string 
     */
    public function getTheaterName()
    {
        return $this->theaterName;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sessions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sessions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add sessions
     *
     * @param \Appizens\AssignmentBundle\Entity\Session $sessions
     * @return OperationTheater
     */
    public function addSession(\Appizens\AssignmentBundle\Entity\Session $sessions)
    {
        $this->sessions[] = $sessions;

        return $this;
    }

    /**
     * Remove sessions
     *
     * @param \Appizens\AssignmentBundle\Entity\Session $sessions
     */
    public function removeSession(\Appizens\AssignmentBundle\Entity\Session $sessions)
    {
        $this->sessions->removeElement($sessions);
    }

    /**
     * Get sessions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSessions()
    {
        return $this->sessions;
    }
}
