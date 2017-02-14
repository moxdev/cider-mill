<?php
/**
 * Template part for displaying Homepage content in frontpage.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cider_Mill_Apartments
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php $headline = get_field( 'headline_text' ); ?>
        <?php $secondary = get_field( 'secondary_headline_text' ); ?>
        <?php $tag = get_field( 'headline_tagline' ); ?>

        <?php if( $headline ) : ?>
            <h1><?php echo $headline; ?><span> <?php echo $secondary; ?></span></h1>
            <h2><?php echo $tag; ?></h2
        <?php endif; ?>

    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
            the_content();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cider_mill' ),
                'after'  => '</div>',
            ) );
        ?>
    </div><!-- .entry-content -->

    <?php if ( get_edit_post_link() ) : ?>
        <footer class="entry-footer">
            <?php
                edit_post_link(
                    sprintf(
                        /* translators: %s: Name of current post */
                        esc_html__( 'Edit %s', 'cider_mill' ),
                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
            ?>
        </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-## -->
