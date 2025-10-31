<?php require "layout/header.php" ?>

<!-- Slides -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img class="h-[440px] object-cover" src="/upload/slider_2.jpg" alt="">
        </div>
        <div class="swiper-slide">
            <img class="h-[440px] object-cover" src="/upload/slider_3.jpg" alt="">
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<!-- End Slides -->

<!-- Services -->
<div class="services flex justify-between items-center mx-6 py-5">
    <div
        class="flex items-center justify-center basis-1/4 mx-5 bg-[#F2F2F2] py-5 border-2 border-transparent transition-all duration-300 hover:border-[#EC0000]">
        <div class="pr-3">
            <img class="h-12 w-12 object-contain" src="/upload/chinhsach_3.png" alt="">
        </div>
        <div>
            <h3 class="uppercase font-bold text-[#252525] text-[16px]">7 Ngày đổi trả</h3>
            <p class="text-gray-900">Chăm sóc khách hàng cực tốt</p>
        </div>
    </div>
    <div
        class="flex items-center justify-center basis-1/4 mx-5 bg-[#F2F2F2] py-5 border-2 border-transparent transition-all duration-300 hover:border-[#EC0000]">
        <div class="pr-3">
            <img class="h-12 w-12 object-contain" src="/upload/chinhsach_1.webp" alt="">
        </div>
        <div>
            <h3 class="uppercase font-bold text-[#252525] text-[16px]">Miễn phí ship</h3>
            <p class="text-gray-900">Với dịch vụ giao hàng tiết kiệm</p>
        </div>
    </div>
    <div
        class="flex items-center justify-center basis-1/4 mx-5 bg-[#F2F2F2] py-5 border-2 border-transparent transition-all duration-300 hover:border-[#EC0000]">
        <div class="pr-3">
            <img class="h-12 w-12 object-contain" src="/upload/chinhsach_2.webp" alt="">
        </div>
        <div>
            <h3 class="uppercase font-bold text-[#252525] text-[16px]">Buôn bán như bán sỉ</h3>
            <p class="text-gray-900">Giá hợp lý nhất quả đất</p>
        </div>
    </div>
    <div
        class="flex items-center justify-center basis-1/4 mx-5 bg-[#F2F2F2] py-5 border-2 border-transparent transition-all duration-300 hover:border-[#EC0000]">
        <div class="pr-3">
            <img class="h-12 w-12 object-contain" src="/upload/chinhsach_4.webp" alt="">
        </div>
        <div>
            <h3 class="uppercase font-bold text-[#252525] text-[16px]">Chất lượng hàng đầu</h3>
            <p class="text-gray-900">Chăm sóc bạn như người thân</p>
        </div>
    </div>
</div>
<!-- End Services -->

<!-- Product -->
<main>
    <div class="max-w-[1200px] mx-auto">
        <div class="">
            <div class="mb-6">
                <h4 class="text-[18px] uppercase font-medium relative inline p-2 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-1 after:bg-[#EC0000] after:content['']">
                    Sản phẩm nổi bật
                </h4>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <?php foreach ($featuredProducts as $product) : ?>
                    <?php require "layout/product.php" ?>
                <?php endforeach ?>
                <!-- <div class="relative flex flex-col items-center justify-center group">
                    <div>
                        <img class="h-[200px] w-[200px] object-contain" src="/upload/suaTamSandrasMychai250ml.jpg" alt="">
                    </div>
                    <div class="">
                        <p class="text-[15px] text-gray-800">Kem làm trắng da 5 trong 1 Beaumore Secret Whitening Cream</p>
                        <p class="text-red-600 font-medium">200,000đ</p>
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
                        <img class="h-[200px] w-[200px] object-contain" src="/upload/suaTamSandrasMychai250ml.jpg" alt="">
                    </div>
                    <div class="">
                        <p class="text-[15px] text-gray-800">Kem làm trắng da 5 trong 1 Beaumore Secret Whitening Cream</p>
                        <p class="text-red-600 font-medium">200,000đ</p>
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
                        <img class="h-[200px] w-[200px] object-contain" src="/upload/suaTamSandrasMychai250ml.jpg" alt="">
                    </div>
                    <div class="">
                        <p class="text-[15px] text-gray-800">Kem làm trắng da 5 trong 1 Beaumore Secret Whitening Cream</p>
                        <p class="text-red-600 font-medium">200,000đ</p>
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
                </div> -->
            </div>
        </div>
        <div class="h-5"></div>
        <div class="">
            <div class="mb-6">
                <h4 class="text-[18px] uppercase font-medium relative inline p-2 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-1 after:bg-[#EC0000] after:content['']">
                    Sản phẩm mới nhất
                </h4>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <?php foreach ($latestProducts as $product) : ?>
                <?php  require "layout/product.php" ?>
                <?php endforeach ?>
                <!-- <div class="relative flex flex-col items-center justify-center group">
                    <div>
                        <img class="h-[200px] w-[200px] object-contain" src="/upload/suaTamSandrasMychai250ml.jpg" alt="">
                    </div>
                    <div class="">
                        <p class="text-[15px] text-gray-800">Kem làm trắng da 5 trong 1 Beaumore Secret Whitening Cream</p>
                        <p class="text-red-600 font-medium">200,000đ</p>
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
                        <img class="h-[200px] w-[200px] object-contain" src="/upload/suaTamSandrasMychai250ml.jpg" alt="">
                    </div>
                    <div class="">
                        <p class="text-[15px] text-gray-800">Kem làm trắng da 5 trong 1 Beaumore Secret Whitening Cream</p>
                        <p class="text-red-600 font-medium">200,000đ</p>
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
                        <img class="h-[200px] w-[200px] object-contain" src="/upload/suaTamSandrasMychai250ml.jpg" alt="">
                    </div>
                    <div class="">
                        <p class="text-[15px] text-gray-800">Kem làm trắng da 5 trong 1 Beaumore Secret Whitening Cream</p>
                        <p class="text-red-600 font-medium">200,000đ</p>
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
                </div> -->
            </div>
        </div>
        <div class="h-5"></div>

        <?php foreach($categoryProducts as $categoryName => $products): ?>
        <div class="">
            <div class="mb-6">
                <h4 class="text-[18px] uppercase font-medium relative inline p-2 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-1 after:bg-[#EC0000] after:content['']">
                    <?php echo $categoryName ?>
                </h4>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <?php foreach($products as $product) :  ?>
                <!-- <div class="relative flex flex-col items-center justify-center group">
                    <div>
                        <img class="h-[200px] w-[200px] object-contain" src="/upload/suaTamSandrasMychai250ml.jpg" alt="">
                    </div>
                    <div class="">
                        <p class="text-[15px] text-gray-800">Kem làm trắng da 5 trong 1 Beaumore Secret Whitening Cream</p>
                        <p class="text-red-600 font-medium">200,000đ</p>
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
                </div> -->
                <?php require "layout/product.php" ?>
                <?php endforeach ?>
            </div>
        </div>
        <div class="h-5"></div>
        <?php endforeach ?>
    </div>
</main>
<!-- End Product -->

<?php require "layout/footer.php" ?>