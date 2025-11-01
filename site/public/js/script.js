// Xử lý menu mobile
const topMenu = document.getElementById('ct-top-menu');
const toggleTopMenu = document.getElementById('ct-toggle-top-menu');

console.log("MINH HIEU");
console.log(topMenu);
console.log(toggleTopMenu);


document.addEventListener('click', (e) => {
  if(toggleTopMenu.contains(e.target)){
    topMenu.classList.toggle('hidden');
    topMenu.classList.toggle('ct-topmenu-expanded');
  }else{
    if(topMenu.classList.contains('ct-topmenu-expanded')){
      topMenu.classList.add('hidden');
      topMenu.classList.remove('ct-topmenu-expanded');
    }
  }
});

// Tìm kiếm theo range
$('.range input').click(function(event) {
    /* Act on the event */
    var price_range = $(this).val();
    window.location.href = "index.php?c=product&price-range=" + price_range;
});

