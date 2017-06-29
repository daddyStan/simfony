<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="fio", type="text", length=65535, nullable=false)
     */
    private $fio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_visit", type="date", nullable=false)
     */
    private $lastVisit;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", length=65535, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="text", length=65535, nullable=false)
     */
    private $pass;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registration_date", type="date", nullable=false)
     */
    private $registrationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="sess_id", type="text", length=65535, nullable=false)
     */
    private $sessId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sess_end", type="date", nullable=false)
     */
    private $sessEnd;

    /**
     * @var boolean
     *
     * @ORM\Column(name="admin", type="boolean", nullable=false)
     */
    private $admin;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;


}
