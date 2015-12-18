<?php

namespace multimediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
*/
class Tag
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
  public $tag;


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
     * Set tag
     *
     * @param string $tag
     *
     * @return Tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }



        /**
         * @ORM\ManyToMany(targetEntity="Image" ,  inversedBy="tags_images")
         * @ORM\JoinTable(name="tags_images",
         *      joinColumns={@ORM\JoinColumn(name="tag_id", referencedColumnName="id")},
         *      inverseJoinColumns={@ORM\JoinColumn(name="image_id", referencedColumnName="id")}
         *      )
         */
        private $tags_images;


        /**
         * Add tagsImage
         *
         * @param \multimediaBundle\Entity\Image $tagsImage
         *
         * @return Tag
         */
        public function addTagsImage(\multimediaBundle\Entity\Image $tagsImage)
        {
            $this->tags_images[] = $tagsImage;

            return $this;
        }

        /**
         * Remove tagsImage
         *
         * @param \multimediaBundle\Entity\Image $tagsImage
         */
        public function removeTagsImage(\multimediaBundle\Entity\Image $tagsImage)
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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags_images = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
