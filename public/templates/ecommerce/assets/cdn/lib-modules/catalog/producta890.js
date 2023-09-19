/*global jQuery, window*/
$(document).ready(function () {

    /*saveProductId*/
    setTimeout(function () {
        if ($("#saveProductList input#saveCategoryId").val() > 0) {

            var saveCategoryId = parseFloat($("input#saveCategoryId").val());
            var saveBrandId = parseFloat($("input#saveBrandId").val());
            var saveFilterId = parseFloat($("input#saveFilterId").val());

            var saveBrands = parseFloat($("input#saveBrands").val());
            var saveFilters = parseFloat($("input#saveFilters").val());

            var postData = {
                id: saveCategoryId,
                id1: saveBrandId,
                id2: saveFilterId,
                str: saveBrands,
                str1: saveFilters
            }

            $.ajax({
                type: "POST",
                url: "/api/catalogs/saveFilterCategory",
                data: JSON.stringify(postData),
                contentType: "application/json"
            }).done(function (msg) {

                $.ajax({
                    type: "POST",
                    url: "api/recentlyviewed/category",
                    data: JSON.stringify(postData),
                    contentType: "application/json"
                }).done(function (data) {
                    $(".category-viewed").html(data);
                }).fail(function (error) {
                    console.log(error)
                });

                console.log(msg)

            }).fail(function (error) {
                console.log(error)
            });
        };
    }, 1000);
    /*saveProductId*/

    /*fGetProducts_SetupActive();*/

    /*fGetProducts_Hover();*/

    /*fGetProducts_Click();*/
    fGetProducts_Click();

    /*Name: fLimitMenu_V1();*/
    fLimitMenu_V1();
    $(window).resize(function () {
        fLimitMenu_V1();
    });

    /*Icon: fLimitMenu_V2();*/
    fLimitMenu_V2();

});
/*fGetProducts_Hover()*/
function fGetProducts_Hover() {
    $('.p-home .wrapbox-pList').mouseenter(function () {
        $(this).find(".wrapbox-getProducts").each(function () {
            var _this = $(this);

            var wId = parseFloat(_this.attr("data-w"));
            var cId = parseFloat(_this.attr("data-cid"));
            /*console.log("fGetProducts_Setup: - wId: " + wId + " - cId: " + cId);*/

            if (wId > 0 && cId > 0) {
                var _divParent = $(".wrapbox-loadProducts-" + wId + "");
                var _classProducts = ".wrapbox-loadProduct-" + wId + "-" + cId;

                if (!(_divParent.find(_classProducts).length)) {
                    var isScrollTop = false;
                    fGetProducts(wId, cId, _divParent, isScrollTop);
                }
            }
        });
    });
    $('de-m .p-home .wrapbox-pList').on('touchstart touchend', function (e) {
        e.preventDefault();
        /*alert("hi");*/
    });
}

/*
  fGetProducts_Setup()
  .wrapbox-getProducts.active.setup
 */
function fGetProducts_SetupActive() {
    setTimeout(function () {
        $(".wrapbox-getProducts").each(function () {
            var _this = $(this);

            var wId = parseFloat(_this.attr("data-w"));
            var cId = parseFloat(_this.attr("data-cid"));
            /*console.log("fGetProducts_Setup: - wId: " + wId + " - cId: " + cId);*/

            if (wId > 0 && cId > 0) {
                var _divParent = $(".wrapbox-loadProducts-" + wId + "");
                var _classProducts = ".wrapbox-loadProduct-" + wId + "-" + cId;

                if (!(_divParent.find(_classProducts).length)) {
                    fGetProducts(wId, cId, _divParent);
                }
            }
        });
    }, 2000);
};
/*gGetProducts_Click*/
function fGetProducts_Click() {

    $(".wrapbox-getProducts").click(function () {
        var _this = $(this);

        _this.parent().find("li").removeClass("active");
        _this.addClass("active");

        var wId = parseFloat(_this.attr("data-w"));
        var cId = parseFloat(_this.attr("data-cid"));
        /*console.log("gGetProducts_Click: - wId: " + wId + " - cId: " + cId);*/

        if (wId > 0 && cId > 0) {
            var _divParent = $(".wrapbox-loadProducts-" + wId + "");
            var _divProducts = $(".wrapbox-loadProduct-" + wId + "-" + cId + "");

            if (_divProducts.length) {
                _divParent.find(".wrapbox-loadProduct").css("display", "none");
                _divProducts.css("display", "block");

                //$([document.documentElement, document.body]).animate({
                //    scrollTop: divParent.offset().top - 50
                //}, 1000);
            }
            else {
                var isScrollTop = true;
                fGetProducts(wId, cId, _divParent, isScrollTop);
            }
        }

    });
}
/*fGetProducts*/
function fGetProducts(wId, cId, divParent, isScrollTop) {

    var apiVm = {
        "Id": wId,
        "Id1": cId
    };

    $.ajax({
        type: 'POST',
        url: '/api/catalogs/getWProducts',
        data: JSON.stringify(apiVm),
        contentType: "application/json"
    }).done(function (data) {

        /*console.log(data);*/

        var $html = $(data);
        $html.hide()

        divParent.append($html);

        var divProducts = $(".wrapbox-loadProduct-" + wId + "-" + cId + "");

        if ($(".p-home").hasClass("p-mobile")) {

        }
        else {

            divProducts.find("img.lazy").each(function () {
                $(this).attr("src", $(this).attr("data-original"));
            });

            /* Owl Banner * /
            /*fActive_GetBanners(divProducts);*/
            fOwlCarousel_Item3(divProducts.find(".owlRespon-3 .banner-list"));
            /*Owl Product*/
            fOwlCarousel_Product(divProducts.find(".pList-olw"));
        }

        if (isScrollTop == true) {

            divParent.find(".wrapbox-loadProduct").each(function () {
                $(this).hide();
            })

            divProducts.fadeIn(1000);

            $([document.documentElement, document.body]).animate({
                scrollTop: divParent.offset().top - 100
            }, 1000);

        }

        fProductMatchHeight_Parent(divProducts);
    });
};

/*V1*/
function fLimitMenu_V1() {
    if ($(".nav-collapseV1 .navcate-item").length > parseInt(3 + 2)) {

        /*alert($(window).width());
        console.log("width:" + $(window).width());*/

        if ($(window).width() < 768) {
            /*Start*/
            var i = 0;
            $(".nav-collapseV1 .navcate-item").each(function () {
                i += 1;
                if (i > 3) {
                    $(this).css("display", "none");
                }
            })
            $(".nav-collapseV1 .fLimitMenu_SeeMore").css("display", "list-item");
            /*Start*/
        }

        $(".nav-collapseV1 .fLimitMenu_SeeMore a").click(function () {

            $(this).parent().parent().find("li").css("display", "list-item");
            $(this).parent().css("display", "none");
        })

        $(".nav-collapseV1 .fLimitMenu_Collapse a").click(function () {

            var i = 0;
            $(this).parent().parent().find("li").each(function () {
                i += 1;
                if (i > 7) {
                    $(this).css("display", "none");
                }
            });

            $(this).parent().parent().find(".fLimitMenu_SeeMore").css("display", "list-item");
        })
    };
};
/*V1*/

/*V2*/
function fLimitMenu_V2() {
    if ($(".nav-collapseV2 .fLimitMenu_SeeMore").length) {
        $(".nav-collapseV2 .fLimitMenu_SeeMore a").click(function () {

            $(this).parent().css("display", "none");
            $(this).parent().parent().find(".fLimitMenu_Collapse").css("display", "list-item");

            $(this).parent().parent().find(".fLimitMenuItem").css("display", "list-item");
        })

        $(".nav-collapseV2 .fLimitMenu_Collapse a").click(function () {
            $(this).parent().css("display", "none");
            $(this).parent().parent().find(".fLimitMenu_SeeMore").css("display", "list-item");

            $(this).parent().parent().find(".fLimitMenuItem").css("display", "none");
        })
    };
}
/*V2*/
