<?php

namespace Appizens\AssignmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupFac
 */
class GroupFac
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $groupName;

    /**
     * @var boolean
     */
    private $isEnabled;


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
     * Set groupName
     *
     * @param string $groupName
     * @return GroupFac
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string 
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     * @return GroupFac
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return boolean 
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }
}
