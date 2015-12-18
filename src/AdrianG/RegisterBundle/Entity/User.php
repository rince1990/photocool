<?php
// src/AppBundle/Entity/User.php
namespace AdrianG\RegisterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
* @ORM\Table(name="app_users")
* @ORM\Entity(repositoryClass="AdrianG\RegisterBundle\Repository\UserRepository")
*/
class User implements AdvancedUserInterface, \Serializable
{
  /**
  * @ORM\Column(type="integer")
  * @ORM\Id
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  private $id;

  /**
  * @ORM\Column(type="string", length=25, unique=true)
  */
  private $username;

  /**
  * @ORM\Column(type="string", length=64)
  */
  private $password;

  /**
  * @ORM\Column(type="string", length=60, unique=true)
  */
  private $email;

  /**
  * @ORM\Column(name="is_active", type="boolean")
  */
  private $isActive;

  /**
  * @ORM\Column(type="string", length=30)
  */
  private $roles;

  /**
  * @Assert\NotBlank()
  * @Assert\Length(max = 4096)
  */
  private $plainPassword;

  public function getPlainPassword()
  {
    return $this->plainPassword;
  }

  public function setPlainPassword($password)
  {
    $this->plainPassword = $password;
  }

  public function __construct()
  {
    //parent::__construct();
    // your own logic
    $this->isActive = 0;
    $this->roles = 'ROLE_USER';
    $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    //$this->isActive = true;
    // may not be needed, see section on salt below
    // $this->salt = md5(uniqid(null, true));
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function getSalt()
  {
    // you *may* need a real salt depending on your encoder
    // see section on salt below
    return null;
  }

  public function getPassword()
  {
    return $this->password;
  }


  public function eraseCredentials()
  {
  }

  /** @see \Serializable::serialize() */
  public function serialize()
  {
    return serialize(array(
      $this->id,
      $this->username,
      $this->password,
      // see section on salt below
      // $this->salt,
    ));
  }

  /** @see \Serializable::unserialize() */
  public function unserialize($serialized)
  {
    list (
    $this->id,
    $this->username,
    $this->password,
    // see section on salt below
    // $this->salt
    ) = unserialize($serialized);
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
  * Set username
  *
  * @param string $username
  *
  * @return User
  */
  public function setUsername($username)
  {
    $this->username = $username;

    return $this;
  }

  /**
  * Set password
  *
  * @param string $password
  *
  * @return User
  */
  public function setPassword($password)
  {
    $this->password = $password;

    return $this;
  }

  /**
  * Set email
  *
  * @param string $email
  *
  * @return User
  */
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
  * Get email
  *
  * @return string
  */
  public function getEmail()
  {
    return $this->email;
  }

  /**
  * Set isActive
  *
  * @param boolean $isActive
  *
  * @return User
  */
  public function setIsActive($isActive)
  {
    $this->isActive = $isActive;

    return $this;
  }

  /**
  * Get isActive
  *
  * @return boolean
  */
  public function getIsActive()
  {
    return $this->isActive;
  }

  /**
  * Set role
  *
  * @param string $role
  *
  * @return User
  */
  public function setRoles($roles)
  {
    $this->roles = $roles;

    return $this;
  }

  /**
  * Get role
  *
  * @return string
  */
  public function getRoles()
  {
    return array($this->roles);
  }


  /**
  * @ORM\OneToMany(targetEntity="\multimediaBundle\Entity\Gallery", mappedBy="owner")
  */
  private $galleries;

  public function addGalleries(\multimediaBundle\Entity\Gallery $galleries)
  {
    $this->galleries[] = $galleries;
  }

  public function getGalleries()
  {
    return $this->galleries;
  }



  /**
  * Add gallery
  *
  * @param \multimediaBundle\Entity\Gallery $gallery
  *
  * @return User
  */
  public function addGallery(\multimediaBundle\Entity\Gallery $gallery)
  {
    $this->galleries[] = $gallery;

    return $this;
  }

  /**
  * Remove gallery
  *
  * @param \multimediaBundle\Entity\Gallery $gallery
  */
  public function removeGallery(\multimediaBundle\Entity\Gallery $gallery)
  {
    $this->galleries->removeElement($gallery);
  }

  /**
  * @ORM\ManyToMany(targetEntity="\multimediaBundle\Entity\Gallery", mappedBy="users_access")
  */
  private $users_access;

  /**
  * Add usersAccess
  *
  * @param \multimediaBundle\Entity\Gallery $usersAccess
  *
  * @return User
  */
  public function addUsersAccess(\multimediaBundle\Entity\Gallery $usersAccess)
  {
    $this->users_access[] = $usersAccess;

    return $this;
  }

  /**
  * Remove usersAccess
  *
  * @param \multimediaBundle\Entity\Gallery $usersAccess
  */
  public function removeUsersAccess(\multimediaBundle\Entity\Gallery $usersAccess)
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

  public function hasRole($role) {
    if(in_array($role, $this->getRoles())) return true;
    return false;
  }


  public function isAccountNonExpired(){ return true;}
  public function isAccountNonLocked(){ return true;}
  public function isCredentialsNonExpired(){return true;}
  
  public function isEnabled(){
    return $this->isActive;
  }

}
