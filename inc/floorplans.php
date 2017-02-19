<?php
/**
 * Floorplan Listing Page Content
 *
 * @package Cider_Mill_Apartments
 */

function cider_mill_floorplan_listing() { ?>
    <div id="floorplans-section">
        <div class="floorplans-wrapper">

        <?php if( have_rows('one_bedroom_floor_plans', 'options') ): ?>

            <div class="one-bedroom-section">

            <?php while ( have_rows('one_bedroom_floor_plans', 'options') ) : the_row();

                $desc = get_sub_field('description', 'options');
                $sqft = get_sub_field('square_footage', 'options');
                $image = get_sub_field('floorplan_image', 'options');
                $url = get_sub_field('availability_link', 'options'); ?>

                <div class="floorplan">
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="">
                    <div class="description"><?php echo $desc; ?></div>
                    <div class="sqft"><?php echo $sqft; ?></div>
                    <a href="<?php echo $url; ?>"><button class="availability-link">view all availability &raquo;</button></a>
                </div>

            </div><!-- one-bedroom-section -->

            <?php endwhile;

        endif; ?>

        <?php if( have_rows('two_bedroom_floor_plans', 'options') ): ?>

            <div class="two-bedroom-section">

            <?php while ( have_rows('two_bedroom_floor_plans', 'options') ) : the_row();

                $desc = get_sub_field('description', 'options');
                $sqft = get_sub_field('square_footage', 'options');
                $image = get_sub_field('floorplan_image', 'options');
                $url = get_sub_field('availability_link', 'options'); ?>

                <div class="floorplan">
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="">
                    <div class="description"><?php echo $desc; ?></div>
                    <div class="sqft"><?php echo $sqft; ?></div>
                    <a href="<?php echo $url; ?>"><button class="availability-link">view all availability &raquo;</button></a>
                </div>

            </div><!-- two-bedroom-section -->

            <?php endwhile;

        endif; ?>

        <?php if( have_rows('three_bedroom_floor_plans', 'options') ): ?>

            <div class="three-bedroom-section">

            <?php while ( have_rows('three_bedroom_floor_plans', 'options') ) : the_row();

                $desc = get_sub_field('description', 'options');
                $sqft = get_sub_field('square_footage', 'options');
                $image = get_sub_field('floorplan_image', 'options');
                $url = get_sub_field('availability_link', 'options'); ?>

                <div class="floorplan">
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="">
                    <div class="description"><?php echo $desc; ?></div>
                    <div class="sqft"><?php echo $sqft; ?></div>
                    <a href="<?php echo $url; ?>"><button class="availability-link">view all availability &raquo;</button></a>
                </div>

            </div><!-- three-bedroom-section -->

            <?php endwhile;

        endif; ?>

        </div><!-- floorplans-wrapper -->
    </div><!-- floorplans-section -->

<?php
}