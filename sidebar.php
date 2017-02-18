<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cider_Mill_Apartments
 */

?>

<aside id="secondary" class="widget-area" role="complementary">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) :
            dynamic_sidebar( 'sidebar-1' );

        else :
            if ( function_exists( 'cider_mill_specials_sidebar' ) ) {
                cider_mill_specials_sidebar();
            }

        endif; ?>
</aside><!-- #secondary -->