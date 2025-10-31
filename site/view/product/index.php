<?php require "layout/header.php" ?>
<main>
    <div class="max-w-[1200px] mx-auto">
        <div class="pt-2">
            <ul class="flex space-x-2 mb-5">
                <li><a class="font-medium" href="">Trang chủ</a></li>
                <li><a class="text-gray-800" href="">Tất cả sản phẩm</a></li>
            </ul>
            <div class="flex space-x-5">
                <div class="basis-1/5 flex flex-col space-y-5">
                    <div class="border border-gray-200 p-3">
                        <h4 class="uppercase text-[16px] text-gray-700 relative inline p-2 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-0.5 after:bg-[#EC0000] after:content['']">
                            Danh mục sản phẩm
                        </h4>
                        <ul class="text-[15px] p-5 pb-0 text-[#333333]">
                            <li>Tất cả sản phẩm</li>
                            <li>Kem chống nắng</li>
                            <li>Kem dưỡng da</li>
                            <li>Kem trị mụn</li>
                            <li>Kem trị thâm nám</li>
                            <li>Sửa rửa mặt</li>
                            <li>Sửa tắm</li>
                        </ul>
                    </div>
                    <div class="border border-gray-200 p-3">
                        <h4 class="uppercase text-[16px] text-gray-700 relative inline p-2 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-0.5 after:bg-[#EC0000] after:content['']">
                            Khoảng giá
                        </h4>
                        <ul class="text-[15px] p-5 pb-0 text-[#333333] flex flex-col space-y-1">
                            <li>
                                <label for="">
                                    <input type="radio" class="mr-1">
                                    Giá dưới 100.000đ
                                </label>
                            </li>
                            <li>
                                <label for="">
                                    <input type="radio" class="mr-1">
                                    100.000đ - 200.000đ
                                </label>
                            </li>
                            <li>
                                <label for="">
                                    <input type="radio" class="mr-1">
                                    200.000đ - 300.000đ
                                </label>
                            </li>
                            <li>
                                <label for="">
                                    <input type="radio" class="mr-1">
                                    300.000đ - 500.000đ
                                </label>
                            </li>
                            <li>
                                <label for="">
                                    <input type="radio" class="mr-1">
                                    5.000đ - 1.000.000đ
                                </label>
                            </li>
                            <li>
                                <label for="">
                                    <input type="radio" class="mr-1">
                                    Giá trên 1.000.000đ
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="basis-4/5">
                    <div class="flex items-center justify-between">
                        <h4 class="uppercase text-[16px] text-gray-700 font-medium relative inline p-2 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-1 after:bg-[#f70808] after:content['']">
                            Tất cả sản phẩm
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
                        <div class="relative flex flex-col items-center justify-center group">
                            <div>
                                <img class="h-[200px] w-[200px] object-contain" src="/upload/aromaWhiteMaximumBeaumore250ml.jpg" alt="">
                            </div>
                            <div class="">
                                <p class="text-[15px] text-gray-800">Sản phẩm 1</p>
                                <div class="flex space-x-2">
                                    <del class="text-gray-700 text-[18px] font-medium">9.999.000đ</del>
                                    <p class="text-red-600 font-medium">5.999.000đ</p>
                                </div>
                            </div>
                            <div class="group-hover:flex hidden transition-all duration-300 ease-in-out flex-col space-y-2 items-center absolute left-10 top-10">
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p class="">Thêm vào giỏ hàng</p>
                                    <p>
                                        <i class="fa-solid fa-cart-shopping text-white"></i>
                                    </p>
                                </div>
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p>Xem chi tiết</p>
                                    <p>
                                        <i class="fa-solid fa-eye text-white"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center justify-center group">
                            <div>
                                <img class="h-[200px] w-[200px] object-contain" src="/upload/aromaWhiteMaximumBeaumore250ml.jpg" alt="">
                            </div>
                            <div class="">
                                <p class="text-[15px] text-gray-800">Sản phẩm 1</p>
                                <div class="flex space-x-2">
                                    <del class="text-gray-700 text-[18px] font-medium">9.999.000đ</del>
                                    <p class="text-red-600 font-medium">5.999.000đ</p>
                                </div>
                            </div>
                            <div class="group-hover:flex hidden transition-all duration-300 ease-in-out flex-col space-y-2 items-center absolute left-10 top-10">
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p class="">Thêm vào giỏ hàng</p>
                                    <p>
                                        <i class="fa-solid fa-cart-shopping text-white"></i>
                                    </p>
                                </div>
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p>Xem chi tiết</p>
                                    <p>
                                        <i class="fa-solid fa-eye text-white"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center justify-center group">
                            <div>
                                <img class="h-[200px] w-[200px] object-contain" src="/upload/aromaWhiteMaximumBeaumore250ml.jpg" alt="">
                            </div>
                            <div class="">
                                <p class="text-[15px] text-gray-800">Sản phẩm 1</p>
                                <div class="flex space-x-2">
                                    <del class="text-gray-700 text-[18px] font-medium">9.999.000đ</del>
                                    <p class="text-red-600 font-medium">5.999.000đ</p>
                                </div>
                            </div>
                            <div class="group-hover:flex hidden transition-all duration-300 ease-in-out flex-col space-y-2 items-center absolute left-10 top-10">
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p class="">Thêm vào giỏ hàng</p>
                                    <p>
                                        <i class="fa-solid fa-cart-shopping text-white"></i>
                                    </p>
                                </div>
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p>Xem chi tiết</p>
                                    <p>
                                        <i class="fa-solid fa-eye text-white"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center justify-center group">
                            <div>
                                <img class="h-[200px] w-[200px] object-contain" src="/upload/aromaWhiteMaximumBeaumore250ml.jpg" alt="">
                            </div>
                            <div class="">
                                <p class="text-[15px] text-gray-800">Sản phẩm 1</p>
                                <div class="flex space-x-2">
                                    <del class="text-gray-700 text-[18px] font-medium">9.999.000đ</del>
                                    <p class="text-red-600 font-medium">5.999.000đ</p>
                                </div>
                            </div>
                            <div class="group-hover:flex hidden transition-all duration-300 ease-in-out flex-col space-y-2 items-center absolute left-10 top-10">
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p class="">Thêm vào giỏ hàng</p>
                                    <p>
                                        <i class="fa-solid fa-cart-shopping text-white"></i>
                                    </p>
                                </div>
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p>Xem chi tiết</p>
                                    <p>
                                        <i class="fa-solid fa-eye text-white"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center justify-center group">
                            <div>
                                <img class="h-[200px] w-[200px] object-contain" src="/upload/aromaWhiteMaximumBeaumore250ml.jpg" alt="">
                            </div>
                            <div class="">
                                <p class="text-[15px] text-gray-800">Sản phẩm 1</p>
                                <div class="flex space-x-2">
                                    <del class="text-gray-700 text-[18px] font-medium">9.999.000đ</del>
                                    <p class="text-red-600 font-medium">5.999.000đ</p>
                                </div>
                            </div>
                            <div class="group-hover:flex hidden transition-all duration-300 ease-in-out flex-col space-y-2 items-center absolute left-10 top-10">
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p class="">Thêm vào giỏ hàng</p>
                                    <p>
                                        <i class="fa-solid fa-cart-shopping text-white"></i>
                                    </p>
                                </div>
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p>Xem chi tiết</p>
                                    <p>
                                        <i class="fa-solid fa-eye text-white"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center justify-center group">
                            <div>
                                <img class="h-[200px] w-[200px] object-contain" src="/upload/aromaWhiteMaximumBeaumore250ml.jpg" alt="">
                            </div>
                            <div class="">
                                <p class="text-[15px] text-gray-800">Sản phẩm 1</p>
                                <div class="flex space-x-2">
                                    <del class="text-gray-700 text-[18px] font-medium">9.999.000đ</del>
                                    <p class="text-red-600 font-medium">5.999.000đ</p>
                                </div>
                            </div>
                            <div class="group-hover:flex hidden transition-all duration-300 ease-in-out flex-col space-y-2 items-center absolute left-10 top-10">
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p class="">Thêm vào giỏ hàng</p>
                                    <p>
                                        <i class="fa-solid fa-cart-shopping text-white"></i>
                                    </p>
                                </div>
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p>Xem chi tiết</p>
                                    <p>
                                        <i class="fa-solid fa-eye text-white"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center justify-center group">
                            <div>
                                <img class="h-[200px] w-[200px] object-contain" src="/upload/aromaWhiteMaximumBeaumore250ml.jpg" alt="">
                            </div>
                            <div class="">
                                <p class="text-[15px] text-gray-800">Sản phẩm 1</p>
                                <div class="flex space-x-2">
                                    <del class="text-gray-700 text-[18px] font-medium">9.999.000đ</del>
                                    <p class="text-red-600 font-medium">5.999.000đ</p>
                                </div>
                            </div>
                            <div class="group-hover:flex hidden transition-all duration-300 ease-in-out flex-col space-y-2 items-center absolute left-10 top-10">
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p class="">Thêm vào giỏ hàng</p>
                                    <p>
                                        <i class="fa-solid fa-cart-shopping text-white"></i>
                                    </p>
                                </div>
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p>Xem chi tiết</p>
                                    <p>
                                        <i class="fa-solid fa-eye text-white"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center justify-center group">
                            <div>
                                <img class="h-[200px] w-[200px] object-contain" src="/upload/aromaWhiteMaximumBeaumore250ml.jpg" alt="">
                            </div>
                            <div class="">
                                <p class="text-[15px] text-gray-800">Sản phẩm 1</p>
                                <div class="flex space-x-2">
                                    <del class="text-gray-700 text-[18px] font-medium">9.999.000đ</del>
                                    <p class="text-red-600 font-medium">5.999.000đ</p>
                                </div>
                            </div>
                            <div class="group-hover:flex hidden transition-all duration-300 ease-in-out flex-col space-y-2 items-center absolute left-10 top-10">
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p class="">Thêm vào giỏ hàng</p>
                                    <p>
                                        <i class="fa-solid fa-cart-shopping text-white"></i>
                                    </p>
                                </div>
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p>Xem chi tiết</p>
                                    <p>
                                        <i class="fa-solid fa-eye text-white"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center justify-center group">
                            <div>
                                <img class="h-[200px] w-[200px] object-contain" src="/upload/aromaWhiteMaximumBeaumore250ml.jpg" alt="">
                            </div>
                            <div class="">
                                <p class="text-[15px] text-gray-800">Sản phẩm 1</p>
                                <div class="flex space-x-2">
                                    <del class="text-gray-700 text-[18px] font-medium">9.999.000đ</del>
                                    <p class="text-red-600 font-medium">5.999.000đ</p>
                                </div>
                            </div>
                            <div class="group-hover:flex hidden transition-all duration-300 ease-in-out flex-col space-y-2 items-center absolute left-10 top-10">
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p class="">Thêm vào giỏ hàng</p>
                                    <p>
                                        <i class="fa-solid fa-cart-shopping text-white"></i>
                                    </p>
                                </div>
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p>Xem chi tiết</p>
                                    <p>
                                        <i class="fa-solid fa-eye text-white"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center justify-center group">
                            <div>
                                <img class="h-[200px] w-[200px] object-contain" src="/upload/aromaWhiteMaximumBeaumore250ml.jpg" alt="">
                            </div>
                            <div class="">
                                <p class="text-[15px] text-gray-800">Sản phẩm 1</p>
                                <div class="flex space-x-2">
                                    <del class="text-gray-700 text-[18px] font-medium">9.999.000đ</del>
                                    <p class="text-red-600 font-medium">5.999.000đ</p>
                                </div>
                            </div>
                            <div class="group-hover:flex hidden transition-all duration-300 ease-in-out flex-col space-y-2 items-center absolute left-10 top-10">
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p class="">Thêm vào giỏ hàng</p>
                                    <p>
                                        <i class="fa-solid fa-cart-shopping text-white"></i>
                                    </p>
                                </div>
                                <div class="bg-[#252525] w-500px p-2 text-white text-[13px] flex items-center justify-center space-x-2">
                                    <p>Xem chi tiết</p>
                                    <p>
                                        <i class="fa-solid fa-eye text-white"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example" class="text-right mb-5">
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