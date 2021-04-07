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

    init();

    //トップへ戻るボタン
    scrollToTop();

    hamburgerMenu();

});

const init = function () {
    $(window).on('load', function () {
        $('#scroll-to-top').css('display', 'none');
        $('.hamburger-menu').css('display', 'none');
    })

    $(window).on("onbeforeunload", function () {
        alert("unload")
    })
}

const hamburgerMenu = function () {
    let is_show = false;
    const btn = $('.menu-btn');
    const menu = $('.hamburger-menu');
    const menuItem = $('.hamburger-menu a');


    $(document).click(function (e) {
        if (!$(e.target).closest(menu).length
            && $(e.target)[0] != btn[0]
            && $(e.target)[0] != $('.menu-btn .material-icons')[0]
            && is_show
        ) {
            menu.fadeOut();
            is_show = false;
        }
    });

    btn.on('click', function () {
        if (!is_show) {
            menu.hide().fadeIn();
            is_show = true;
        } else {
            menu.fadeOut();
            is_show = false;
        }
    });

    menuItem.on('click', function () {
        menu.css("display", 'none');
    });

    $(window).on('load', function () {

    })

    // $(window).on('load', function () {
    //     menu.css('display', 'none');
    //     is_show = false;
    // })

    // menuItem.on('click', function () {
    //     if (is_show) {
    //         menu.css('display', none);
    //         is_show = false;
    //     }
    // });
}

const scrollToTop = function () {
    let is_show = false;

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
        $("body, html").animate({ scrollTop: 0 }, 100);
    });
}

