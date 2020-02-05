<?php

namespace Lib\LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lib\LibraryBundle\Entity\sanction
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lib\LibraryBundle\Entity\sanctionRepository")
 */
class sanction
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime $date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string $reason
     *
     * @ORM\Column(name="reason", type="string", length=255)
     */
    private $reason;

    /**
     * @var integer $pointSanction
     *
     * @ORM\Column(name="pointSanction", type="integer")
     */
    private $pointSanction;

    /**
     * @var integer $currentPointSanction
     *
     * @ORM\Column(name="currentPointSanction", type="integer")
     */
    private $currentPointSanction;

    /**
     * @var integer $Open
     *
     * @ORM\Column(name="Open", type="integer")
     */
    private $Open;
    
    /**
     * @ORM\ManyToOne(targetEntity="Lib\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     * 
     */
    protected $user;
     /**
     *
     * @var boolean $active
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;


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
     * Set date
     *
     * @param \DateTime $date
     * @return sanction
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return sanction
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    
        return $this;
    }

    /**
     * Get reason
     *
     * @return string 
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set pointSanction
     *
     * @param integer $pointSanction
     * @return sanction
     */
    public function setPointSanction($pointSanction)
    {
        $this->pointSanction = $pointSanction;
    
        return $this;
    }

    /**
     * Get pointSanction
     *
     * @return integer 
     */
    public function getPointSanction()
    {
        return $this->pointSanction;
    }

    /**
     * Set currentPointSanction
     *
     * @param integer $currentPointSanction
     * @return sanction
     */
    public function setCurrentPointSanction($currentPointSanction)
    {
        $this->currentPointSanction = $currentPointSanction;
    
        return $this;
    }

    /**
     * Get currentPointSanction
     *
     * @return integer 
     */
    public function getCurrentPointSanction()
    {
        return $this->currentPointSanction;
    }

    /**
     * Set Open
     *
     * @param integer $open
     * @return sanction
     */
    public function setOpen($open)
    {
        $this->Open = $open;
    
        return $this;
    }

    /**
     * Get Open
     *
     * @return integer 
     */
    public function getOpen()
    {
        return $this->Open;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return sanction
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set user
     *
     * @param Lib\UserBundle\Entity\User $user
     * @return sanction
     */
    public function setUser(\Lib\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return Lib\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}