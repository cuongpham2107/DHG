/*global jQuery, window*/
$(document).ready(function () {

    /*V1*/
    fLimitMenu_NewsCateImage();

    /*V2*/
    fLimitMenu_NewsCate();
    $(window).resize(function () {
        fLimitMenu_NewsCate();
    });

    /**/
    fOverflowTable();

});

/*fApiNewList*/
function fApiNewList(id, page, key, isgrid, isremove) {

    var _id = parseFloat(id);
    var _page = parseFloat(page);

    if ((_id > 0 && _page > 0) || (key.length > 2 && _page > 0)) {
        $(".newscate-list-loadmore").remove();

        $.ajax({
            type: 'POST',
            url: '/newslist/get-data?id=' + id + '&page=' + page + '&isgrid=' + isgrid + '&key=' + key + '',
            contentType: "application/json"
        }).done(function (data) {
            $(".pagination").parent().remove();

            if (isremove == true) {
                $('#newslist-api').html(data);
            }
            else {
                $('#newslist-api').append(data);
            }

            $(".lazy").lazyload({ threshold: 500, skip_invisible: false, appear: null });
        });
    }
};
/*fApiNewList*/

/*V1*/
function fLimitMenu_NewsCateImage() {
    if ($(".newscate-image .fLimitMenu_SeeMore").length) {
        $(".newscate-image .fLimitMenu_SeeMore a").click(function () {

            $(this).parent().css("display", "none");
            $(this).parent().parent().find(".fLimitMenu_Collapse").css("display", "list-item");

            $(this).parent().parent().find(".fLimitMenuItem").css("display", "list-item");
        })

        $(".newscate-image .fLimitMenu_Collapse a").click(function () {
            $(this).parent().css("display", "none");
            $(this).parent().parent().find(".fLimitMenu_SeeMore").css("display", "list-item");

            $(this).parent().parent().find(".fLimitMenuItem").css("display", "none");
        })
    };
}
/*V1*/

/*V2*/
function fLimitMenu_NewsCate() {
    if ($(".nav-newscate-child .nav-item").length > parseInt(3 + 2)) {

        /*alert($(window).width());
        console.log("width:" + $(window).width());*/

        if ($(window).width() < 768) {
            /*Start*/
            var i = 0;
            $(".nav-newscate-child .nav-item").each(function () {
                i += 1;
                if (i > 3) {
                    $(this).css("display", "none");
                }
            })
            $(".nav-newscate-child .fLimitMenu_SeeMore").css("display", "list-item");
            /*Start*/

            $(".nav-newscate-child .fLimitMenu_SeeMore a").click(function () {

                $(this).parent().parent().find("li").css("display", "list-item");
                $(this).parent().css("display", "none");
            })

            $(".nav-newscate-child .fLimitMenu_Collapse a").click(function () {

                var i = 0;
                $(this).parent().parent().find("li").each(function () {
                    i += 1;
                    if (i > 3) {
                        $(this).css("display", "none");
                    }
                });

                $(this).parent().parent().find(".fLimitMenu_SeeMore").css("display", "list-item");
            })
        }

    };
};
/*V2*/

function fOverflowTable() {
    if ($('.news-item-content').length) {
        /*
        alert("hi");
        after() - Chèn nội dung sau các phần tử đã chọn
        before() - Chèn nội dung trước các phần tử đã chọn
        */
        $('.news-item-content table').each(function () {
            $(this).replaceWith('<div class="table-wrapper"><div class="table-scroll"><table>' + $(this).html() + '</table></div></div>');
        });

        /*
        $('.news-item-content table').replaceWith('<div class="table-wrapper"><div class="table-scroll"><table>' + $('.news-item-content table').html() + '</table></div></div>');
        */
    }
};
