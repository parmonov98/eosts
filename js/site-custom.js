// $(window).load(function () {

//     'use strict';

//     $("#pageloader").delay(200).fadeOut("slow");
//     $(".loader-item").delay(200).fadeOut();

// });
/* ==============================================
Custom Javascript
=============================================== */

$(document).ready(function () {
    'use strict'

    // On Scroll Animation
    // new WOW().init();


    // Dropdown Menu For Mobile
    $('.dropdown-menu a.dropdown-toggle-mob').on('click', function (e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
            $('.dropdown-submenu .show').removeClass("show");
        });

        return false;
    });

    $('[data-toggle="tooltip"]').tooltip();


    // On Scroll Header Style One
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.header-fullpage').addClass('fixed');
        } else {
            $('.header-fullpage').removeClass('fixed');
        }
    });

    $('#search_home, .overlay-close').on("click", function ($e) {
        $e.preventDefault();
        $(".overlay").toggleClass("open");
    });

    // On Scroll Back To Top Arrow
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {

            $('#mkdf-back-to-top').addClass('on');
            // $('.navbar-brand').addClass('show-branch')
        } else {
            // $('.navbar-brand').removeClass('show-branch')
            // $('.navbar-brand-mobile').addClass('hidden-mobile-brand')
            $('#mkdf-back-to-top').removeClass('on');
        }
    });

    $('#mkdf-back-to-top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    // Flickr Photostream
    // $('#basicuse').jflickrfeed({
    //     limit: 9,
    //     qstrings: {
    //         id: '52617155@N08'
    //     },
    //     itemTemplate: '<li><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
    // });

    // Bootstrap Collapse
    // $('.collapse').on('shown.bs.collapse', function(){
    //     $(this).parent().find(".icofont-rounded-down").removeClass("icofont-rounded-down").addClass("icofont-rounded-up");
    //     }).on('hidden.bs.collapse', function(){
    //     $(this).parent().find(".icofont-rounded-up").removeClass("icofont-rounded-up").addClass("icofont-rounded-down");
    // });

    $('.toggle').click(function () {

        // alert();

        $('.toggle').removeClass("arrow-down");

        if (!$(this).next().hasClass('show')) {
            $(this).parent().children('.collapse.show').collapse('hide');
            $(this).toggleClass('arrow-down');

        }
        $(this).next().collapse('toggle');


    });


    // our gallaery
    (function ($, window, document, undefined) {
        'use strict';
        console.log(typeof $("#js-styl2-mosaic"));
        if ($("#js-styl2-mosaic")) {
            $("#js-styl2-mosaic").cubeportfolio({
                filters: "#js-filters-styl2-mosaic",
                loadMore: "#js-loadMore-styl2-mosaic",
                loadMoreAction: "click",
                layoutMode: "mosaic",
                sortToPreventGaps: !0,
                defaultFilter: "*",
                animationType: "quicksand",
                gapHorizontal: 0,
                gapVertical: 0,
                gridAdjustment: "responsive",
                mediaQueries: [{
                    width: 1500,
                    cols: 5
                }, {
                    width: 1100,
                    cols: 4
                }, {
                    width: 800,
                    cols: 3
                }, {
                    width: 480,
                    cols: 2
                }, {
                    width: 320,
                    cols: 1
                }],
                caption: "zoom",
                displayType: "fadeIn",
                displayTypeSpeed: 400
            });
        }
    })(jQuery, window, document);


    $("#home-client-testimonials").owlCarousel({
        items: 2,
        margin: 30,
        loop: true,
        nav: true,
        slideBy: 1,
        dots: false,
        center: false,
        autoplay: true,
        autoheight: true,
        navText: ['<i class="icofont-thin-left"></i>', '<i class="icofont-thin-right"></i>'],
        responsive: {
            320: {
                items: 1,
            },
            480: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 2,
                loop: true,
            },
            1200: {
                items: 2,
                loop: true,
            }
        }
    });

    $("#client-testimonials-bg").owlCarousel({
        items: 1,
        margin: 30,
        loop: true,
        nav: true,
        slideBy: 1,
        dots: false,
        center: false,
        autoplay: true,
        autoheight: true,
        navText: ['<i class="icofont-thin-left"></i>', '<i class="icofont-thin-right"></i>']
    });

    $("#home-clients").owlCarousel({
        items: 2,
        margin: 30,
        loop: true,
        nav: false,
        slideBy: 1,
        dots: false,
        center: false,
        autoplay: true,
        autoheight: true,
        navText: ['<i class="icofont-thin-left"></i>', '<i class="icofont-thin-right"></i>'],
        responsive: {
            320: {
                items: 2,
            },
            600: {
                items: 3,
            },
            767: {
                items: 4,
            },
            1000: {
                items: 4,
                loop: true,
            },
            1200: {
                items: 6,
                loop: true,
            }
        }
    });

    /* Conter */
    // $('.counter').counterUp({
    //     delay: 10,
    //     time: 1000,

    // });


    // Google Map
    $("#map_extended").gMap({
        markers: [{
            address: "",
            html: '<h4>Office</h4>' +
                '<address>' +
                '<div>' +
                '<div><b>Address:</b></div>' +
                '<div>Envato Pty Ltd, 13/2<br> Elizabeth St Melbourne VIC 3000,<br> Australia</div>' +
                '</div>' +
                '<div>' +
                '<div><b>Phone:</b></div>' +
                '<div>+1 (408) 786 - 5117</div>' +
                '</div>' +
                '<div>' +
                '<div><b>Fax:</b></div>' +
                '<div>+1 (408) 786 - 5227</div>' +
                '</div>' +
                '<div>' +
                '<div><b>Email:</b></div>' +
                '<div><a href="mailto:info@well&spa.com">info@well&spa.com</a></div>' +
                '</div>' +
                '</address>',
            latitude: 40.1099556,
            longitude: 64.6789192,
            icon: {
                image: "images/pin.png",
                iconsize: [35, 48],
                iconanchor: [17, 48]
            }
        },],
        icon: {
            image: "images/pin.png",
            iconsize: [35, 48],
            iconanchor: [17, 48]
        },
        latitude: 40.1099556,
        longitude: 64.6789192,
        zoom: 16
    });


});
