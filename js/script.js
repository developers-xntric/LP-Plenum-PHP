let ele_mswiper = new Swiper(".elemina_slider_mobile", {
    loop: true,
    slidesPerView: 1,
    autoHeight: true, 
    autoplay: {
        delay: 30000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

let kef_mswiper = new Swiper(".key_feature_slider_mobile", {
    loop: true,
    slidesPerView: 1,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination-key",
        clickable: true,
    },
    breakpoints: {
        0: { // Mobile version
            autoHeight: true,
        },
        768: { // Desktop version
            autoHeight: false,
        },
    },
});

let bannersmallswiper = new Swiper(".baner_point_slider", {
    loop: true,
    slidesPerView: 1,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});

// Slider 1 – Leading Enterprise
let swiper = new Swiper(".leading_enterprise_slider", {
    loop: true,
    spaceBetween: 30,
    slidesPerView: 6,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: { // Mobile view
            slidesPerView: 3,
            spaceBetween: 20,
        },
        768: { // Desktop view
            slidesPerView: 6,
            spaceBetween: 30,
        },
    },
});

// Slider 2 – Benefits Pay
let benefitsSwiper = new Swiper(".benfits-pay-slider", {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 30,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: { // Mobile view
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: { // Desktop view
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },
    navigation: {
        nextEl: ".benfits-pay-next",
        prevEl: ".benfits-pay-prev",
    },
    watchOverflow: true, 
});

// Testimonials slider
let testiSwiper = new Swiper(".testimonials_slider", {
    loop: true,
    slidesPerView: 1,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".testimonial-next",
        prevEl: ".testimonial-prev",
    },
    watchOverflow: true,
    breakpoints: {
        0: { // Mobile version
            autoHeight: true,
        },
        768: { // Desktop version
            autoHeight: false, 
        },
    },
});


