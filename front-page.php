<?php get_header() ?>

<main>
    <section class="FV">
        <div id="visual">
            <ul class="bxslider">
                <li style="background-image:url(<?php echo get_template_directory_uri() ?>/images/FV1.png);"></li>
                <li style="background-image:url(<?php echo get_template_directory_uri() ?>/images/FV2.png);"></li>
                <li style="background-image:url(<?php echo get_template_directory_uri() ?>/images/FV3.png);"></li>
                <li style="background-image:url(<?php echo get_template_directory_uri() ?>/images/FV4.png);"></li>
            </ul>
        </div>
        <div id="contents">
            <img src="<?php echo get_template_directory_uri() ?>/images/catch_fraze.png" alt="キャッチフレーズ">
        </div>
    </section>


    <section class="management-policy">
        <div class="base-policy">基本理念</div>
        <h2>経営方針</h2>
        <p>株式会社AJDは、顧客の満足と信頼を得るため「安全・安心・安定」を第一目標とし、誠心誠意尽くし社会に信頼・貢献できる企業を目指します。</p>

    </section>
    <section class="quolity-policy">
        <div class="base-policy">基本理念</div>
        <h2>品質方針</h2>
        <p>「良い仕事をして顧客の信頼を得る」を基本理念とした品質至上と顧客優先のもと、顧客と社会地域に信頼感・安心感・満足感を与える品質を提供する。</p>
    </section>

    <section class="works">
        <h2>施工実績</h2>
        <p>株式会社AJDで施工を行った、一部事例になります。</p>
        <div class="article-list-container">
            <?php
            $cat_posts = get_posts(array(
                'post_type' => 'post',
                'category_name' => 'works',
                'post_per_page' => '4',
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post);
                    get_template_part('src/article_list');
                endforeach;
            endif;
            ?>
        </div>
        <a class="detail" href="https://web-app-create.com/sample_sites/ajd/works/">もっと詳しく見る</a>
    </section>

    <section class="reqruit">
        <div class="__left">
            <h2>一緒に働く仲間を<br>募集しています</h2>
            <p>株式会社AJDでは、<br>
                正社員を募集しています。<br>
                詳しくは採用情報ページをご覧ください。</p>
        </div>
        <div class="__right">
            <a href="https://web-app-create.com/sample_sites/ajd/recruit/">採用情報</a>
        </div>
    </section>
</main>

<?php get_footer() ?>