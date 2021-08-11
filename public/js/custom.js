$(document).ready(function(){
    $('.dct-banner-section').slick({
        dots: false,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<div class="slider-arrow slider-prev fa fa-angle-left"></div>',
        nextArrow: '<div class="slider-arrow slider-next fa fa-angle-right"></div>',
});

    $('.dct-products-wrapper-inner').slick({
        dots: false,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<div class="slider-arrow slider-prev fa fa-angle-left"></div>',
        nextArrow: '<div class="slider-arrow slider-next fa fa-angle-right"></div>',
    });

});
