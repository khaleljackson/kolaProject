
var swiper = new Swiper('.web .header .swiper-container', {
    effect: 'fade',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    autoplay: {
      delay: 1500,
    },
    speed: 1000,
    navigation: {
      nextEl: ".web .header .slider .control .buLeft",
      prevEl: ".web .header .slider .control .buRight",
    }
});

var swiper = new Swiper('.web .business-gallery .swiper-container', {
    effect: 'EffectCube',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',  
    navigation: {
      nextEl: ".web .business-gallery .control .buLeft",
      prevEl: ".web .business-gallery .control .buRight",
    },
    autoplay: {
      delay: 1000,
    },
    speed: 1500,
    pagination: {
      el: '.swiper-pagination',
    },
});