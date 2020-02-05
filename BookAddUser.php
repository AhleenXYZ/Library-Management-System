<?php

namespace Lib\LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lib\LibraryBundle\Entity\Book_add_User
 *
 * @ORM\Table(name="BookAddUser")
 * @ORM\Entity(repositoryClass="Lib\LibraryBundle\Entity\BookAddUserRepository")
 */
class BookAddUser
{
     /**
     * @ORM\ManyToOne(targetEntity="Lib\LibraryBundle\Entity\Book")
     * @ORM\JoinColumn(nullable=false)
     * 
     */
    private $books;
    /**
     * @ORM\ManyToOne(targetEntity="Lib\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     * 
     */
    private $users;
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime $Date
     *
     * @ORM\Column(name="Date", type="datetime")
     */
    private $Date;
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
     * Set Date
     *
     * @param \DateTime $date
     * @return Book_add_User
     */
    public function setDate($date)
    {
        $this->Date = $date;
    
        return $this;
    }

    /**
     * Get Date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Set books
     *
     * @param Lib\LibraryBundle\Entity\Book $books
     * @return Book_add_User
     */
    public function setBooks(\Lib\LibraryBundle\Entity\Book $books)
    {
        $this->books = $books;
    
        return $this;
    }

    /**
     * Get books
     *
     * @return Lib\LibraryBundle\Entity\Book 
     */
    public function getBooks()
    {
        return $this->books;
    }

    /**
     * Set users
     *
     * @param Lib\UserBundle\Entity\User $users
     * @return Book_add_User
     */
    public function setUsers(\Lib\UserBundle\Entity\User $users)
    {
        $this->users = $users;
    
        return $this;
    }

    /**
     * Get users
     *
     * @return Lib\UserBundle\Entity\User 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Book_add_User
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
}