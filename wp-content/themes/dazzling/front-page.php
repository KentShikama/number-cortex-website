<?php
if (get_option('show_on_front') == 'posts') {
    get_template_part('index');
} elseif ('page' == get_option('show_on_front')) {

    get_header();
    ?>

    <div id="numberquartomobilebanner">
        <img src="/images/number_cortex_mobile_banner.jpg" alt="number cortex mobile banner" />    
    </div>
    <div id="numberquartobanner">
        <div id="numberquartobannercontents">
            <div id="number_quarto_title"><img src="/images/number_cortex_title.png" alt="number cortex title" /></div>
            <div id="coming_soon"><img src="/images/coming_soon.png" alt="coming soon" /></div>
            <div id="number_quarto_app_phone"><img src="/images/number_cortex_app.png" alt="number cortex app preview" /></div>
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