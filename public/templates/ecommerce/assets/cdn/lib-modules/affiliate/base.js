function funcAF_getFromUrl(name, url) { // Lấy các param từ tracking link
    if (!url) url = location.href;
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]" + name + "=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(url);
    return results == null ? null : results[1];
}

function funcAF_getCookie(cname) { // Lấy nhận cookie
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return undefined;
}

function funcAF_setCookie(key, value, e) { // Ghi nhận, cài đặt thời gian lưu cookie
    var d = new Date();
    d.setTime(d.getTime() + (e * 24 * 60 * 60 * 1000));
    var ee = "expires=" + d.toUTCString();
    document.cookie = key + "=" + value + "; " + ee + "; path=/";
}

function funcAF_setTracking() { // Tracking

    //https://mediamart.vn/?utm_source=masoffer&&traffic_id=masofferYKSHOe21UlpTiRGn0
    //https://mediamart.vn/?utm_source=accesstrade&aff_sid=8Sd4SxmRm7QAqCYAsOqci0EGkkgenpdYKSHOe21UlpTiRGn0
    //https://mediamart.vn/?utm_source=adpia&clickid=mediamart-A100081644-1687839621

    var refUrl = funcAF_getFromUrl("utm_source");

    //Last click
    if (refUrl == 'masoffer') {
        funcAF_setCookie("mo_network", refUrl, 30);

        var trafficIdUrl = funcAF_getFromUrl("traffic_id");
        console.log(trafficIdUrl);

        if (trafficIdUrl) {
            funcAF_setCookie("mo_traffic_id", trafficIdUrl, 30);
            return true;
        }

        //Remove accesstrade
        funcAF_setCookie("_aff_network", "", 0);
        funcAF_setCookie("_aff_sid", "", 0);

        //Remove adpia
        funcAF_setCookie("apinfo", "", 0);
        funcAF_setCookie("APINFO", "", 0);
        funcAF_setCookie("adpia_clickid", "", 0);

        //Remove esw_sourceo
        funcAF_setCookie("_esw_sourceo", "", 0);
        funcAF_setCookie("_esw_sourceo_detail", "", 0);
    }
    else if (refUrl == 'accesstrade') {

        funcAF_setCookie("_aff_network", refUrl, 30);

        var aff_sid = funcAF_getFromUrl("aff_sid");
        console.log(aff_sid);

        if (aff_sid) {
            funcAF_setCookie("_aff_sid", aff_sid, 30);
            return true;
        }

        //Remove masoffer
        funcAF_setCookie("mo_network", "", 0);
        funcAF_setCookie("mo_traffic_id", "", 0);

        //Remove adpia
        funcAF_setCookie("apinfo", "", 0);
        funcAF_setCookie("APINFO", "", 0);
        funcAF_setCookie("adpia_clickid", "", 0);

        //Remove esw_sourceo
        funcAF_setCookie("_esw_sourceo", "", 0);
        funcAF_setCookie("_esw_sourceo_detail", "", 0);
    }
    else if (refUrl == 'adpia') {

        ////Remove adpia
        //funcAF_setCookie("apinfo", "", 0);
        //funcAF_setCookie("APINFO", "", 0);
        //funcAF_setCookie("adpia_clickid", "", 0);

        funcAF_setCookie("apinfo", refUrl, 30);
        funcAF_setCookie("APINFO", refUrl, 30);

        var clickid = funcAF_getFromUrl("clickid");
        console.log(clickid);

        if (clickid) {
            funcAF_setCookie("adpia_clickid", clickid, 30);
            return true;
        }

        //Remove masoffer
        funcAF_setCookie("mo_network", "", 0);
        funcAF_setCookie("mo_traffic_id", "", 0);

        //Remove accesstrade
        funcAF_setCookie("_aff_network", "", 0);
        funcAF_setCookie("_aff_sid", "", 0);

        //Remove esw_sourceo
        funcAF_setCookie("_esw_sourceo", "", 0);
        funcAF_setCookie("_esw_sourceo_detail", "", 0);
    }
    else if (refUrl != null & refUrl != '' && refUrl.length > 1 && refUrl !== 'masoffer' && refUrl !== 'accesstrade' && refUrl !== 'adpia') {

        //Remove masoffer
        funcAF_setCookie("mo_network", "", 0);
        funcAF_setCookie("mo_traffic_id", "", 0);

        //Remove accesstrade
        funcAF_setCookie("_aff_network", "", 0);
        funcAF_setCookie("_aff_sid", "", 0);

        //Remove adpia
        funcAF_setCookie("apinfo", "", 0);
        funcAF_setCookie("APINFO", "", 0);
        funcAF_setCookie("adpia_clickid", "", 0);

        var urlDetail = location.href;

        console.log(refUrl + "-" + urlDetail);

        //Add esw_sourceo: Face, Google, Ads other...
        funcAF_setCookie("_esw_sourceo", refUrl, 30);
        funcAF_setCookie("_esw_sourceo_detail", urlDetail, 30);

        return true;
    }

    return false;
}

funcAF_setTracking();