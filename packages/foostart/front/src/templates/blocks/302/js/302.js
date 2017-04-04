
var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',  // tao ra cac pagination
    nextButton: '.swiper-button-next', // tao ra nút next
    prevButton: '.swiper-button-prev', // tao ra nút prev
    paginationClickable: true,         // Khi click vào nút pagination slide sẽ chuyển trang
    spaceBetween: 30,                  // Khoảng cách giữa các slide tính bằng px
    centeredSlides: true,
    autoplay: 2500,                    // thời gian chạy
    autoplayDisableOnInteraction: false,
    loop: true                         // lặp lại khi chạy
});

   


