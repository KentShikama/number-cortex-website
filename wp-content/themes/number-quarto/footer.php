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
    <!-- Plugin from addthis for social networking buttons -->
    <div id="center-buttons" class="addthis_toolbox addthis_default_style addthis_32x32_style">
        <a class="addthis_button_facebook addthis_button_preferred_1 at300b" title="Facebook" href="#"><span class=" at300bs at15nc at15t_facebook"><span class="at_a11y">Share on facebook</span></span></a>
        <a class="addthis_button_twitter addthis_button_preferred_2 at300b" title="Tweet" href="#"><span class=" at300bs at15nc at15t_twitter"><span class="at_a11y">Share on twitter</span></span></a>
        <a class="addthis_button_gmail addthis_button_preferred_3 at300b" href="http://www.addthis.com/bookmark.php?v=300&amp;winname=addthis&amp;pub=ra-51ee1b910e0fe34b&amp;source=tbx32-300&amp;lng=en-US&amp;s=gmail&amp;url=http%3A%2F%2Flocalhost%3A8888%2F&amp;title=Number%20Quarto%20%7C%20Play%20the%20Board%20Game%20on%20the%20Android%20and%20iPhone%20%7C%20Take%20a%20moment%20to%20play%20a%20new%20twist%20of%20the%20classic%20board%20and%20puzzle%20game%20Quarto.&amp;ate=AT-ra-51ee1b910e0fe34b/-/-/5391ce50905a71c6/2/5391bf32e09426a1&amp;frommenu=1&amp;ips=1&amp;uid=5391bf32e09426a1&amp;ct=1&amp;tt=0&amp;captcha_provider=nucaptcha" target="_blank" title="Gmail"><span class=" at300bs at15nc at15t_gmail"><span class="at_a11y">Share on gmail</span></span></a>
        <a class="addthis_button_favorites addthis_button_preferred_4 at300b" title="Favorites" href="#"><span class=" at300bs at15nc at15t_favorites"><span class="at_a11y">Share on favorites</span></span></a>            
    </div>
    <script type="text/javascript">var addthis_config = {"data_track_addressbar": true};</script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51ee1b910e0fe34b"></script>
    <!-- AddThis Button END -->
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
