<?php
/**
 * Floorplan
 *
 * @package Cider_Mill_Apartments
 */


function cider_mill_one_bedroom_floorplan() {
    if( have_rows('one_bedroom_floor_plans', 'options') ): ?>

        <div class="one-bedroom-section">

        <?php while ( have_rows('one_bedroom_floor_plans', 'options') ) : the_row();

            $desc = get_sub_field('description', 'options');
            $sqft = get_sub_field('square_footage', 'options');
            $img = get_sub_field('floorplan_image', 'options');
            $url = get_sub_field('availability_link', 'options'); ?>

            <div class="floorplan">

                <?php if( !empty($img) ): ?>
                    <a href="<?php echo $img['url']; ?>" class="fp-trigger" data-imagelightbox="c"><img src="<?php echo $img['sizes']['thumbnail']; ?>" alt="<?php echo $img['alt']; ?>" description="<?php echo $img['description']; ?>"></a>
                <?php endif; ?>

                <?php if( !empty($desc) ) : ?>
                    <div class="description"><?php echo $desc; ?></div>
                <?php endif; ?>

                <?php if( !empty($sqft) ) : ?>
                    <div class="sqft"><?php echo $sqft; ?></div>
                <?php endif; ?>

                <?php if( !empty($url) ) : ?>
                    <a href="<?php echo $url; ?>"><button class="availability-link">view all availability &raquo;</button></a>
                <?php endif; ?>

            </div>

        <?php endwhile; ?>
        </div><!-- one-bedroom-section -->
    <?php endif;
}

function cider_mill_two_bedroom_floorplan() {
    if( have_rows('two_bedroom_floor_plans', 'options') ): ?>

        <div class="two-bedroom-section">

        <?php while ( have_rows('two_bedroom_floor_plans', 'options') ) : the_row();

            $desc = get_sub_field('description', 'options');
            $sqft = get_sub_field('square_footage', 'options');
            $img = get_sub_field('floorplan_image', 'options');
            $url = get_sub_field('availability_link', 'options'); ?>

            <div class="floorplan">

                <?php if( !empty($img) ): ?>
                    <a href="<?php echo $img['url']; ?>" class="fp-trigger" data-imagelightbox="c"><img src="<?php echo $img['sizes']['thumbnail']; ?>" alt="<?php echo $img['alt']; ?>" description="<?php echo $img['description']; ?>"></a>
                <?php endif; ?>

                <?php if( !empty($desc) ) : ?>
                    <div class="description"><?php echo $desc; ?></div>
                <?php endif; ?>

                <?php if( !empty($sqft) ) : ?>
                    <div class="sqft"><?php echo $sqft; ?></div>
                <?php endif; ?>

                <?php if( !empty($url) ) : ?>
                    <a href="<?php echo $url; ?>"><button class="availability-link">view all availability &raquo;</button></a>
                <?php endif; ?>

            </div>

        <?php endwhile; ?>
        </div><!-- two-bedroom-section -->
    <?php endif;
}

function cider_mill_three_bedroom_floorplan() {
    if( have_rows('three_bedroom_floor_plans', 'options') ): ?>

        <div class="three-bedroom-section">

        <?php while ( have_rows('three_bedroom_floor_plans', 'options') ) : the_row();

            $desc = get_sub_field('description', 'options');
            $sqft = get_sub_field('square_footage', 'options');
            $img = get_sub_field('floorplan_image', 'options');
            $url = get_sub_field('availability_link', 'options'); ?>

            <div class="floorplan">

                <?php if( !empty($img) ): ?>
                    <a href="<?php echo $img['url']; ?>" class="fp-trigger" data-imagelightbox="c"><img src="<?php echo $img['sizes']['thumbnail']; ?>" alt="<?php echo $img['alt']; ?>" description="<?php echo $img['description']; ?>"></a>
                <?php endif; ?>

                <?php if( !empty($desc) ) : ?>
                    <div class="description"><?php echo $desc; ?></div>
                <?php endif; ?>

                <?php if( !empty($sqft) ) : ?>
                    <div class="sqft"><?php echo $sqft; ?></div>
                <?php endif; ?>

                <?php if( !empty($url) ) : ?>
                    <a href="<?php echo $url; ?>"><button class="availability-link">view all availability &raquo;</button></a>
                <?php endif; ?>

            </div>

        <?php endwhile; ?>
        </div><!-- three-bedroom-section -->
    <?php endif;
}

function cider_mill_floorplan_listing() { ?>
    <div id="floorplans-section">
        <div class="floorplans-wrapper">
            <div class='fp-models'>

                <?php if ( function_exists( 'cider_mill_one_bedroom_floorplan' ) ) {
                    cider_mill_one_bedroom_floorplan();
                } ?>

            <?php if ( function_exists( 'cider_mill_two_bedroom_floorplan' ) ) {
                cider_mill_two_bedroom_floorplan();
            } ?>

            <?php if ( function_exists( 'cider_mill_three_bedroom_floorplan' ) ) {
                cider_mill_three_bedroom_floorplan();
            } ?>

            </div>


        </div><!-- floorplans-wrapper -->
    </div><!-- floorplans-section -->

<?php
}



