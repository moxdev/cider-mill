<?php
/**
 * Displays the Features and Amentites for 'page-amenities.php'
 *
 * @package Cider_Mill_Apartments
 */

function cider_mill_features_amenities() {

    if( is_page_template( 'page-amenities.php' ) ) {

        $f_disclaimer = get_field( 'features_disclaimer' );
        $a_disclaimer = get_field( 'amenities_disclaimer' );

        if( have_rows('features') ): ?>

            <div id="features-section">
                <h1>Apartment Features</h1>
                <div class="features-wrapper">

                    <?php while( have_rows('features') ): the_row();

                        $img = get_sub_field('image');
                        $title = get_sub_field('title');
                        $link = get_sub_field('link'); ?>

                        <div class="feature-highlight">

                            <?php if( !empty($img) ) : ?>

                                <img src="<?php echo $img['sizes']['thumbnail']; ?>"/>

                            <?php endif; ?>

                            <?php if( !empty($title) ) : ?>

                                <span><?php echo $title; ?></span>

                            <?php endif; ?>

                            <?php if( !empty($link) ) : ?>

                                <span><?php echo $link; ?></span>

                            <?php endif; ?>

                        </div><!-- feature-highlight -->

                    <?php endwhile; ?>

                </div><!-- features-wrapper -->
                <p class="disclaimer"><?php echo $f_disclaimer; ?></p>
            </div><!-- features-section -->

        <?php endif;

        if( have_rows('amenities') ): ?>

            <div id="amenities-section">
                <h1>Apartment Amenities</h1>
                <div class="amenities-wrapper">

                    <?php while( have_rows('amenities') ): the_row();

                        $img = get_sub_field('image');
                        $title = get_sub_field('title');
                        $link = get_sub_field('link'); ?>

                        <div class="amenities-highlight">

                            <?php if( !empty($img) ) : ?>

                                <img src="<?php echo $img['sizes']['thumbnail']; ?>"/>

                            <?php endif; ?>

                            <?php if( !empty($title) ) : ?>

                                <span><?php echo $title; ?></span>

                            <?php endif; ?>

                            <?php if( !empty($link) ) : ?>

                                <span><?php echo $link; ?></span>

                            <?php endif; ?>

                        </div><!-- amenities-highlight -->

                    <?php endwhile; ?>

                </div><!-- amenities-wrapper -->
                <p class="disclaimer"><?php echo $a_disclaimer; ?></p>
            </div><!-- amenities-section -->

        <?php endif;
    }
}