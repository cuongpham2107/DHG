/*global jQuery, window*/
$(document).ready(function () {

    $('input.rating-loading').rating({
        language: window.eSwGlobalSetting.lang,
        filledStar: '<i class="fa fa-star"></i>',
        emptyStar: '<i class="fa fa-star-o"></i>'
    });

    /*
    if ($('.sp-wrap').length) {
        $.getScript("/lib/smoothproducts/js/smoothproducts.js", function () {

            var link = document.createElement("link");
            link.rel = "stylesheet";
            link.href = "/lib/smoothproducts/css/smoothproducts.css";
            document.body.appendChild(link);

            $('.sp-wrap').smoothproducts();
        });
    }
    */

    /*saveProductId*/
    setTimeout(function () {
        if ($("#saveProductDetail input#saveProductId").val() > 0) {

            var saveProductId = parseFloat($("input#saveProductId").val());
            var saveCategoryId = parseFloat($("input#saveCategoryId").val());
            var saveBrandId = parseFloat($("input#saveBrandId").val());

            var postData = {
                id: saveProductId,
                id1: saveCategoryId,
                id2: saveBrandId
            }

            $.ajax({
                type: "POST",
                url: "/api/catalogs/saveFilterProduct",
                data: JSON.stringify(postData),
                contentType: "application/json"
            }).done(function (msg) {
                console.log(msg)
            }).fail(function (error) {
                console.log(error)
            });
        };
    }, 5000);
    /*saveProductId*/

    if ($(".p-pdetail .pdetail-promotion-body").length) {
        $(".p-pdetail .pdetail-promotion-body li").each(function () {

            var html = $(this).html();
            if (html != "") {
            }
            else {
                $(this).remove();
            }
        });
    }

    if ($('.p-pdetail .pdetail-pricenopromotion').length) {

        var modalHref = $('.p-pdetail .pdetail-pricenopromotion').attr("data-href");

        setTimeout(function () {

            $('#productOverview').modal('hide');
            $('#shopModal').modal('hide');

            $.ajax({
                type: 'GET',
                url: modalHref,
                contentType: "application/json"
            }).done(function (data) {
                $('#shopModalFlashSalePrice').find('.modal-content').html(data);
                $('#shopModalFlashSalePrice').modal('show');
            }).fail(function () {
                $('#shopModalFlashSalePrice').find('.modal-content').html(generalError);
                $('#shopModalFlashSalePrice').modal('hide');
            });
        }, 20000);

        var shopModalFlashSalePriceSubmit = function () {

            var postData = {
                newBillingAddressForm: {},
                newAddressForm: {
                    countryId: $('#NewAddressForm_CountryId').val(),
                    contactName: $('#NewAddressForm_ContactName').val(),
                    phone: $('#NewAddressForm_Phone').val(),
                    addressLine1: $('#NewAddressForm_AddressLine1').val(),
                    stateOrProvinceId: Number($('#NewAddressForm_StateOrProvinceId').val()) || 0,
                    districtId: Number($('#NewAddressForm_DistrictId').val()),
                    zipCode: $('#NewAddressForm_ZipCode').val()
                }
            };

            $.ajax({
                type: "POST",
                url: modalHref,
                data: JSON.stringify(postData),
                contentType: "application/json"
            }).done(function (data) {
                $("#shopModalFlashSalePrice .error").html("Bạn đăng ký mua hàng thành công.");

                $("#shopModalFlashSalePrice form").css("top", "30%");
                $("#shopModalFlashSalePrice .create-shipping-address").css("display", "none");
                $("#shopModalFlashSalePrice .btn-order").css("display", "none");
                $("#shopModalFlashSalePrice .boxproduct-note").css("display", "none");

            }).fail(function (data) {
                /*{ "readyState": 4, "responseText": "{\"error\":\"Bạn chưa nhập các trường có dấu (*)\"}", "responseJSON": { "error": "Bạn chưa nhập các trường có dấu (*)" }, "status": 400, "statusText": "error" }*/
                $("#shopModalFlashSalePrice .error").html(data.responseJSON.error);
            });
        };

        $(document).on('change', '#shopModalFlashSalePrice #NewAddressForm_StateOrProvinceId', function () {
            var selectedStateOrProvinceId = this.value;

            $.getJSON("/api/states-provinces/" + selectedStateOrProvinceId + "/districts", function (data) {
                var $districtSelect = $("#NewAddressForm_DistrictId");

                //resetSelect($districtSelect);
                var $defaultOption = $districtSelect.find("option:first-child");
                $districtSelect.empty();
                $districtSelect.append($defaultOption);

                $.each(data, function (index, option) {
                    $districtSelect.append($("<option></option>").attr("value", option.id).text(option.name));
                });
            });
        });

        $(document).on('click', '#shopModalFlashSalePrice form button', function () {
            shopModalFlashSalePriceSubmit();

            return false;
        });
    };

    if ($('.p-pdetail .stock-available').length) {
        $.ajax({
            type: 'POST',
            url: '/location/shipping'
        }).done(function (data) {
            $('.p-pdetail .pdetail-location-shipping').html(data);
        });
    }

    $('#addreview').on('click', '#btn-addreview', function (e) {
        e.preventDefault();
        var $form = $('#form-addreview');
        if (!$form.valid || $form.valid()) {
            $.post($form.attr('action'), $form.serializeArray())
                .done(function (result) {
                    $('#addreview').html(result);
                    $('input.rating-loading').rating({
                        language: window.eSwGlobalSetting.lang,
                        filledStar: '<i class="fa fa-star"></i>',
                        emptyStar: '<i class="fa fa-star-o"></i>'
                    });
                });
        }
    });

    $('#reviews').on('click', '.btn-submit-review-reply', function (e) {
        e.preventDefault();
        var $form = $(this).closest('.form-add-review-reply');
        var that = this;
        if (!$form.valid || $form.valid()) {
            $.post($form.attr('action'), $form.serializeArray())
                .done(function (result) {
                    $(that).closest('.add-review-reply').html(result);
                });
        }
    });

    $('.product-attrs li').on('click', function () {
        var $variationDiv,
            selectedproductOptions = [],
            variationName,
            $form = $(this).closest("form"),
            $attrOptions = $form.find('.product-attr-options');

        $(this).find('input').prop('checked', true);

        $attrOptions.each(function () {
            selectedproductOptions.push($(this).find('input[type=radio]:checked').val());
        });
        variationName = selectedproductOptions.join('-');
        $variationDiv = $('div[data-variation-name="' + variationName + '"]');
        $imagesVariationDiv = $('div[data-images-variation-name="' + variationName + '"]');
        $('.product-variation').hide();
        $('.product-images').hide();

        if ($variationDiv.length > 0) {
            $variationDiv.show();
            $('.product-variation-notavailable').hide();
        } else {
            $('.product-variation-notavailable').show();
        }
        if ($imagesVariationDiv.length > 0) {
            $imagesVariationDiv.show();
        }
        else {
            $('#main-product-images').show();
        }
    });

    $('.quantity-button').on('click', function () {
        var quantityInput = $(this).closest("form").find('.quantity-field');
        if ($(this).val() === '+') {
            quantityInput.val(parseInt(quantityInput.val(), 10) + 1);
        }
        else if (quantityInput.val() > 1) {
            quantityInput.val(quantityInput.val() - 1);
        }
    });

    var pdContentSeeMore = $(".pd-content-seemore");
    if (pdContentSeeMore.length) {
        var pdContentSeeMore_HtmlA = '<div class="row col-12"><a class="pd-content-seemore-a btn-seemore" href="javascript:void(0);" onclick="fProductDetailContentSeeMore();"><span>Xem thêm</span></a></div>';

        if (pdContentSeeMore.height() > 500) {
            pdContentSeeMore.addClass("isFull");
            pdContentSeeMore.parent().append(pdContentSeeMore_HtmlA);
        }
    }

    var pdAttributeSeeMore = $(".pd-attribute-seemore");
    if (pdAttributeSeeMore.length) {
        var pdAttributeSeeMore_HtmlA = '<div class="row col-12"><a class="pd-attribute-seemore-a btn-seemore" href="javascript:void(0);" onclick="fProductDetailAttributeSeeMore();"><span>Xem thêm</span></a></div>';

        if (pdAttributeSeeMore.height() > 500) {
            pdAttributeSeeMore.addClass("isFull");
            pdAttributeSeeMore.parent().append(pdAttributeSeeMore_HtmlA);
        }
    }

});
function fProductDetailContentSeeMore() {
    var seeMore = $(".pd-content-seemore");
    var seeMore_ObjTagA = $(".pd-content-seemore-a");

    if (seeMore.hasClass("active")) {
        seeMore.removeClass("active");
        seeMore_ObjTagA.find("span").text("Xem thêm");
    }
    else {
        seeMore.addClass("active");
        seeMore_ObjTagA.find("span").text("Thu gọn");
    }
};
function fProductDetailAttributeSeeMore() {
    var seeMore = $(".pd-attribute-seemore");
    var seeMore_ObjTagA = $(".pd-attribute-seemore-a");

    if (seeMore.hasClass("active")) {
        seeMore.removeClass("active");
        seeMore_ObjTagA.find("span").text("Xem thêm");
    }
    else {
        seeMore.addClass("active");
        seeMore_ObjTagA.find("span").text("Thu gọn");
    }
};