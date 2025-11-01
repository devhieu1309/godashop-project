<?php
class ProductController
{
  function index()
  {
    $productRepository = new ProductRepository();
    $categoryRepository = new CategoryRepository();
    $item_per_page = 9;
    $page = 1;
    $conds = [];
    $sorts = [];
    $categoryName = "Tất cả sản phẩm";
    // $category_id = !empty($_GET['category_id']) ? $_GET['category_id'] : null;
    $category_id = $_GET['category_id'] ?? null;
    if ($category_id) {
      $conds = [
        "category_id" => [
          "type" => "=",
          "val" => $category_id
        ]
      ];
      $category = $categoryRepository->find($category_id);
      $categoryName = $category->getName();
    } // SELECT * ... WHERE category_id = 5;

    $price_range = $_GET['price-range'] ?? null;
    if ($price_range) {
      $tmp = explode("-", $price_range);
      $start = $tmp[0];
      $end = $tmp[1];
      $conds = [
        "price" => [
          "type" => "BETWEEN",
          "val" => $tmp
        ]
      ];

      if ($end == "greater") {
        $conds = [
          "price" => [
            "type" => ">=",
            "val" => $start
          ]
        ];
      }
    }


    $products = $productRepository->getBy($conds, $sorts, $page, $item_per_page);

    // Lấy tất cả danh mục
    $categoryRepository = new CategoryRepository();
    $categories = $categoryRepository->getAll();
    require "view/product/index.php";
  }
}
