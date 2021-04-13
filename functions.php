<?php

// 勝手に改行機能を削除
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

// read stylesheet, javascript
function my_scripts()
{
    wp_enqueue_style("stylesheet", get_template_directory_uri() . "/scss/stylesheet.css", array(), '1.0.0', 'all');
    wp_enqueue_script("javascript", get_template_directory_uri() . "/js/main.js", array(), false, true);
}
add_action('wp_enqueue_scripts', 'my_scripts');

// add customize functions 
function my_setup()
{
    // i-chatch image
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    // custom menu
    register_nav_menus(array(
        'header-nav' => 'ヘッダーナビゲーション',
        'footer-nav' => 'フッターナビゲーション',
    ));
}
add_action('after_setup_theme', 'my_setup');


// add widget
function my_theme_widgets_init()
{
    register_sidebar(array(
        'name' => 'Header Widgets',
        'id' => 'header-widgets'
    ));
    register_sidebar(array(
        'name' => 'Footer Nav Widgets',
        'id' => 'footer-nav-widgets'
    ));
    register_sidebar(array(
        'name' => 'Footer Widgets',
        'id' => 'footer-widgets'
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');

/**********************
OGP設定
 *********************/
function my_meta_ogp()
{
    if (is_front_page() || is_home() || is_singular()) {

        /*初期設定*/

        // 画像 （アイキャッチ画像が無い時に使用する代替画像URL）
        $ogp_image = get_template_directory_uri() . '/screenshot.jpg';
        // Twitterのアカウント名 (@xxx)
        // $twitter_site = '@Twitterアカウント名';
        // Twitterカードの種類（summary_large_image または summary を指定）
        // $twitter_card = 'summary_large_image';
        // Facebook APP ID
        // $facebook_app_id = '';

        /*初期設定 ここまで*/


        global $post;
        $ogp_title = '';
        $ogp_description = '';
        $ogp_url = '';
        $html = '';
        if (is_singular()) {
            // 記事＆固定ページ
            setup_postdata($post);
            $ogp_title = $post->post_title;
            $ogp_description = mb_substr(get_the_excerpt(), 0, 100);
            $ogp_url = get_permalink();
            wp_reset_postdata();
        } elseif (is_front_page() || is_home()) {
            // トップページ
            $ogp_title = get_bloginfo('name');
            $ogp_description = get_bloginfo('description');
            $ogp_url = home_url();
        }

        // og:type
        $ogp_type = (is_front_page() || is_home()) ? 'website' : 'article';

        // og:image
        if (is_singular() && has_post_thumbnail()) {
            $ps_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
            $ogp_image = $ps_thumb[0];
        }

        // 出力するOGPタグをまとめる
        $html = "\n";
        $html .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '">' . "\n";
        $html .= '<meta property="og:description" content="' . esc_attr($ogp_description) . '">' . "\n";
        $html .= '<meta property="og:type" content="' . $ogp_type . '">' . "\n";
        $html .= '<meta property="og:url" content="' . esc_url($ogp_url) . '">' . "\n";
        $html .= '<meta property="og:image" content="' . esc_url($ogp_image) . '">' . "\n";
        $html .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
        $html .= '<meta name="twitter:card" content="' . $twitter_card . '">' . "\n";
        $html .= '<meta name="twitter:site" content="' . $twitter_site . '">' . "\n";
        $html .= '<meta property="og:locale" content="ja_JP">' . "\n";

        if ($facebook_app_id != "") {
            $html .= '<meta property="fb:app_id" content="' . $facebook_app_id . '">' . "\n";
        }

        echo $html;
    }
}
// headタグ内にOGPを出力する
add_action('wp_head', 'my_meta_ogp');
