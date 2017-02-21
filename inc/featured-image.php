<?php
/**
 * Displays Featured Image
 *
 * @package Cider_Mill_Apartments
 */

function cider_mill_featured_image() {

    if( is_page_template( 'frontpage.php' ) ) {

        if ( has_post_thumbnail() ) { ?>
            <figure class="featured-image center-aligned">

                <?php $img     =  the_post_thumbnail('featured-image'); ?>
                <?php $caption =  get_post(get_post_thumbnail_id())->post_excerpt; ?>

                <?php if( !empty($img) ) : ?>
                    <?php echo $img; ?>
                <?php endif; ?>

                <?php if( !empty($caption) ) : ?>
                    <h1><?php echo $caption; ?></h1>
                <?php endif; ?>

            </figure><?php
        }
    } else {

        if ( has_post_thumbnail() ) { ?>
            <figure class="featured-image center-aligned">

                <?php $img     =  the_post_thumbnail('featured-image'); ?>

                <?php if( !empty($img) ) : ?>
                    <div class="background-image">
                        <?php echo $img; ?>
                    </div>
                <?php endif; ?>

            </figure><?php
        }
    }
}