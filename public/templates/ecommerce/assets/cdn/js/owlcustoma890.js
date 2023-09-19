/*global jQuery, window*/
$(document).ready(function () {

    if ($(".p-home").hasClass("p-mobile")) {

    }
    else {
        fOwlCarousel_Product($(".product-list.pList-olw"));

        fOwlCarousel_Item3($('.widget-product-banner .banner-list'));

        /*fOwlCarousel_Item1($("#pages-slide"));*/
        fOwlCarousel_Item1($('.owlRespon-1 .banner-list'));

        fOwlCarousel_Item2($('.owlRespon-2 .banner-list'));
        fOwlCarousel_Item2_10($('.owlRespon-2-10 .banner-list'));
        
        fOwlCarousel_Item3($('.owlRespon-3 .banner-list'));
        fOwlCarousel_Item3_30($('.owlRespon-3-30 .banner-list'));
    }

    fOwlCarousel_Product4_Auto($(".product-flashsale").find(".product-list-olw"));
    fOwlCarousel_Product4_Auto($(".product-bestseller").find(".product-list"));

    fOwlCarousel_Product($(".product-viewed").find(".product-list"));

    fOwlCarousel_Product($(".cuspage-product").find(".product-list-olw"));

    fOwlCarousel_Product4($(".newsitem-product").find(".product-list-olw"));

    fOwlCarousel_Product3($(".newsitem-product").find(".product-list-olw-3"));

    fOwlCarousel_Product4($(".product-list.pList-olw-4"));

    fOwlCarousel_Item1_Loop($('#home-slide').find(".home-slide .banner-list"));

    fOwlCarousel_Item1_Loop($('#pdetail-images').find(".pdetail-slideproduct"));

    /*fOwlCarousel_Item2($('#banner-allpage').find(".banner-allpage"));*/
    fOwlCarousel_Item2($('.cuspage-banner'));

    fOwlCarousel_Menu($(".nav-newscate"));

    if ($('.product-images-item').parent().length) {
        var owlProductImages = $('.product-images-item').parent();
        owlProductImages.owlCarousel({
            margin: 0,
            autoWidth: true,
            loop: true,
            nav: true,
            navText: ['', ''],
            slideBy: 2,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 5
                }
            }
        });
    };

});

function fOwlCarousel_Product(obj) {
    if (obj.length) {
        obj.owlCarousel({
            margin: 0,
            loop: true,
            nav: true,
            navText: ['', ''],
            responsiveClass: true,
            responsive: {
                0: { items: 2.3, nav: true },
                768: { items: 4 },
                992: { items: 5 }
            }
        });
    }
};

function fOwlCarousel_Product4_Auto(obj) {
    if (obj.length) {
        obj.owlCarousel({
            margin: 0,
            autoplay: false,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            loop: true,
            nav: true,
            navText: ['', ''],
            responsiveClass: true,
            responsive: {
                0: { items: 1.8, nav: true },
                768: { items: 3.2 },
                992: { items: 4 }
            }
        });
    }
};

function fOwlCarousel_Product4(obj) {
    if (obj.length) {
        obj.owlCarousel({
            margin: 0,
            loop: true,
            nav: true,
            navText: ['', ''],
            responsiveClass: true,
            responsive: {
                0: { items: 1.8, nav: true },
                768: { items: 3.2 },
                992: { items: 4 }
            }
        });

    }
};

function fOwlCarousel_Product3(obj) {
    if (obj.length) {
        obj.owlCarousel({
            margin: 0,
            loop: true,
            nav: true,
            navText: ['', ''],
            responsiveClass: true,
            responsive: {
                0: { items: 2.3, nav: true },
                768: { items: 2.3 },
                992: { items: 3 }
            }
        });
    }
};

function fOwlCarousel_Item1_Loop(obj) {
    if (obj.length) {
        obj.owlCarousel({
            margin: 0,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            loop: true,
            nav: true,
            navText: ['', ''],
            responsiveClass: true,
            responsive: {
                0: { items: 1, nav: true },
                768: { items: 1 },
                992: { items: 1 },
                1170: { items: 1 }
            }
        });
    }
};

function fOwlCarousel_Item1(obj) {
    if (obj.length) {
        obj.owlCarousel({
            margin: 0,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            loop: false,
            nav: true,
            navText: ['', ''],
            responsiveClass: true,
            responsive: {
                0: { items: 1, nav: true },
                768: { items: 1 },
                992: { items: 1 },
                1170: { items: 1 }
            }
        });
    }
};

function fOwlCarousel_Item2(obj) {
    if (obj.length) {
        obj.owlCarousel({
            margin: 0,
            loop: false,
            nav: true,
            navText: ['', ''],
            responsiveClass: true,
            responsive: {
                0: { items: 1, nav: false },
                768: { items: 2 },
                992: { items: 2 },
                1170: { items: 2 }
            }
        });
    }
};

function fOwlCarousel_Item2_10(obj) {
    if (obj.length) {
        obj.owlCarousel({
            margin: 10,
            loop: false,
            nav: true,
            navText: ['', ''],
            responsiveClass: true,
            responsive: {
                0: { items: 1, nav: false },
                768: { items: 2 },
                992: { items: 2 },
                1170: { items: 2 }
            }
        });
    }
};

function fOwlCarousel_Item3(obj) {
    if (obj.length) {
        obj.owlCarousel({
            margin: 6,
            loop: false,
            nav: true,
            navText: ['', ''],
            responsiveClass: true,
            responsive: {
                0: { items: 1, nav: false },
                768: { items: 2 },
                992: { items: 3 },
                1170: { items: 3 }
            }
        });
    }
};

function fOwlCarousel_Item3_30(obj) {
    if (obj.length) {
        obj.owlCarousel({
            margin: 30,
            loop: false,
            nav: true,
            navText: ['', ''],
            responsiveClass: true,
            responsive: {
                0: { items: 1, nav: false },
                768: { items: 2 },
                992: { items: 3 },
                1170: { items: 3 }
            }
        });
    }
};

function fOwlCarousel_Menu(obj) {
    if (obj.length) {
        obj.owlCarousel({
            margin: 0,
            autoWidth: true,
            loop: false,
            nav: true,
            navText: ['', ''],
            slideBy: 2,
            responsiveClass: true,
            responsive: {
                0: { items: 4.2, nav: false },
                576: { items: 5.2 },
                768: { items: 6.2 },
                992: { items: 8, nav: false, loop: false }
            }
        });
    };
};