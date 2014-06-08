<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Number Quarto
 */
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div id="numberquartobanner">
            <div id="numberquartobannercontents">
                <div id="number_quarto_title"><img src="/images/number_quarto_title.png" alt="number quarto title" /></div>
                <div id="coming_soon"><img src="/images/coming_soon.png" alt="coming soon" /></div>
                <div id="number_quarto_app_phone"><img src="/images/number_quarto_on_iPhone_and_iPod_touch.png" alt="number quarto preview on iPhone and iPod touch" /></div>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
