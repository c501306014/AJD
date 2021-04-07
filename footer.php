<?php wp_footer() ?>
<footer>
    <section class="footer-contents">
        <div class="__left">
            <h2>株式会社AJD</h2>
            <p>〒012-3456 大阪府大阪市●●-●●-●●<br>
                tel.0123-45-6789</p>
        </div>
        <div class="__right">
            <!-- links -->
            <?php if (is_active_sidebar('footer-widgets')) : ?>
                <ul>
                    <?php dynamic_sidebar('footer-widgets'); ?>
                </ul>
            <?php else : ?>
                <h1>not found sidebar</h1>
            <?php endif; ?>
        </div>
    </section>
    <nav>
        <div class="__left">
            <p>Copyright © AJD Co.. Ltd. All Rights Reserved.</p>
        </div>
        <div class="__right pc">

            <!-- links -->
            <?php if (is_active_sidebar('footer-nav-widgets')) : ?>
                <ul>
                    <?php dynamic_sidebar('footer-nav-widgets'); ?>
                </ul>
            <?php else : ?>
                <h1>not found sidebar</h1>
            <?php endif; ?>

        </div>
    </nav>
</footer>

<button id="scroll-to-top">
    <i class="material-icons">
        keyboard_arrow_up
    </i>
</button>


</body>

</html>