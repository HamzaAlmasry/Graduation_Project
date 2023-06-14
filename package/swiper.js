



    
var swiper = new Swiper(".swiper-slee", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true ,
    },
    // navigation: {
    //     nextEl : ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    //     },
    breakpoints: {
      600: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1100: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1224: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
    },
  });











