$(document).ready(function () {

    var isOpen = true;
    $("#navbarMain .nav-item.dropdown").mouseover(function (e) {

        isOpen = true;
        if (!($(this).hasClass("show"))) {
            $("#navbarMain .nav-item.dropdown").removeClass("show");
            $("#navbarMain .nav-item.dropdown > ul.dropdown-menu").removeClass("show");

            $(this).addClass("show");
            $(this).find("ul.dropdown-menu").addClass("show");
        }
    }).mouseleave(function (e) {
        isOpen = false;
        setTimeout(function () {
            if (isOpen == false) {
                $("#navbarMain .nav-item.dropdown").removeClass("show");
                $("#navbarMain .nav-item.dropdown > ul.dropdown-menu").removeClass("show");
            }
        }, 300);
    });

    $("#navbarMain .nav-link.dropdown-toggle").click(function (e) {
        /*e.preventDefault();
        e.stopPropagation();*/
        if ($(this).parent().hasClass("show")) {
            var thisHref = $(this).attr("href");
            if (thisHref != "" && thisHref != "javascript:void(0)" && thisHref != "javascript:;" && thisHref != "#")
                window.location.href = thisHref;
        }
    });

    $("#navbarMain .nav-link.dropdown-toggle .nav-link-text a").click(function (e) {
        var thisHref = $(this).attr("href");
        window.location.href = thisHref;
    });

    $("#navbarMain a.nav-link-1.dropdown-toggle").click(function (e) {
        var thisHref = $(this).attr("href");
        if (thisHref != "" && thisHref != "javascript:void(0)" && thisHref != "javascript:;" && thisHref != "#")
            window.location.href = thisHref;
    });
});