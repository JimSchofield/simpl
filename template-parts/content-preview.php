<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simpl
 */

?>

<!-- <div class="constrain constrain_center"> -->
<div class="constrain constrain_center">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="preview">
            <div class="preview-header">
                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;
                ?>
            </div>
                <?php
                if ( 'post' === get_post_type() ) :
                    ?>
                    <div class="entry-meta">
                        <?php
                        simpl_posted_on();
                        simpl_posted_by();
                        ?>
                    </div><!-- .entry-meta -->
                <?php endif; ?>
        </div><!-- .entry-header -->
    </article><!-- #post-<?php the_ID(); ?> -->
</div>
