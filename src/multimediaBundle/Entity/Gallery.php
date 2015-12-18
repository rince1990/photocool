<?php

namespace multimediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
*/
class Gallery
{
  /**
  * @ORM\Id
  * @ORM\Column(type="integer")
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  public $id;

  /**
  * @ORM\Column(type="string", length=255, nullable=false)
  */
  public $name;

  /**
  * @ORM\Column(type="string", length=255, nullable=false)
  */
  public $visibility;


  /**
  * @ORM\ManyToOne(targetEntity="\AdrianG\RegisterBundle\Entity\User", inversedBy="galleries")
  * @ORM\JoinColumn(name="owner", referencedColumnName="id",onDelete="CASCADE")
  * @return integer
  */
  private $owner;
  public function setOwner(\AdrianG\RegisterBundle\Entity\User $user)
  {
    $this->owner = $user;
  }

  public function getUser()
  {
    return $this->owner;
  }



  /**
  *
  *
  * @ORM\Column(name="creationDate", type="date", nullable=false)
  */
  private $creationDate;

  /**
  * @ORM\Column(type="string", length=255, nullable=true)
  */
  public $path;
  /**
  * @ORM\OneToMany(targetEntity="Image", mappedBy="gallery")
  */
  private $images;


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
  * Set name
  *
  * @param string $name
  *
  * @return Gallery
  */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
  * Get name
  *
  * @return string
  */
  public function getName()
  {
    return $this->name;
  }

  /**
  * Set creationDate
  *
  * @param \DateTime $creationDate
  *
  * @return Gallery
  */
  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;

    return $this;
  }

  /**
  * Get creationDate
  *
  * @return \DateTime
  */
  public function getCreationDate()
  {
    return $this->creationDate;
  }


  public function __construct()
  {
    $this->visibility = 'Private';
    $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    $this->users_access = new \Doctrine\Common\Collections\ArrayCollection();
  }
  public function addImages(\multimediaBundle\Entity\Image $images)
  {
    $this->images[] = $images;
  }

  public function getImages()
  {
    return $this->images;
  }

  /**
  * Set path
  *
  * @param string $path
  *
  * @return Gallery
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
     * Get owner
     *
     * @return \multimediaBundle\Entity\User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Add image
     *
     * @param \multimediaBundle\Entity\Image $image
     *
     * @return Gallery
     */
    public function addImage(\multimediaBundle\Entity\Image $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \multimediaBundle\Entity\Image $image
     */
    public function removeImage(\multimediaBundle\Entity\Image $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Set visibility
     *
     * @param string $visibility
     *
     * @return Gallery
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get visibility
     *
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @ORM\ManyToMany(targetEntity="\AdrianG\RegisterBundle\Entity\User" ,  inversedBy="users_access")
     * @ORM\JoinTable(name="users_galleries_access",
     *      joinColumns={@ORM\JoinColumn(name="gallery_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}
     *      )
     */
    private $users_access;


    /**
     * Add usersAccess
     *
     * @param \AdrianG\RegisterBundle\Entity\User $usersAccess
     *
     * @return Gallery
     */
    public function addUsersAccess(\AdrianG\RegisterBundle\Entity\User $usersAccess)
    {
        $this->users_access[] = $usersAccess;

        return $this;
    }

    /**
     * Remove usersAccess
     *
     * @param \AdrianG\RegisterBundle\Entity\User $usersAccess
     */
    public function removeUsersAccess(\AdrianG\RegisterBundle\Entity\User $usersAccess)
    {
        $this->users_access->removeElement($usersAccess);
    }

    /**
     * Get usersAccess
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsersAccess()
    {
        return $this->users_access;
    }

}
