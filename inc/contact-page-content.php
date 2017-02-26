<?php
/**
 * Content Tagline shows at the bottom of the content on all pages for 'content-page.php'
 *
 * @package Cider_Mill_Apartments
 */


function cider_mill_contact_page_content() { ?>

    <div class="company-information-section">

        <?php $street = get_field('address', 'option');
            $city = get_field('city', 'option');
            $state = get_field('state', 'option');
            $zip = get_field('zip', 'option');
            $leasing = get_field('leasing', 'option');
            $phone = get_field('phone', 'option');
            $fax = get_field('fax', 'option'); ?>

        <div class="schema-section">
            <div itemscope itemtype="http://schema.org/LocalBusiness">
                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">

                    <?php if( !empty($street) ) : ?>
                        <span itemprop="streetAddress"><?php echo $street; ?><br></span>
                    <?php endif; ?>

                    <?php if( !empty($city) ) : ?>
                        <span itemprop="addressLocality"><?php echo $city; ?></span>,
                    <?php endif; ?>

                    <?php if( !empty($state) ) : ?>
                        <span itemprop="addressRegion"><?php echo $state; ?></span>
                    <?php endif; ?>

                    <?php if( !empty($zip) ) : ?>
                        <span itemprop="postalCode"><?php echo $zip; ?><br></span>
                    <?php endif; ?>

                    <?php if( !empty($leasing) ) : ?>
                        Leasing: <span itemprop="telephone"><?php echo $leasing; ?><br></span>
                    <?php endif; ?>

                    <?php if( !empty($phone) ) : ?>
                        Phone: <span itemprop="telephone"><?php echo $phone; ?><br></span>
                    <?php endif; ?>

                    <?php if( !empty($fax) ) : ?>
                        Fax: <span itemprop="faxNumber"><?php echo $fax; ?><br></span>
                    <?php endif; ?>
                </div><!-- itemprop="address" -->
            </div><!-- itemscope -->
        </div><!-- schema-section -->
    </div><!-- company-information-section -->

    <div class="hours-section">
        <?php if( have_rows('hours', 'option') ): ?>

            <?php while( have_rows('hours', 'option') ): the_row();

                $day = get_sub_field( 'day' );
                $open = get_sub_field( 'open' );
                $close = get_sub_field( 'close' ); ?>

                <span><?php echo $day ?>: </span><span><?php echo $open ?> - </span><span><?php echo $close ?></span><br>

            <?php endwhile;

        endif; ?>
    </div><!-- hours-section -->

    <?php
}