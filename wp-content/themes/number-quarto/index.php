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

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                    <img src="<?php bloginfo('template_url'); ?>/images/numberquarto.png" alt="number quarto splash image" />
                    <h1 style="color: #1f2374; font-family: gills sans; font-size: 3em; padding: 10px; padding-bottom: 30px;">Coming Soon...</h1>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
