<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Status
 */
class Status
{
    /**
     * @var integer
     */
    private $text;

    /**
     * @var integer
     * @GeneratedValue(strategy="AUTO")
     */
    private $statusId;


    /**
     * Set text
     *
     * @param integer $text
     * @return Status
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return integer 
     */
    public function getText()
    {
        return $this->text;
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
}
