<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Number Quarto
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        Copyright © 2014 Kent Shikama. All rights reserved. <a href="<?php echo get_permalink(26); ?>">Terms of Use</a>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.flexnav.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        $(".flexnav").flexNav({
            'animationSpeed': 250, // default for drop down animation speed
            'transitionOpacity': true, // default for opacity animation
            'calcItemWidths': false, // dynamically calcs top level nav item widths
            'hover': true            // would you like hover support?      
        });
    });
</script>
</body>
</html>
