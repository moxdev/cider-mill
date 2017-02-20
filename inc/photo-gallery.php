<?php
/**
 * Photo Gallery
 *
 *
 * @package Cider_Mill_Apartments
 */

function cider_mill_photo_gallery() {
    if( is_page_template('page-photo-gallery.php') ) {
        if( function_exists('get_field') ) {
            $images = get_field('photo_gallery');

            if( $images ): ?>
            <div class="photo-gallery-section">
                <div class="gallery-wrapper">
                    <ul>
                    <?php foreach( $images as $image ): ?>
                         <li>
                            <?php if( $image ): ?>
                                <a href="<?php echo $image['url']; ?>" class="fp-trigger" data-imagelightbox="c"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $img['alt']; ?>" description="<?php echo $image['description']; ?>"></a>
                            <?php endif; ?>
                            <p><?php echo $image['caption']; ?></p>
                        </li>
                    <?php endforeach; ?>
                    </ul>
            <?php endif; ?>

                </div><!-- gallery-wrapper -->
            </div><!-- photo-gallery-section -->
        <?php }
    }
}