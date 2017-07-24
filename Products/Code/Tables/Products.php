<?php

namespace Products\Products\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products_products", indexes={@ORM\Index(name="category_id_index", columns={"category_id"}), @ORM\Index(name="supplier_id_index", columns={"supplier_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Products extends \Kazist\Table\BaseTable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="sku_code", type="string", length=255, nullable=true)
     */
    protected $sku_code;

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", length=11, nullable=true)
     */
    protected $category_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="supplier_id", type="integer", length=11, nullable=true)
     */
    protected $supplier_id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    protected $description;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=11, scale=2, nullable=true)
     */
    protected $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="image", type="integer", length=11, nullable=true)
     */
    protected $image;

    /**
     * @var string
     *
     * @ORM\Column(name="width", type="string", length=255, nullable=true)
     */
    protected $width;

    /**
     * @var string
     *
     * @ORM\Column(name="length", type="string", length=255, nullable=true)
     */
    protected $length;

    /**
     * @var string
     *
     * @ORM\Column(name="Height", type="string", length=255, nullable=true)
     */
    protected $Height;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="string", length=255, nullable=true)
     */
    protected $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="packaging", type="string", length=255, nullable=true)
     */
    protected $packaging;

    /**
     * @var integer
     *
     * @ORM\Column(name="in_stock", type="integer", length=11, nullable=true)
     */
    protected $in_stock;

    /**
     * @var string
     *
     * @ORM\Column(name="except", type="string", length=255, nullable=true)
     */
    protected $except;

    /**
     * @var integer
     *
     * @ORM\Column(name="published", type="integer", length=11, nullable=true)
     */
    protected $published;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", length=11, nullable=true)
     */
    protected $created_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    protected $date_created;

    /**
     * @var integer
     *
     * @ORM\Column(name="modified_by", type="integer", length=11, nullable=true)
     */
    protected $modified_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=true)
     */
    protected $date_modified;


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
     * Set title
     *
     * @param string $title
     *
     * @return Products
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
     * Set skuCode
     *
     * @param string $skuCode
     *
     * @return Products
     */
    public function setSkuCode($skuCode)
    {
        $this->sku_code = $skuCode;

        return $this;
    }

    /**
     * Get skuCode
     *
     * @return string
     */
    public function getSkuCode()
    {
        return $this->sku_code;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return Products
     */
    public function setCategoryId($categoryId)
    {
        $this->category_id = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Set supplierId
     *
     * @param integer $supplierId
     *
     * @return Products
     */
    public function setSupplierId($supplierId)
    {
        $this->supplier_id = $supplierId;

        return $this;
    }

    /**
     * Get supplierId
     *
     * @return integer
     */
    public function getSupplierId()
    {
        return $this->supplier_id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Products
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
     * Set price
     *
     * @param string $price
     *
     * @return Products
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set image
     *
     * @param integer $image
     *
     * @return Products
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return integer
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set width
     *
     * @param string $width
     *
     * @return Products
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set length
     *
     * @param string $length
     *
     * @return Products
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set height
     *
     * @param string $height
     *
     * @return Products
     */
    public function setHeight($height)
    {
        $this->Height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * Set weight
     *
     * @param string $weight
     *
     * @return Products
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set packaging
     *
     * @param string $packaging
     *
     * @return Products
     */
    public function setPackaging($packaging)
    {
        $this->packaging = $packaging;

        return $this;
    }

    /**
     * Get packaging
     *
     * @return string
     */
    public function getPackaging()
    {
        return $this->packaging;
    }

    /**
     * Set inStock
     *
     * @param integer $inStock
     *
     * @return Products
     */
    public function setInStock($inStock)
    {
        $this->in_stock = $inStock;

        return $this;
    }

    /**
     * Get inStock
     *
     * @return integer
     */
    public function getInStock()
    {
        return $this->in_stock;
    }

    /**
     * Set except
     *
     * @param string $except
     *
     * @return Products
     */
    public function setExcept($except)
    {
        $this->except = $except;

        return $this;
    }

    /**
     * Get except
     *
     * @return string
     */
    public function getExcept()
    {
        return $this->except;
    }

    /**
     * Set published
     *
     * @param integer $published
     *
     * @return Products
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return integer
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Get createdBy
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Get modifiedBy
     *
     * @return integer
     */
    public function getModifiedBy()
    {
        return $this->modified_by;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->date_modified;
    }
    /**
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        // Add your code here
    }
}

