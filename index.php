<?php get_header() ?>

<main>
    <?php if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <section>
                <main>
                    <h1><?php the_title(); ?>（開発中）</h1>
                    <?php the_content(); ?>
                </main>
            </section>
    <?php endwhile;
    endif; ?>
</main>




<?php get_footer() ?>