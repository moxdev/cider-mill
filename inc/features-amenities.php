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

                        if(!empty($img) ) { ?>

                            <div class="highlight" style="background-image:url( <?php echo $img['sizes']['thumbnail']; ?> )">
                                <div class="wrapper">
                                    <div class="title"><?php echo $title; ?></div>
                                    <div class="view"><a href="#">View</a></div>
                                </div>
                            </div><!-- highlight -->

                        <?php

                        } else { ?>

                            <div class="highlight">
                                <div class="wrapper">
                                    <div class="title"><?php echo $title; ?></div>
                                    <div class="view"><a href="#">View</a></div>
                                </div>
                            </div><!-- highlight -->

                        <?php }

                    endwhile; ?>

                </div><!-- features-wrapper -->
                <p class="disclaimer"><?php echo $f_disclaimer; ?></p>
            </div><!-- features-section -->

        <?php endif;

        if( have_rows('amenities') ): ?>

            <div id="amenities-section">
                <h1>Community Amenities</h1>
                <div class="amenities-wrapper">

                    <?php while( have_rows('amenities') ): the_row();

                        $img = get_sub_field('image');
                        $title = get_sub_field('title');

                        if(!empty($img) ) { ?>

                            <div class="highlight" style="background-image:url( <?php echo $img['sizes']['thumbnail']; ?> )">
                                <div class="wrapper">
                                    <div class="title"><?php echo $title; ?></div>
                                    <div class="view"><a href="#">View</a></div>
                                </div>
                            </div><!-- highlight -->

                        <?php

                        } else { ?>

                            <div class="highlight">
                                <div class="wrapper">
                                    <div class="title"><?php echo $title; ?></div>
                                    <div class="view"><a href="#">View</a></div>
                                </div>
                            </div><!-- highlight -->

                        <?php }

                    endwhile; ?>

                </div><!-- features-wrapper -->
                <p class="disclaimer"><?php echo $a_disclaimer; ?></p>

            </div><!-- amenities-section -->

        <?php endif;
    }
}