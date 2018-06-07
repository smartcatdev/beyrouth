<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Zenith
 */
get_header(); ?>

    <div id="primary" class="content-area">
        
        <main id="main" class="site-main zenith-single-edd-product">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'download' );

            endwhile; // End of the loop.
            ?>
            
        </main><!-- #main -->
        
    </div><!-- #primary -->

<?php
get_footer();
