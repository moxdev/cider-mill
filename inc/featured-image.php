<?php
/**
 * Displays Featured Image
 *
 * @package Cider_Mill_Apartments
 */

function cider_mill_featured_image() {

    if ( function_exists( 'get_field' ) ) {
        $on_page_title = get_field('on_page_title');

        if( is_front_page() ) {
            $featured_img = get_the_post_thumbnail();

            if( !empty($on_page_title) ) : ?>

                <header class="page-header-front-page <?php if(has_post_thumbnail()): echo 'has-thumb'; endif; ?>" <?php if(has_post_thumbnail()): ?>style="background-image:url(<?php echo the_post_thumbnail_url( 'home-feature' ); ?>)"<?php endif; ?>>

                    <h1 class="entry-title wrapper"><?php echo $on_page_title; ?></h1>

                    <?php if(has_post_thumbnail()) { ?>

                        <div class="screen-reader-text">
                            <?php the_post_thumbnail('home-feature' ); ?>
                        </div>

                    <?php } ?>

                </header><!-- header -->

            <?php endif;

        }else {

            if ( has_post_thumbnail() ) { ?>
                <header class="featured-image">

                    <?php $img = the_post_thumbnail('featured-image'); ?>

                    <?php if( !empty($img) ) : ?>
                        <?php echo $img; ?>
                    <?php endif; ?>

                </header><?php
            }
        }
    }
}