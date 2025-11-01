  <!-- Footer -->
  <footer class="bg-[#1F2022]">
      <div class="lg:max-w-[1200px] mx-auto py-5 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">
          <div class="">
              <h4 class="text-[#EC0000] text-[18px] uppercase font-bold">Danh mục</h4>
              <?php
                $categoryRepository = new CategoryRepository();
                $categories = $categoryRepository->getAll();
                ?>
              <ul class="text-white text-[14px]">
                  <?php foreach ($categories as $category) : ?>
                      <li><a href="#"><?php echo $category->getName() ?></a></li>
                  <?php endforeach ?>
              </ul>
          </div>
          <div class="">
              <h4 class="text-[#EC0000] text-[18px] uppercase font-bold">Liên kết</h4>
              <ul class="text-white text-[14px]">
                  <li>Sản phẩm</li>
                  <li>Chính sách đổi trả</li>
                  <li>Chính sách thanh toán</li>
                  <li>Chính sách giao hàng</li>
                  <li>Liên hệ</li>
              </ul>
          </div>
          <div class="">
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
          <div class="hidden sm:block">
              <h4 class="text-[#EC0000] text-[18px] uppercase font-bold">Bản tin</h4>
              <p class="text-white text-[14px]">Nhập Email của bạn để chúng tôi cung cấp thông tin nhanh nhất cho
                  bạn nhanh nhất về những sản phẩm mới!</p>
              <div class="flex">
                  <input
                      class="border border-gray-300 py-2 px-3 text-gray-700 w-[300px] h-10 rounded-tl-md rounded-bl-md bg-[#EFF0F5] outline-0"
                      type="" placeholder="Nhập từ khóa tìm kiếm">
                  <button class="bg-red-600 h-10 w-10 rounded-tr-md rounded-br-md text-white">
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

  <!-- Swiper JS -->
  <script>
      const swiper = new Swiper(".mySwiper", {
          loop: true, 
          autoplay: {
              delay: 2000, 
              disableOnInteraction: false, 
          },
          navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
          },
      });
  </script>
  <script src="/site/public/vendor/jquery-3.7.1.min.js"></script>
  <script src="/site/public/vendor/popper.min.js"></script>
  <script src="/site/public/js/script.js"></script>
  </body>

  </html>