console.log('1123'); 

import Swiper from 'swiper';
import 'swiper/swiper-bundle.min.css';





jQuery(document).ready(function($) {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });


    $(document).foundation();
});


