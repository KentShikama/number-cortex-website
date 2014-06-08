<?php
if (get_option('show_on_front') == 'posts') {
    get_template_part('index');
} elseif ('page' == get_option('show_on_front')) {

    get_header();
    ?>

    <div id="numberquartobanner">
        <div id="numberquartobannercontents">
            <div id="number_quarto_title"><img src="/images/number_quarto_title.png" alt="number quarto title" /></div>
            <div id="coming_soon"><img src="/images/coming_soon.png" alt="coming soon" /></div>
            <div id="number_quarto_app_phone"><img src="/images/number_quarto_on_iPhone_and_iPod_touch.png" alt="number quarto preview on iPhone and iPod touch" /></div>
        </div>
    </div>

    <div id="content" class="site-content container">
        <div id="primary" class="content-area col-sm-12 col-md-12">
            <main id="main" class="site-main" role="main">

            </main><!-- #main -->
        </div><!-- #primary -->


        <?php
        get_footer();
    }
    ?>