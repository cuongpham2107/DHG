/*global $ */
$(function () {

    var isDebug = true;

    /*_WarehouseList*/
    if ($(".page-store").length) {

        if ($(".store-item-click").length) {
            $(".p-storelist-view").html($(".p-storelist-item .store-item-click").eq(0).attr("data"));
        }

        $(".store-item-click").click(function () {
            $(".p-storelist-view").html($(this).attr("data"));
        });

        var $stateOrProvinceStore = $('.page-store select#cStateOrProvinceStore');
        var $districtStore = $('.page-store select#cDistrictStore');

        var fStateOrProvinceStore = function () {

            $stateOrProvinceStore.on('change', function () {

                var sid = this.value;
                //window.location = "/he-thong-sieu-thi?sid=" + sid;

                $.getJSON("/data/warehouse/districts/" + sid, function (data) {

                    fResetSelect_Empty($districtStore);

                    $.each(data, function (index, option) {
                        $districtStore.append($("<option></option>").attr("value", option.id).text(option.name));
                    });

                });
            });
        };

        var fdistrictStore = function () {

            $districtStore.on('change', function () {

                var sid = parseFloat($stateOrProvinceStore.find(":selected").val());
                var did = this.value;
                window.location = "/he-thong-sieu-thi?sid=" + sid + "&did=" + did;
            });
        };

        fStateOrProvinceStore();
        fdistrictStore();
    }
    /*_WarehouseList*/

    function fResetSelect_Empty($select) {
        var $defaultOption = $select.find("option:first-child");
        $select.empty();
        $select.append($defaultOption);
    }

    function fResetSelect_FirstSelected($select) {
        $select.find("option:first-child").prop('selected', true);
    }

    /*Check*/
    if ($('.pdetail-inventorycheckbyuser.stockNotAvailable').length) {
        $('.pdetail-add-to-cart').find('.btn-add-cart').attr('disabled', 'disabled');
        $('.pdetail-installment').css('display', 'none');
    }
    /*Check*/

    /*Shipping Add*/
    $('body').on('click', '.shippingbyuser-add', function () {

        $.ajax({
            type: 'GET',
            url: '/inventory/shippingadd'
        }).done(function (data) {
            var $thisModal = $('#shippingAddModal');

            $thisModal.find('.modal-content').html(data);
            $thisModal.modal('show');

            fStateOrProvinceSearch();
            fStateOrProvinceChange();

            fShippingAddSubmit();
        });

    });

    var fShippingAddSubmit = function () {
        $('#shippingAddModal').on('submit', '#shippingbyuser-addform', function () {

            var id1 = parseFloat($('#NewAddressForm_StateOrProvinceId').find('option:selected').val());
            var id2 = parseFloat($('#NewAddressForm_DistrictId').find('option:selected').val());
            var str = $('#NewAddressForm_AddressLine1').val();

            var data1 = { id1: id1, id2: id2, str: str };

            if (id1 > 0 && id2 > 0) {
                /*var href = '?id1=' + id1 + '&id2' + id2 + '&str' + str;*/

                $.ajax({
                    type: 'POST',
                    url: '/inventory/shippingadd',
                    data: data1
                }).done(function (data) {
                    $('#shippingAddModal').modal('hide');

                    window.location.reload();
                });
            }
            else {
                $("#shippingbyuser-addform .label-error").html("Bạn chưa chọn các trường có dấu (*)!");
            }
            return false;
        });
    };

    var fStateOrProvinceSearch = function () {
        $('#shippingAddModal #NewAddressForm_StateOrProvinceId').on('change', function () {

            var selectedStateOrProvinceId = this.value;

            $.getJSON("/api/states-provinces/" + selectedStateOrProvinceId + "/districts", function (data) {

                var $districtSelect = $("#NewAddressForm_DistrictId");
                fResetSelect_Empty($districtSelect);

                $.each(data, function (index, option) {
                    $districtSelect.append($("<option></option>").attr("value", option.id).text(option.name));
                });

            });
        });
    };

    var fStateOrProvinceChange = function () {
        $('#shippingAddModal #NewAddressForm_StateOrProvinceId').on('change', function () {

            var selectedStateOrProvinceId = this.value;

            $.getJSON("/api/states-provinces/" + selectedStateOrProvinceId + "/districts", function (data) {

                var $districtSelect = $("#NewAddressForm_DistrictId");
                fResetSelect_Empty($districtSelect);

                $.each(data, function (index, option) {
                    $districtSelect.append($("<option></option>").attr("value", option.id).text(option.name));
                });

            });
        });
    };
    /*Shipping Add*/

    /*Stock View*/
    $('body').on('click', '.stockavailable-view', function () {

        var id = parseFloat($(this).attr("data-id"));

        $.ajax({
            type: 'POST',
            url: '/inventory/stockbyproduct?id=' + id,
        }).done(function (data) {
            $('#inventoryModal').find('.modal-content').html(data);
            $('#inventoryModal').modal('show');

            var $selectStateOrProvince = $('#inventoryModal #inventory-stockview-stateprovince');
            var $selectDistrict = $('#inventoryModal .inventory-stockview-district');
            var $stockViewList = $('#inventoryModal #inventory-stockview-list li');

            fStockViewStateOrProvince($selectStateOrProvince, $selectDistrict, $stockViewList);
            fStockViewDistrict($selectStateOrProvince, $selectDistrict, $stockViewList);
        });

    });

    var fStockViewStateOrProvince = function ($selectStateOrProvince, $selectDistrict, $stockViewList) {

        var $thisSelectStateOrProvince = $selectStateOrProvince,
            $thisSelectDistrict = $selectDistrict,
            $thisStockViewList = $stockViewList;

        $thisSelectStateOrProvince.on('change', function () {
            if (isDebug)
                console.log("fStockViewStateOrProvince - selectedDistrictId: " + $(this).val());

            fResetSelect_FirstSelected($thisSelectDistrict);

            fResetInventory_District($selectStateOrProvince, $thisSelectDistrict);
            fResetInventory_View($thisSelectStateOrProvince, $thisSelectDistrict, $thisStockViewList);
        });
    };

    var fStockViewDistrict = function ($selectStateOrProvince, $selectDistrict, $stockViewList) {

        var $thisSelectStateOrProvince = $selectStateOrProvince,
            $thisSelectDistrict = $selectDistrict,
            $thisStockViewList = $stockViewList;

        $thisSelectDistrict.on('change', function () {
            if (isDebug)
                console.log("fStockViewDistrict - selectedDistrictId: " + $(this).val());

            $("#inventory-stockview-district-id").val($(this).val());

            fResetInventory_View($thisSelectStateOrProvince, $thisSelectDistrict, $thisStockViewList);
        });

    }

    var fResetInventory_District = function ($selectStateOrProvince, $selectDistrict) {

        var stateOrProvinceId = parseFloat($selectStateOrProvince.find(":selected").val());

        if (isDebug)
            console.log("fResetInventory_District - stateOrProvinceId: " + stateOrProvinceId);

        if (stateOrProvinceId > 0 || stateOrProvinceId == 0) {
            $selectDistrict.css("display", "none");

            $selectDistrict.each(function () {
                if ($(this).hasClass('' + stateOrProvinceId + '')) {
                    $(this).css("display", "block");
                }
            })

        }
    };

    var fResetInventory_View = function ($selectStateOrProvince, $selectDistrict, $stockViewList) {

        var stateOrProvinceId = parseFloat($selectStateOrProvince.find(":selected").val());

        if (isDebug)
            console.log("fResetInventory_View - stateOrProvinceId: " + stateOrProvinceId);

        if (stateOrProvinceId > 0) {
            var districtId = parseFloat($("#inventory-stockview-district-id").val());

            if (isDebug)
                console.log("fResetInventory_View - districtId: " + districtId);

            $stockViewList.each(function () {

                var _this = $(this);

                var thisStateOrProvinceId = parseFloat(_this.attr("data-id1"));
                var thisDistrictId = parseFloat(_this.attr("data-id2"));

                //if (isDebug)
                //    console.log("each - thisStateOrProvinceId: " + thisStateOrProvinceId + " - thisDistrictId: " + thisDistrictId);

                if (isNaN(stateOrProvinceId)) {
                    _this.css("display", "block");
                }
                else if (thisDistrictId == districtId && thisStateOrProvinceId == stateOrProvinceId) {
                    _this.css("display", "block");
                }
                else if ((districtId == 0 || isNaN(districtId)) && thisStateOrProvinceId == stateOrProvinceId) {
                    _this.css("display", "block");
                }
                else {
                    _this.css("display", "none");
                }

            });
        }
    };
    /*Stock View*/

});
