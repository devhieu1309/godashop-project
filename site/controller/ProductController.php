<?php
class ProductController
{
    function index()
    {
      $productRepository = new ProductRepository();
      $item_per_page = 9;
      $page = 1;
      $conds = [];
      $sorts = [];
      $products = $productRepository->getBy($conds, $sorts, $page, $item_per_page);
      require "view/product/index.php";
    }
}