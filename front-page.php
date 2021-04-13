<?php get_header() ?>

<main>
    <section class="FV">
        <div id="visual">
            <ul class="bxslider">
                <li class="pc" style="background-image:url(<?php echo get_template_directory_uri() ?>/images/FV1.png);"></li>
                <li style="background-image:url(<?php echo get_template_directory_uri() ?>/images/FV2.png);"></li>
                <li style="background-image:url(<?php echo get_template_directory_uri() ?>/images/FV3.png);"></li>
                <li style="background-image:url(<?php echo get_template_directory_uri() ?>/images/FV4.png);"></li>
            </ul>
        </div>
        <div id="contents">
            <img src="<?php echo get_template_directory_uri() ?>/images/catchphrase.png" alt="キャッチフレーズ">
        </div>
    </section>
    <section class="catchphraze sp">
        <p class="header">
            <img src="<?php echo get_template_directory_uri() ?>/images/catchphrase-sp.png" alt="キャッチフレーズ">
        </p>
        <p class="contents">
            弊社は「技術の向上、懇切、迅速、安全」をモットーに、
            堅実、信用を第一とした経営を目指します。
            地方最大級の建築内装業者として、皆様のご信頼に
            お応えするべく、日々内装工事に取り組んで参ります。
        </p>
    </section>

    <section class="policy">
        <h1>— 基本理念 —</h1>
        <section class="management-policy">

            <div class="contents">
                <h2>経営方針</h2>
                <p>株式会社AJDは、顧客の満足と信頼を得るため「技術の向上、懇切、迅速、安全」を第一目標とし、誠心誠意尽くし社会に信頼・貢献できる企業を目指します。</p>
            </div>

        </section>
        <section class="quolity-policy">
            <div class="contents">
                <h2>品質方針</h2>
                <p>「良い仕事をして顧客の信頼を得る」を基本理念とした品質至上と顧客優先のもと、顧客と社会地域に信頼感・安心感・満足感を与える品質を提供する。</p>
            </div>
        </section>
    </section>

    <section class="works">
        <h2>施工実績</h2>
        <p>株式会社AJDで施工を行った一部事例です。</p>
        <div class="article-list-container">
            <?php
            $cat_posts = get_posts(array(
                'post_type' => 'post',
                'category_name' => 'works',
                'posts_per_page' => '4',
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post);
                    get_template_part('src/article_list');
                endforeach;
            endif;
            ?>
        </div>
        <a class="detail" href="https://web-app-create.com/sample_sites/ajd/works/">
            もっと詳しく見る
        </a>
    </section>

    <section class="reqruit">
        <div class="__left">
            <h2>一緒に働く仲間を<br>募集しています</h2>
            <p>株式会社AJDでは、<br>
                正社員を募集しています。<br>
                詳しくは採用情報ページをご覧ください。</p>
        </div>
        <div class="__right">
            <a href="https://web-app-create.com/sample_sites/ajd/recruit/">
                採用情報
            </a>
        </div>
    </section>
</main>

<?php get_footer() ?>