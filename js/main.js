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

    scrollToTop();

});

const scrollToTop = function () {
    let is_show = false;

    $(window).on('load', function () {
        $('#scroll-to-top').css('display', 'none')
    })

    $(window).on('scroll  resize', function () {
        if (200 < $(this).scrollTop()) {
            if (is_show === false) {
                $('#scroll-to-top').hide().fadeIn();
                is_show = true;
            }
        } else {
            if (is_show === true) {
                $('#scroll-to-top').fadeOut();
                is_show = false;
            }
        }
    })

    $("#scroll-to-top").click(function () {
        $("body, html").animate({ scrollTop: 0 }, 300);
    });
}

