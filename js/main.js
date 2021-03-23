$(function () {
    $('.bxslider').bxSlider({
        speed: 1000,
        pause: 4000,
        auto: true,
        controls: false,
        touchEnabled: false
    });

    // 画面リサイズ時にスライド幅を再設定
    $(window).on('resize', function () {
        var windowWidth = $(window).width();
        $('.bxslider li').width(windowWidth)
    });
});