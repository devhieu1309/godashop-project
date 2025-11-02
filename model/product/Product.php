<?php
class Product
{
    protected $id;
    protected $name;
    protected $barcode;
    protected $sku;
    protected $price;
    protected $discount_percentage;
    protected $discount_from_date;
    protected $discount_to_date;
    protected $featured_image;
    protected $inventory_qty;
    protected $create_date;
    protected $description;
    protected $start;
    protected $featured;
    protected $category_id;
    protected $brand_id;
    protected $sale_price;

    function __construct($id, $name, $barcode, $sku, $price, $discount_percentage, $discount_from_date, $discount_to_date, $featured_image, $inventory_qty, $create_date, $description, $start, $featured, $category_id, $brand_id, $sale_price) {
        $this->id = $id;
        $this->name = $name;
        $this->barcode = $barcode;
        $this->sku = $sku;
        $this->price = $price;
        $this->discount_percentage = $discount_percentage;
        $this->discount_from_date = $discount_from_date;
        $this->discount_to_date = $discount_to_date;
        $this->featured_image = $featured_image;
        $this->inventory_qty = $inventory_qty;
        $this->create_date = $create_date;
        $this->description = $description;
        $this->start = $start;
        $this->featured = $featured;
        $this->category_id = $category_id;
        $this->brand_id = $brand_id;
        $this->sale_price = $sale_price;
    }

    function getDiscountPercentage() {
        return $this->discount_percentage;
    }

    function getFeaturedImage()
    {
        return $this->featured_image;
    }

    function getName()
    {
        return $this->name;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getSalePrice()
    {
        return $this->sale_price;
    }
}