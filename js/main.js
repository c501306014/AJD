jQuery(function () {
    jQuery('.bxslider').bxSlider({
        speed: 1000,
        pause: 4000,
        auto: true,
        controls: false,
        touchEnabled: false
    });

    // 画面リサイズ時にスライド幅を再設定
    jQuery(window).on('resize', function () {
        var windowWidth = jQuery(window).width();
        jQuery('.bxslider li').width(windowWidth)
    });

    init();

    //トップへ戻るボタン
    scrollToTop();

    hamburgerMenu();

});

const init = function () {
    jQuery(window).on('load', function () {
        jQuery('#scroll-to-top').css('display', 'none');
        jQuery('.hamburger-menu').css('display', 'none');
    })

    jQuery(window).on("onbeforeunload", function () {
        alert("unload")
    })
}

const hamburgerMenu = function () {
    let is_show = false;
    const btn = jQuery('.menu-btn');
    const menu = jQuery('.hamburger-menu');
    const menuItem = jQuery('.hamburger-menu a');


    jQuery(document).click(function (e) {
        if (!jQuery(e.target).closest(menu).length
            && jQuery(e.target)[0] != btn[0]
            && jQuery(e.target)[0] != jQuery('.menu-btn .material-icons')[0]
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

    jQuery(window).on('load', function () {

    })

    // jQuery(window).on('load', function () {
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

    jQuery(window).on('scroll  resize', function () {
        if (200 < jQuery(this).scrollTop()) {
            if (is_show === false) {
                jQuery('#scroll-to-top').hide().fadeIn();
                is_show = true;
            }
        } else {
            if (is_show === true) {
                jQuery('#scroll-to-top').fadeOut();
                is_show = false;
            }
        }
    })

    jQuery("#scroll-to-top").click(function () {
        jQuery("body, html").animate({ scrollTop: 0 }, 100);
    });
}

