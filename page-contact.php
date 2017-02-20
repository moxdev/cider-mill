<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cider_Mill_Apartments
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'contact' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.

            if ( function_exists( 'mm4_you_contact_form' ) ) {
                mm4_you_contact_form();
            }

            ?>

            <div class="map-wrapper">
                <div style="width:200px; height:200px;" id="map-canvas"></div>
                <form id="get-directions">
                    <label>Starting Address:
                        <input type="text" id="start">
                        <input type="hidden" id="end" value="38.800410,-76.987104">
                    </label>
                    <div id="response-panel"></div>
                    <input type="submit" value="Get Directions">
                </form>
            </div> <!-- map-wrapper -->

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
