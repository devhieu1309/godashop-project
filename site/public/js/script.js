// Xử lý menu mobile
const topMenu = document.getElementById("ct-top-menu");
const toggleTopMenu = document.getElementById("ct-toggle-top-menu");

console.log("MINH HIEU");
console.log(topMenu);
console.log(toggleTopMenu);

document.addEventListener("click", (e) => {
  if (toggleTopMenu.contains(e.target)) {
    topMenu.classList.toggle("hidden");
    topMenu.classList.toggle("ct-topmenu-expanded");
  } else {
    if (topMenu.classList.contains("ct-topmenu-expanded")) {
      topMenu.classList.add("hidden");
      topMenu.classList.remove("ct-topmenu-expanded");
    }
  }
});

// Tìm kiếm theo range
$(".range input").click(function (event) {
  /* Act on the event */
  var price_range = $(this).val();
  window.location.href = "index.php?c=product&price-range=" + price_range;
});

// Cập nhật giá trị của 1 param cụ thể
function getUpdatedParam(k, v) {
  // ví dụ: sort, price-asc
  var params = {};

  // Lấy toàn bộ query hiện tại của URL (ví dụ: ?c=product&category_id=5&sort=price-desc)
  window.location.search.replace(
    /[?&]+([^=&]+)=([^&]*)/gi,
    function (str, key, value) {
      params[key] = value;
    }
  );

  // Cập nhật hoặc xóa param cụ thể
  params[k] = v;
  if (v == "") {
    delete params[k];
  }

  // Gộp lại thành chuỗi query mới
  var x = []; // là array
  for (p in params) {
    x.push(p + "=" + params[p]);
  }

  // Trả về chuỗi query mới, ví dụ: c=product&category_id=5&sort=price-asc
  return (str_param = x.join("&"));
}

// Tìm kiếm và sắp xếp sản phẩm
$("#sort-select").change(function (event) {
  var str_param = getUpdatedParam("sort", $(this).val());
  window.location.href = "index.php?" + str_param;
});

// Paging
function goToPage(page) {
    var str_param = getUpdatedParam("page", page);
    window.location.href = "index.php?" + str_param;
}

