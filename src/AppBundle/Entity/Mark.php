<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mark
 */
class Mark
{
    /**
     * @var integer
     */
    private $statusId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $postId;

    /**
     * @var integer
     * @GeneratedValue(strategy="AUTO")
     */
    private $markId;


    /**
     * Set statusId
     *
     * @param integer $statusId
     * @return Mark
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * Get statusId
     *
     * @return integer 
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Mark
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
     * Set postId
     *
     * @param integer $postId
     * @return Mark
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get postId
     *
     * @return integer 
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Get markId
     *
     * @return integer 
     */
    public function getMarkId()
    {
        return $this->markId;
    }
}
