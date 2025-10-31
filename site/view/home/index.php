<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Godashop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/site/public/css/output.css">
    <link rel="stylesheet" href="/site/public/css/style.css">
</head>

<body>
    <!-- Modal Register -->
    <el-dialog>
        <dialog id="register" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
            <el-dialog-backdrop class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

            <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
                <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                    <form action="#">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <h2 class="text-[20px] font-semibold mb-4 text-[#EC0000] text-center">Đăng ký</h2>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Họ và tên"
                                class="w-full my-3 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 transition duration-200" />
                            <input
                                type="text"
                                id="phone"
                                name="phone"
                                placeholder="Số điện thoại"
                                class="w-full my-3 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 transition duration-200" />
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Email"
                                class="w-full my-3 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 transition duration-200" />
                            <input
                                type="text"
                                id="password"
                                name="password"
                                placeholder="Mật khẩu"
                                class="w-full my-3 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 transition duration-200" />
                            <input
                                type="text"
                                id="confirm_password"
                                name="confirm_password"
                                placeholder="Nhập lại mật khẩu"
                                class="w-full my-3 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 transition duration-200" />
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                            <button type="button" command="close" commandfor="register" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 sm:ml-3 sm:w-auto">Đăng ký</button>
                            <button type="button" command="close" commandfor="register" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Hủy</button>
                        </div>
                    </form>
                </el-dialog-panel>
            </div>
        </dialog>
    </el-dialog>
    <!-- End Modal Register -->

    <!-- Modal Login -->
    <el-dialog>
        <dialog id="login" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
            <el-dialog-backdrop class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

            <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
                <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                    <form action="#">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <h2 class="text-[20px] font-semibold mb-4 text-[#EC0000] text-center">Đăng nhập</h2>
                            <div class="flex items-center justify-evenly">
                                <a class="bg-[#C61015] flex items-center justify-center p-2 rounded-md" href="">
                                    <i class="fa-brands fa-google text-white text-[14px]"></i>
                                    <p class="text-white font-semibold text-[14px]">Đăng nhập bằng Google</p>
                                </a>
                                <a class="bg-[#3A5898] flex items-center justify-center p-2 rounded-md" href="">
                                    <i class="fa-brands fa-facebook-f text-white text-[14px]"></i>
                                    <p class="text-white font-semibold text-[14px]">Đăng nhập bằng Facebook</p>
                                </a>
                            </div>
                            <input
                                type="email"
                                id="eamil"
                                name="email"
                                placeholder="Email"
                                class="w-full my-3 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 transition duration-200" />
                            <input
                                type="text"
                                id="password"
                                name="password"
                                placeholder="Mật khẩu"
                                class="w-full my-3 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 transition duration-200" />
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                            <button type="button" command="close" commandfor="login" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 sm:ml-3 sm:w-auto">Đăng nhập</button>
                        </div>
                        <div class="p-6 text-[14px] text-[#2b8edf] underline flex justify-between items-center">
                            <a href="">Bạn chưa là thành viên? Đăng ký ngay!</a>
                            <a href="">Quên mật khẩu?</a>
                        </div>
                    </form>
                </el-dialog-panel>
            </div>
        </dialog>
    </el-dialog>
    <!-- End Modal Login -->

    <div class="font-roboto">
        <!-- Header -->
        <header class="header">
            <div
                class="header-top relative bg-[#252525] py-1 before:absolute before:bottom-0 before:left-0 before:right-0 before:content-[''] before:h-0.5 before:bg-[#AB17B3]">
                <div class="flex justify-between">
                    <ul class="lg:flex px-4 space-x-3 hidden">
                        <li>
                            <a href="https://www.facebook.com/"><img class="h-[25px] w-[25px] object-contain"
                                    src="/upload/icons8-facebook-30.png" alt="Facebook"></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/"><img class="h-[25px] w-[25px] object-contain"
                                    src="/upload/icons8-instagram-30.png" alt="Instagram"></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/"><img class="h-[25px] w-[25px] object-contain"
                                    src="/upload/icons8-youtube-30.png" alt="Youtube"></a>
                        </li>
                    </ul>

                    <ul class="lg:hidden block px-4">
                        <li>
                            <a href="">
                                <i class="fa-solid fa-bars text-white"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="text-white flex space-x-4 px-4">
                        <li><button command="show-modal" commandfor="register">Đăng ký</button></li>
                        <li><button command="show-modal" commandfor="login">Đăng nhập</button></li>
                    </ul>
                </div>
            </div>
            <div class="header-main lg:max-w-[1200px] md:max-w-[900px] mx-auto pt-1">
                <div class="flex md:flex-row sm:flex-col justify-between items-center">
                    <div class="lg:basis-1/3">
                        <img class="w-[390px] h-[165px] object-cover" src="/upload/goda450x170_1.jpg">
                    </div>
                    <div class="lg:basis-1/3 hidden lg:block">
                        <img class="w-[400px] h-[170px] object-cover" src="/upload/godakeben450x170.jpg">
                    </div>
                    <div class="lg:basis-1/3 flex flex-col space-y-6">
                        <div>
                            <p class="text-[#252525]">Hotline: <span
                                    class="text-red-600 font-semibold">0352.448.746</span></p>
                            <p class="text-[#252525]">Email: <span
                                    class="text-gray-700 font-light">pmhieudev1309@gmail.com</span></p>
                        </div>
                        <div class="flex">
                            <input
                                class="border border-gray-300 py-2 px-3 text-gray-700 w-[300px] h-10 rounded-tl-md rounded-bl-md bg-[#EFF0F5] outline-0"
                                type="" placeholder="Nhập từ khóa tìm kiếm">
                            <button class="bg-red-600 h-10 w-10 rounded-tr-md rounded-br-md">
                                <i class="fa-solid fa-magnifying-glass text-white"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <!-- Navbar -->
        <nav class="navbar bg-[#EC0000]">
            <!-- <nav class="navbar bg-amber-400"> -->
            <!-- <div class="bg-red-500">123</div> -->
            <div
                class="max-w-[1200px] lg:max-w-[970px] md:max-w-[870px] sm:max-w-[630px] mx-auto flex justify-between items-center h-12">
                <ul class="hidden md:flex text-white font-bold text-[15px] space-x-5">
                    <li class="text-yellow-400"><a href="">Trang chủ</a></li>
                    <li class="hover:text-yellow-400"><a href="">Sản phẩm</a></li>
                    <li class="hover:text-yellow-400"><a href="">Chính sách đổi trả</a></li>
                    <li class="hover:text-yellow-400"><a href="">Chính sách thanh toán</a></li>
                    <li class="hover:text-yellow-400"><a href="">Chinh sách giao hàng</a></li>
                    <li class="hover:text-yellow-400"><a href="">Liên hệ</a></li>
                </ul>

                <ul class="text-white font-bold text-[15px] block md:hidden">
                    <li>
                        <a href="#">Trải nghiệm cùng sản phẩm của Goda</a>
                    </li>
                </ul>

                <ul class="h-full">
                    <li class="bg-gray-800 text-white h-full w-[60px] flex items-center justify-center space-x-0.5">
                        <a href="">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                        <span>0</span>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->

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
                        </div>
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
                        </div>
                    </div>
                </div>
                <div class="h-5"></div>
                <div class="">
                    <div class="mb-6">
                        <h4 class="text-[18px] uppercase font-medium relative inline p-2 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-1 after:bg-[#EC0000] after:content['']">
                            Kem chống nắng
                        </h4>
                    </div>
                    <div class="grid grid-cols-4 gap-4">
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
                        </div>
                    </div>
                </div>
                <div class="h-5"></div>
                <div class="">
                    <div class="mb-6">
                        <h4 class="text-[18px] uppercase font-medium relative inline p-2 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-1 after:bg-[#EC0000] after:content['']">
                            Kem dưỡng da
                        </h4>
                    </div>
                    <div class="grid grid-cols-4 gap-4">
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
                        </div>
                    </div>
                </div>
                <div class="h-5"></div>
                <div class="">
                    <div class="mb-6">
                        <h4 class="text-[18px] uppercase font-medium relative inline p-2 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-1 after:bg-[#EC0000] after:content['']">
                            Kem trị mụn
                        </h4>
                    </div>
                    <div class="grid grid-cols-4 gap-4">
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
                    </div>
                </div>
                <div class="h-5"></div>
                <div class="">
                    <div class="mb-6">
                        <h4 class="text-[18px] uppercase font-medium relative inline p-2 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-1 after:bg-[#EC0000] after:content['']">
                            Kem trị thâm nám
                        </h4>
                    </div>
                    <div class="grid grid-cols-4 gap-4">
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
                        </div>
                    </div>
                </div>
                <div class="h-5"></div>
                <div class="">
                    <div class="mb-6">
                        <h4 class="text-[18px] uppercase font-medium relative inline p-2 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-1 after:bg-[#EC0000] after:content['']">
                            Sửa rửa mặt
                        </h4>
                    </div>
                    <div class="grid grid-cols-4 gap-4">
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
                    </div>
                </div>
                <div class="h-5"></div>
                <div class="">
                    <div class="mb-6">
                        <h4 class="text-[18px] uppercase font-medium relative inline p-2 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-1 after:bg-[#EC0000] after:content['']">
                            Sửa tắm
                        </h4>
                    </div>
                    <div class="grid grid-cols-4 gap-4">
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
                        </div>
                    </div>
                </div>
                <div class="h-5"></div>
            </div>
        </main>
        <!-- End Product -->

        <!-- Footer -->
        <footer class="bg-[#1F2022]">
            <div class="w-[1200px] mx-auto py-5 flex justify-between">
                <div class="basis-1/4">
                    <h4 class="text-[#EC0000] text-[18px] uppercase font-bold">Danh mục</h4>
                    <ul class="text-white text-[14px]">
                        <li>Kem chống nắng</li>
                        <li>Kem dưỡng da</li>
                        <li>Kem trị mụn</li>
                        <li>Kem trị thâm</li>
                        <li>Sửa rửa mặt</li>
                        <li>Sửa tắm</li>
                    </ul>
                </div>
                <div class="basis-1/4">
                    <h4 class="text-[#EC0000] text-[18px] uppercase font-bold">Liên kết</h4>
                    <ul class="text-white text-[14px]">
                        <li>Sản phẩm</li>
                        <li>Chính sách đổi trả</li>
                        <li>Chính sách thanh toán</li>
                        <li>Chính sách giao hàng</li>
                        <li>Liên hệ</li>
                    </ul>
                </div>
                <div class="basis-1/4">
                    <h4 class="text-[#EC0000] text-[18px] uppercase font-bold">Liên hệ với chúng tôi</h4>
                    <p class="text-white text-[14px]">Phone: 0352.448.746</p>
                    <p class="text-white text-[14px]">Mail: pmhieudev1309@gmail.com</p>
                    <ul class="flex space-x-2">
                        <li>
                            <a href="https://www.facebook.com/"><img class="h-5 w-5 object-contain"
                                    src="/upload/icons8-facebook-30.png" alt="Facebook"></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/"><img class="h-5 w-5 object-contain"
                                    src="/upload/icons8-instagram-30.png" alt="Instagram"></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/"><img class="h-5 w-5 object-contain"
                                    src="/upload/icons8-youtube-30.png" alt="Youtube"></a>
                        </li>
                    </ul>
                </div>
                <div class="basis-1/4">
                    <h4 class="text-[#EC0000] text-[18px] uppercase font-bold">Bản tin</h4>
                    <p class="text-white text-[14px]">Nhập Email của bạn để chúng tôi cung cấp thông tin nhanh nhất cho
                        bạn nhanh nhất về những sản phẩm mới!</p>
                    <div class="flex">
                        <input
                            class="border border-gray-300 py-2 px-3 text-gray-700 w-[300px] h-10 rounded-tl-md rounded-bl-md bg-[#EFF0F5] outline-0"
                            type="" placeholder="Nhập từ khóa tìm kiếm">
                        <button class="bg-red-600 h-10 w-10 rounded-tr-md rounded-br-md">
                            Gửi
                        </button>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>