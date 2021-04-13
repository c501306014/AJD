<?php get_header() ?>

<main>
    <?php if (have_posts()) :
        while (have_posts()) : the_post();
    ?>

            <div class="container">
                <?php the_content(); ?>
            </div>

    <?php endwhile;
    endif; ?>

    <article class="works-list">
        <div class="article-list-container">
            <?php
            $cat_posts = get_posts(array(
                'post_type' => 'post',
                'category_name' => 'works',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            if ($cat_posts) :
                foreach ($cat_posts as $post) :
                    setup_postdata($post);
                    get_template_part('src/article_list');
                endforeach;
            endif;
            ?>
        </div>
    </article>

</main>

<?php get_footer() ?>