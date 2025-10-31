<div class="relative flex flex-col items-center justify-center group">
                        <div>
                            <img class="h-[200px] w-[200px] object-contain" src="/upload/<?php echo $product->getFeaturedImage() ?>" alt="">
                        </div>
                        <div class="">
                            <p class="text-[15px] text-gray-800"><?php echo $product->getName() ?></p>
                            <div class="flex space-x-2">
                                <?php if ($product->getDiscountPercentage() != 0) :  ?>
                                    <del class="text-gray-700 text-[18px] font-medium"><?php echo number_format($product->getPrice()) ?> đ</del>
                                <?php endif ?>
                                <p class="text-red-600 font-medium"><?php echo number_format(($product->getDiscountPercentage() != 0) ? $product->getSalePrice() : $product->getPrice()) ?>đ</p>
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