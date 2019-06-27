(function ($) {
    "use strict";

    $(document).ready(function () {
        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 3; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
            items: 1,
            slideSpeed: 2000,
            autoplay: true,
            dots: true,
            responsiveRefreshRate: 200,
            navText: true,

        }).on('changed.owl.carousel', syncPosition);

        sync2
                .on('initialized.owl.carousel', function () {
                    sync2.find(".owl-item").eq(0).addClass("current");
                })
                .owlCarousel({
                    items: slidesPerPage,
                    dots: false,
                    smartSpeed: 200,
                    slideSpeed: 500,
                    margin: 0,
                    autoplay: true,
                    slideBy: 1, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                    responsiveRefreshRate: 100,
                    nav: true,
                    navText: ["<span class='flaticon-slim-left'></span>", "<span class='flaticon-slim-right'></span>"],

                }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
            //if you set loop to false, you have to restore this next line
            var current = el.item.index;

            //if you disable loop you have to comment this block
            // var count = el.item.count - 1;
            // var current = Math.round(el.item.index - (el.item.count / 2) - .5);

            // if (current < 0) {
            //     current = count;
            // }
            // if (current > count) {
            //     current = 0;
            // }

            //end block

            sync2
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
            var onscreen = sync2.find('.owl-item.active').length - 1;
            var start = sync2.find('.owl-item.active').first().index();
            var end = sync2.find('.owl-item.active').last().index();

            if (current > end) {
                sync2.data('owl.carousel').to(current, 100, true);
            }
            if (current < start) {
                sync2.data('owl.carousel').to(current - onscreen, 100, true);
            }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = $(this).index();
            sync1.data('owl.carousel').to(number, 300, true);
        });
    });

    var review = $('.player_info_item');
    if (review.length) {
        review.owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            autoplay: true,
            margin: 40,
            autoplayHoverPause: true,
            autoplayTimeout: 5000,
            nav: true,
            navText: [
                '<img src="../img/icon/left.svg" alt="">',
                '<img src="../img/icon/right.svg" alt="">'

            ],
            responsive: {
                0: {
                    margin: 15,
                },
                600: {
                    margin: 10,
                },
                1000: {
                    margin: 10,
                }
            }
        });
    }
    $('.popup-youtube, .popup-vimeo').magnificPopup({
        // disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });



    var review = $('.textimonial_iner');
    if (review.length) {
        review.owlCarousel({
            items: 1,
            loop: true,
            dots: true,
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 5000,
            nav: false,
            responsive: {
                0: {
                    margin: 15,
                },
                600: {
                    margin: 10,
                },
                1000: {
                    margin: 10,
                }
            }
        });
    }
    $(document).ready(function () {
        $('select').niceSelect();
    });
    // menu fixed js code
    $(window).scroll(function () {
        var window_top = $(window).scrollTop() + 1;
        if (window_top > 50) {
            $('.main_menu').addClass('menu_fixed animated fadeInDown');
        } else {
            $('.main_menu').removeClass('menu_fixed animated fadeInDown');
        }
    });

    $('.counter').counterUp({
        time: 2000
    });

//    $('.slider').slick({
//        slidesToShow: 1,
//        slidesToScroll: 1,
//        arrows: false,
//        speed: 300,
//        infinite: true,
//        asNavFor: '.slider-nav-thumbnails',
//        autoplay: true,
//        pauseOnFocus: true,
//        dots: true,
//    });
//
//    $('.slider-nav-thumbnails').slick({
//        slidesToShow: 3,
//        slidesToScroll: 1,
//        asNavFor: '.slider',
//        focusOnSelect: true,
//        infinite: true,
//        prevArrow: false,
//        nextArrow: false,
//        centerMode: true,
//        responsive: [
//            {
//                breakpoint: 480,
//                settings: {
//                    centerMode: false,
//                }
//            }
//        ]
//    });
    if (document.getElementById('default-select')) {
        $('select').niceSelect();
    }
    //remove active class from all thumbnail slides
    $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');

    //set active class to first thumbnail slides
    $('.slider-nav-thumbnails .slick-slide').eq(0).addClass('slick-active');

    // On before slide change match active thumbnail to current slide
    $('.slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        var mySlideNumber = nextSlide;
        $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
        $('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
    });

    //UPDATED 
    $('.slider').on('afterChange', function (event, slick, currentSlide) {
        $('.content').hide();
        $('.content[data-id=' + (currentSlide + 1) + ']').show();
    });


    $('.gallery_img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    if ($('.slider_prlx').length)
    {
        var homeBcg = $('.slider_prlx');

        var homeBcgScene = new ScrollMagic.Scene({
            triggerElement: homeBcg,
            triggerHook: 1,
            duration: "100%"
        })
                .setTween(TweenMax.to(homeBcg, 1, {y: '15%', ease: Power0.easeNone}))
                .addTo(ctrl);
    }

}(jQuery));


$(document).ready(function ()
{
    "use strict";

    var ctrl = new ScrollMagic.Controller();
    initParallax();
    function initParallax()
    {
        // Add parallax effect to home slider
        if ($('.slider_prlx').length)
        {
            var homeBcg = $('.slider_prlx');

            var homeBcgScene = new ScrollMagic.Scene({
                triggerElement: homeBcg,
                triggerHook: 1,
                duration: "100%"
            })
                    .setTween(TweenMax.to(homeBcg, 1, {y: '15%', ease: Power0.easeNone}))
                    .addTo(ctrl);
        }

        // Add parallax effect to every element with class prlx
        // Add class prlx_parent to the parent of the element
        if ($('.prlx_parent').length && $('.prlx').length)
        {
            var elements = $('.prlx_parent');

            elements.each(function ()
            {
                var ele = this;
                var bcg = $(ele).find('.prlx');

                var slideParallaxScene = new ScrollMagic.Scene({
                    triggerElement: ele,
                    triggerHook: 1,
                    duration: "200%"
                })
                        .setTween(TweenMax.from(bcg, 1, {y: '-30%', ease: Power0.easeNone}))
                        .addTo(ctrl);
            });
        }
    }
});