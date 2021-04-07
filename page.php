<?php get_header() ?>

<main class="page">
    <?php if (have_posts()) :
        while (have_posts()) : the_post();
    ?>

            <div class="container">
                <?php the_content(); ?>
            </div>

    <?php endwhile;
    endif; ?>
</main>





<?php get_footer() ?>