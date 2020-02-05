<?php

namespace Lib\LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Lib\LibraryBundle\Entity\Book
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lib\LibraryBundle\Entity\BookRepository")
 */
class Book
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var integer $views
     *
     * @ORM\Column(name="views", type="integer", nullable=true)
     */
    protected $views;
    
    /**
     * @var integer $code
     *
     * @ORM\Column(name="code", type="integer", nullable=true)
     */
    protected $code;
    
    /**
     * @var integer $subCode
     *
     * @ORM\Column(name="subCode", type="integer", nullable=true)
     */
    protected $subCode;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    protected $title;

    /**
     * @var string $subTitle
     *
     * @ORM\Column(name="subTitle", type="string", length=255, nullable=true)
     */
    protected $subTitle;

    /**
     * @var string $author
     *
     * @ORM\Column(name="author", type="string", length=255, nullable=true)
     */
    protected $author;

    /**
     * @var string $editor
     *
     * @ORM\Column(name="editor", type="string", length=255, nullable=true)
     */
    protected $editor;

    /**
     * @var string $edition
     *
     * @ORM\Column(name="edition", type="string", length=255, nullable=true)
     */
    protected $edition;

    /**
     * @var string $lastCode
     *
     * @ORM\Column(name="lastCode", type="string", length=255, nullable=true)
     */
    protected $lastCode;

    /**
     * @var string $newCode
     *
     * @ORM\Column(name="newCode", type="string", length=255, nullable=true)
     */
    protected $newCode;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    protected $description;

    /**
     * @var string $ISBN
     *
     * @ORM\Column(name="ISBN", type="string", length=255, nullable=true)
     */
    protected $ISBN;

    /**
     * @var integer $EAN
     *
     * @ORM\Column(name="EAN", type="bigint", nullable=true)
     */
    protected $EAN;

    /**
     * @var string $format
     *
     * @ORM\Column(name="format", type="string", length=255, nullable=true)
     */
    protected $format;

    /**
     * @var string $volume
     *
     * @ORM\Column(name="volume", type="string", length=255, nullable=true)
     */
    protected $volume;

    /**
     * @var integer $numberOfCD
     *
     * @ORM\Column(name="numberOfCD", type="integer", nullable=true)
     */
    protected $numberOfCD;

    /**
     * @var integer $numberOfPage
     *
     * @ORM\Column(name="numberOfPage", type="integer", nullable=true)
     */
    protected $numberOfPage;

    /**
     * @var \DateTime $dateOfEdition
     *
     * @ORM\Column(name="dateOfEdition", type="date", nullable=true)
     */
    protected $dateOfEdition;

    /**
     * @var \DateTime $dateOfAcquisition
     *
     * @ORM\Column(name="dateOfAcquisition", type="date", nullable=true)
     */
    protected $dateOfAcquisition;

    /**
     * @var string $typeOfAcquisition
     *
     * @ORM\Column(name="typeOfAcquisition", type="string", length=255, nullable=true)
     */
    protected $typeOfAcquisition;

    /**
     * @var string $language
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=true)
     */
    protected $language;

    /**
     * @var integer $numberOfCopy
     *
     * @ORM\Column(name="numberOfCopy", type="integer", nullable=true)
     */
    protected $numberOfCopy;

    /**
     * @var string $coverPage
     *
     * @ORM\Column(name="coverPage", type="string", length=255, nullable=true)
     */
    protected $coverPage;

    /**
     * @var string $state
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=true)
     */
    protected $state;
    /**
     * @var integer $quality
     *
     * @ORM\Column(name="quality", type="integer", nullable=true)
     */
    protected $quality;
     /**
     * @var integer $rights
     *
     * @ORM\Column(name="rights", type="integer", nullable=true)
     */
    protected $rights;
     /**
     * @var integer $borrowFrequency
     *
     * @ORM\Column(name="borrowFrequency", type="integer", nullable=true)
     */
    protected $borrowFrequency;
     /**
     * @var integer $pdfAndPhysical
     *
     * @ORM\Column(name="pdfAndPhysical", type="integer", nullable=true)
     */
    protected $pdfAndPhysical;

    /**
     * @var boolean $validate
     *
     * @ORM\Column(name="validate", type="boolean", nullable=true)
     */
    protected $validate;

    /**
     * @var boolean $active
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    protected $active;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    public $path;
    
    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;

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
     * Set code
     *
     * @param integer $code
     * @return Book
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return integer 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set subCode
     *
     * @param integer $subCode
     * @return Book
     */
    public function setSubCode($subCode)
    {
        $this->subCode = $subCode;
    
        return $this;
    }

    /**
     * Get subCode
     *
     * @return integer 
     */
    public function getSubCode()
    {
        return $this->subCode;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Book
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set subTitle
     *
     * @param string $subTitle
     * @return Book
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;
    
        return $this;
    }

    /**
     * Get subTitle
     *
     * @return string 
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Book
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set editor
     *
     * @param string $editor
     * @return Book
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
    
        return $this;
    }

    /**
     * Get editor
     *
     * @return string 
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Set edition
     *
     * @param string $edition
     * @return Book
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;
    
        return $this;
    }

    /**
     * Get edition
     *
     * @return string 
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Set lastCode
     *
     * @param string $lastCode
     * @return Book
     */
    public function setLastCode($lastCode)
    {
        $this->lastCode = $lastCode;
    
        return $this;
    }

    /**
     * Get lastCode
     *
     * @return string 
     */
    public function getLastCode()
    {
        return $this->lastCode;
    }

    /**
     * Set newCode
     *
     * @param string $newCode
     * @return Book
     */
    public function setNewCode($newCode)
    {
        $this->newCode = $newCode;
    
        return $this;
    }

    /**
     * Get newCode
     *
     * @return string 
     */
    public function getNewCode()
    {
        return $this->newCode;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Book
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set ISBN
     *
     * @param string $iSBN
     * @return Book
     */
    public function setISBN($iSBN)
    {
        $this->ISBN = $iSBN;
    
        return $this;
    }

    /**
     * Get ISBN
     *
     * @return string 
     */
    public function getISBN()
    {
        return $this->ISBN;
    }

    /**
     * Set EAN
     *
     * @param integer $eAN
     * @return Book
     */
    public function setEAN($eAN)
    {
        $this->EAN = $eAN;
    
        return $this;
    }

    /**
     * Get EAN
     *
     * @return integer 
     */
    public function getEAN()
    {
        return $this->EAN;
    }

    /**
     * Set format
     *
     * @param string $format
     * @return Book
     */
    public function setFormat($format)
    {
        $this->format = $format;
    
        return $this;
    }

    /**
     * Get format
     *
     * @return string 
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set volume
     *
     * @param string $volume
     * @return Book
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    
        return $this;
    }

    /**
     * Get volume
     *
     * @return string 
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set numberOfCD
     *
     * @param integer $numberOfCD
     * @return Book
     */
    public function setNumberOfCD($numberOfCD)
    {
        $this->numberOfCD = $numberOfCD;
    
        return $this;
    }

    /**
     * Get numberOfCD
     *
     * @return integer 
     */
    public function getNumberOfCD()
    {
        return $this->numberOfCD;
    }

    /**
     * Set numberOfPage
     *
     * @param integer $numberOfPage
     * @return Book
     */
    public function setNumberOfPage($numberOfPage)
    {
        $this->numberOfPage = $numberOfPage;
    
        return $this;
    }

    /**
     * Get numberOfPage
     *
     * @return integer 
     */
    public function getNumberOfPage()
    {
        return $this->numberOfPage;
    }

    /**
     * Set dateOfEdition
     *
     * @param \DateTime $dateOfEdition
     * @return Book
     */
    public function setDateOfEdition($dateOfEdition)
    {
        $this->dateOfEdition = $dateOfEdition;
    
        return $this;
    }

    /**
     * Get dateOfEdition
     *
     * @return \DateTime 
     */
    public function getDateOfEdition()
    {
        return $this->dateOfEdition;
    }

    /**
     * Set dateOfAcquisition
     *
     * @param \DateTime $dateOfAcquisition
     * @return Book
     */
    public function setDateOfAcquisition($dateOfAcquisition)
    {
        $this->dateOfAcquisition = $dateOfAcquisition;
    
        return $this;
    }

    /**
     * Get dateOfAcquisition
     *
     * @return \DateTime 
     */
    public function getDateOfAcquisition()
    {
        return $this->dateOfAcquisition;
    }

    /**
     * Set type0fAcquisition
     *
     * @param string $type0fAcquisition
     * @return Book
     */
    public function setType0fAcquisition($type0fAcquisition)
    {
        $this->type0fAcquisition = $type0fAcquisition;
    
        return $this;
    }

    /**
     * Get type0fAcquisition
     *
     * @return string 
     */
    public function getType0fAcquisition()
    {
        return $this->type0fAcquisition;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Book
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set numberOfCopy
     *
     * @param integer $numberOfCopy
     * @return Book
     */
    public function setNumberOfCopy($numberOfCopy)
    {
        $this->numberOfCopy = $numberOfCopy;
    
        return $this;
    }

    /**
     * Get numberOfCopy
     *
     * @return integer 
     */
    public function getNumberOfCopy()
    {
        return $this->numberOfCopy;
    }

    /**
     * Set coverPage
     *
     * @param string $coverPage
     * @return Book
     */
    public function setCoverPage($coverPage)
    {
        $this->coverPage = $coverPage;
    
        return $this;
    }

    /**
     * Get coverPage
     *
     * @return string 
     */
    public function getCoverPage()
    {
        return $this->coverPage;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Book
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set validate
     *
     * @param boolean $validate
     * @return Book
     */
    public function setValidate($validate)
    {
        $this->validate = $validate;
    
        return $this;
    }

    /**
     * Get validate
     *
     * @return boolean 
     */
    public function getValidate()
    {
        return $this->validate;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Book
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
    
    /************/
    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/documents';
    }
    
    public function upload(){
        if (null === $this->file) {
            return;
        }
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
        //$this->path = $this->file->getClientOriginalName();
        $this->path = $this->getUploadDir().'/'.$this->file->getClientOriginalName();
        $this->file = null;
        return $this->path;
    }

    /**
     * Set typeOfAcquisition
     *
     * @param string $typeOfAcquisition
     * @return Book
     */
    public function setTypeOfAcquisition($typeOfAcquisition)
    {
        $this->typeOfAcquisition = $typeOfAcquisition;
    
        return $this;
    }

    /**
     * Get typeOfAcquisition
     *
     * @return string 
     */
    public function getTypeOfAcquisition()
    {
        return $this->typeOfAcquisition;
    }

    /**
     * Set quality
     *
     * @param integer $quality
     * @return Book
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;
    
        return $this;
    }

    /**
     * Get quality
     *
     * @return integer 
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set rights
     *
     * @param integer $rights
     * @return Book
     */
    public function setRights($rights)
    {
        $this->rights = $rights;
    
        return $this;
    }

    /**
     * Get rights
     *
     * @return integer 
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * Set borrowFrequency
     *
     * @param integer $borrowFrequency
     * @return Book
     */
    public function setBorrowFrequency($borrowFrequency)
    {
        $this->borrowFrequency = $borrowFrequency;
    
        return $this;
    }

    /**
     * Get borrowFrequency
     *
     * @return integer 
     */
    public function getBorrowFrequency()
    {
        return $this->borrowFrequency;
    }

    /**
     * Set pdfAndPhysical
     *
     * @param integer $pdfAndPhysical
     * @return Book
     */
    public function setPdfAndPhysical($pdfAndPhysical)
    {
        $this->pdfAndPhysical = $pdfAndPhysical;
    
        return $this;
    }

    /**
     * Get pdfAndPhysical
     *
     * @return integer 
     */
    public function getPdfAndPhysical()
    {
        return $this->pdfAndPhysical;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Book
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return Book
     */
    public function setViews($views)
    {
        $this->views = $views;
    
        return $this;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }
}