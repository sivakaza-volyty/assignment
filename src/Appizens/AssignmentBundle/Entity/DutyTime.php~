<?php

namespace Appizens\AssignmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DutyTime
 */
class DutyTime
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \DateTime
     */
    private $day;

    /**
     * @var \DateTime
     */
    private $dutyStartAt;

    /**
     * @var \DateTime
     */
    private $dutyEndAt;


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
     * Set userId
     *
     * @param integer $userId
     * @return DutyTime
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set day
     *
     * @param \DateTime $day
     * @return DutyTime
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return \DateTime 
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set dutyStartAt
     *
     * @param \DateTime $dutyStartAt
     * @return DutyTime
     */
    public function setDutyStartAt($dutyStartAt)
    {
        $this->dutyStartAt = $dutyStartAt;

        return $this;
    }

    /**
     * Get dutyStartAt
     *
     * @return \DateTime 
     */
    public function getDutyStartAt()
    {
        return $this->dutyStartAt;
    }

    /**
     * Set dutyEndAt
     *
     * @param \DateTime $dutyEndAt
     * @return DutyTime
     */
    public function setDutyEndAt($dutyEndAt)
    {
        $this->dutyEndAt = $dutyEndAt;

        return $this;
    }

    /**
     * Get dutyEndAt
     *
     * @return \DateTime 
     */
    public function getDutyEndAt()
    {
        return $this->dutyEndAt;
    }
    /**
     * @var \AppBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return DutyTime
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
