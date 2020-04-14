// Cookie
$(function () { // 1回目のアクセス
    if ($.cookie("access") == undefined) { // alert("初回です");
        $.cookie("access", "onece");
        $(".loading").css("display", "block")

        timer();
        // 2回目以降
    } else {
        $(".loading").css("display", "none")
        // alert("二回目以降です");
    }
});

function timer() {
    setTimeout('stopload()', 5700);
}

function stopload() {
    $('.loading').css('display', 'none');
}