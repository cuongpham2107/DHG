/*global $ */
$(function () {
    /*jshint multistr: true */
    /*Oops*/
    /*There are something wrong. Please try again*/
    /*Cart is being locked for checkout.Please complete or cancel the checkout first*/
    /*Checkout*/
    var generalError = ' \
        <div class="modal-header"> \
            <h4 class="modal-title" id="myModalLabel">Lỗi</h4> \
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> \
        </div> \
        <div class="modal-body"> \
            <p>Quý khách vui lòng <a href="/login" class="btn btn btn-primary">đăng nhập</a> để thêm sản phẩm vào giỏ hàng. </p> \
        </div > ';

    var cartLockedError = ' \
        <div class="modal-header"> \
            <h4 class="modal-title" id="myModalLabel">Lỗi</h4> \
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> \
        </div> \
        <div class="modal-body"> \
            <p>Giỏ hàng đang bị khóa để thanh toán. Vui lòng hoàn tất hoặc hủy việc thanh toán trước </p> \
            <p><a href="/checkout/shipping" class="btn btn btn-primary">Thanh toán</a></p> \
        </div > ';


    $('body').on('click', '.btn-add-cart', function () {

        $('#productOverview').modal('hide');

        var quantity,
            $form = $(this).closest("form"),
            productId = $(this).closest("form").find('input[name=productId]').val(),
            $quantityInput = $form.find('.quantity-field');

        quantity = $quantityInput.length === 1 ? $quantityInput.val() : 1;

        $.ajax({
            type: 'POST',
            url: '/cart/add-item',
            data: JSON.stringify({ productId: Number(productId), quantity: Number(quantity) }),
            contentType: "application/json"
        }).done(function (data) {
            if (data.error) {
                $('#shopModal').find('.modal-content').html(cartLockedError);
                $('#shopModal').modal('show');
            } else {

                if ($(".btn-add-cart").hasClass("redirectCart")) {
                    window.location = "/cart";
                }
                else {
                    $('#shopModal').find('.modal-content').html(data);
                    $('.cart-badge .badge').text($('#shopModal').find('.cart-item-count').text());
                    $('#shopModal').modal('show');
                }
            }

        }).fail(function () {
            $('#shopModal').find('.modal-content').html(generalError);
            $('#shopModal').modal('show');
        });

    });

    //701491
    //https://localhost:5001/bo-noi/noi-lau-cho-bep-tu-coex-ci33683369
    //https://localhost:5001/checkout/success?orderId=207105

    $('body').on('click', '.grouponitem', function () {

        var grouponItem = $(".grouponitem");
        //var grouponItemChoose = $(".grouponitemchoose");
        var grouponBtn = $(".btn-add-cart-groupon");

        $(grouponItem).each(function () {
            $(this).removeClass("checked");
            $(this).find(".grouponitemchoose").removeClass("checked");
            $(this).find("input:radio").prop("checked", false);
        });

        $(this).addClass("checked");
        $(this).find(".grouponitemchoose").addClass("checked");
        $(this).find("input:radio").prop("checked", true);

        var quantity = $(this).find(".grouponitemchoose").attr("data-quantity");
        var discount = $(this).find(".grouponitemchoose").attr("data-discount");

        $(grouponBtn).attr("data-quantity", quantity);
        $(grouponBtn).find("span").html("(Đã chọn: Mua " + quantity + " Giảm " + discount + "%)")
    });


    $('body').on('click', '.btn-add-cart-groupon', function () {

        $('#productOverview').modal('hide');

        var quantity = $(this).attr("data-quantity"),
            productId = $(this).attr("data-id");

        $.ajax({
            type: 'POST',
            url: '/cart/add-item',
            data: JSON.stringify({ productId: Number(productId), quantity: Number(quantity) }),
            contentType: "application/json"
        }).done(function (data) {
            if (data.error) {
                $('#shopModal').find('.modal-content').html(cartLockedError);
                $('#shopModal').modal('show');
            } else {

                if ($(".btn-add-cart").hasClass("redirectCart")) {
                    window.location = "/cart";
                }
                else {
                    $('#shopModal').find('.modal-content').html(data);
                    $('.cart-badge .badge').text($('#shopModal').find('.cart-item-count').text());
                    $('#shopModal').modal('show');
                }
            }

        }).fail(function () {
            $('#shopModal').find('.modal-content').html(generalError);
            $('#shopModal').modal('show');
        });

    });
});
