<?php

namespace Appizens\AssignmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 */
class Session
{
    /**
     * @var \DateTime
     */
    private $startAt;

    /**
     * @var \DateTime
     */
    private $endAt;

    /**
     * @var string
     */
    private $status;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Appizens\AssignmentBundle\Entity\OperationTheater
     */
    private $operation_theater;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set startAt
     *
     * @param \DateTime $startAt
     * @return Session
     */
    public function setStartAt($startAt)
    {
        $this->startAt = $startAt;

        return $this;
    }

    /**
     * Get startAt
     *
     * @return \DateTime 
     */
    public function getStartAt()
    {
        return $this->startAt;
    }

    /**
     * Set endAt
     *
     * @param \DateTime $endAt
     * @return Session
     */
    public function setEndAt($endAt)
    {
        $this->endAt = $endAt;

        return $this;
    }

    /**
     * Get endAt
     *
     * @return \DateTime 
     */
    public function getEndAt()
    {
        return $this->endAt;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Session
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

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
     * Set operation_theater
     *
     * @param \Appizens\AssignmentBundle\Entity\OperationTheater $operationTheater
     * @return Session
     */
    public function setOperationTheater(\Appizens\AssignmentBundle\Entity\OperationTheater $operationTheater = null)
    {
        $this->operation_theater = $operationTheater;

        return $this;
    }

    /**
     * Get operation_theater
     *
     * @return \Appizens\AssignmentBundle\Entity\OperationTheater 
     */
    public function getOperationTheater()
    {
        return $this->operation_theater;
    }

    /**
     * Add users
     *
     * @param \Appizens\AssignmentBundle\Entity\User $users
     * @return Session
     */
    public function addUser(\Appizens\AssignmentBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Appizens\AssignmentBundle\Entity\User $users
     */
    public function removeUser(\Appizens\AssignmentBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
