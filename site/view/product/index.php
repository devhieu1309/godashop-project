<?php require "layout/header.php" ?>
<main>
    <div class="max-w-[1200px] mx-auto">
        <div class="pt-2">
            <ul class="flex space-x-2 mb-5">
                <li><a class="font-medium" href="">Trang chủ</a></li>
                <li><a class="text-gray-800" href=""><?php echo $categoryName ?></a></li>
            </ul>
            <div class="flex space-x-5">
                <div class="basis-1/5 flex flex-col space-y-5">
                    <div class="border border-gray-200 p-3">
                        <h4 class="uppercase text-[16px] text-gray-700 relative inline p-2 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-0.5 after:bg-[#EC0000] after:content['']">
                            Danh mục sản phẩm
                        </h4>
                        <ul class="text-[15px] p-5 pb-0 text-[#333333]">
                            <li>
                                <a class="<?php echo empty($category_id) ? "ct-active" : "" ?>" href="index.php?c=product">Tất cả sản phẩm</a>
                            </li>
                            <?php foreach ($categories as $category) : ?>
                                <li>
                                    <a class="<?php echo !empty($category_id) && $category_id == $category->getId() ? "ct-active" : "" ?>" href="index.php?c=product&category_id=<?php echo $category->getId() ?>" title="<?php echo $category->getName() ?>"><?php echo $category->getName() ?></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="border border-gray-200 p-3">
                        <h4 class="uppercase text-[16px] text-gray-700 relative inline p-2 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-0.5 after:bg-[#EC0000] after:content['']">
                            Khoảng giá
                        </h4>
                        <ul class="range text-[15px] p-4 pb-0 text-[#333333] flex flex-col space-y-1">
                            <li>
                                <label for="filter-0-100000">
                                    <input id="filter-0-100000" type="radio" class="mr-1" value="0-100000" <?php echo $price_range == "0-100000" ? "checked" : "" ?>>
                                    Giá dưới 100.000đ
                                </label>
                            </li>
                            <li>
                                <label for="filter-100000-200000">
                                    <input id="filter-100000-200000" type="radio" class="mr-1" value="100000-200000" <?php echo $price_range == "100000-200000" ? "checked" : "" ?>>
                                    100.000đ - 200.000đ
                                </label>
                            </li>
                            <li>
                                <label for="filter-200000-300000">
                                    <input id="filter-200000-300000" type="radio" class="mr-1" value="200000-300000" <?php echo $price_range == "200000-300000" ? "checked" : "" ?>>
                                    200.000đ - 300.000đ
                                </label>
                            </li>
                            <li>
                                <label for="filter-300000-500000">
                                    <input id="filter-300000-500000" type="radio" class="mr-1" value="300000-500000" <?php echo $price_range == "300000-500000" ? "checked" : "" ?>>
                                    300.000đ - 500.000đ
                                </label>
                            </li>
                            <li>
                                <label for="filter-500000-1000000">
                                    <input id="filter-500000-1000000" type="radio" class="mr-1" value="500000-1000000" <?php echo $price_range == "500000-1000000" ? "checked" : "" ?>>
                                    500.000đ - 1.000.000đ
                                </label>
                            </li>
                            <li>
                                <label for="filter-1000000-greater">
                                    <input id="filter-1000000-greater" type="radio" class="mr-1" value="1000000-greater" <?php echo $price_range == "1000000-greater" ? "checked" : "" ?>>
                                    Giá trên 1.000.000đ
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="basis-4/5">
                    <div class="flex items-center justify-between">
                        <h4 class="uppercase text-[16px] text-gray-700 font-medium relative inline p-2 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-1 after:bg-[#f70808] after:content['']">
                            <?php echo $categoryName ?>
                        </h4>
                        <div class="flex items-center gap-2">
                            <label for="sort" class="text-gray-700 font-medium text-sm">Sắp xếp:</label>
                            <select
                                id="sort"
                                name="sort"
                                class="border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                                <option value="asc">Giá tăng dần</option>
                                <option value="desc">Giá giảm dần</option>
                                <option value="az">Từ A - Z</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-3">
                        <?php foreach ($products as $product) : ?>
                            <?php require "layout/product.php" ?>
                        <?php endforeach ?>
                    </div>
                    <nav aria-label="Page navigation example" class="text-right py-5">
                        <ul class="inline-flex -space-x-px text-sm">
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    </div>
</main>
<?php require "layout/footer.php" ?>