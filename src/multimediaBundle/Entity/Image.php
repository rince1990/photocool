<?php

namespace multimediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    public $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;

    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/images';
    }

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
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
     * Set name
     *
     * @param string $name
     *
     * @return Image
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
     * Set path
     *
     * @param string $path
     *
     * @return Image
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
     * @ORM\ManyToOne(targetEntity="Gallery", inversedBy="images")
     * @ORM\JoinColumn(name="gallery_id", referencedColumnName="id",onDelete="CASCADE")
     * @return integer
     */
    private $gallery;

    public function setGallery(\multimediaBundle\Entity\Gallery $gallery)
    {
        $this->gallery = $gallery;
    }

    public function getGallery()
    {
        return $this->gallery;
    }


        /**
        * @ORM\ManyToMany(targetEntity="Tag", mappedBy="tags_images")
        */
        private $tags_images;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags_images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tagsImage
     *
     * @param \multimediaBundle\Entity\Tag $tagsImage
     *
     * @return Image
     */
    public function addTagsImage(\multimediaBundle\Entity\Tag $tagsImage)
    {
        $this->tags_images[] = $tagsImage;

        return $this;
    }

    /**
     * Remove tagsImage
     *
     * @param \multimediaBundle\Entity\Tag $tagsImage
     */
    public function removeTagsImage(\multimediaBundle\Entity\Tag $tagsImage)
    {
        $this->tags_images->removeElement($tagsImage);
    }

    /**
     * Get tagsImages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTagsImages()
    {
        return $this->tags_images;
    }

    public function hasTag($tag) {
      if($this->getTagsImages()->contains($tag)) return true;
      return false;
    }
}
