<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sjsmwebsiteV2
 */

get_header();
?>

<!-- PHP / BLOG Page -->            
<div id="blog-bg" class="container-fluid">               
    <div class="container">
        <div class="row">
           
            <main id="blog" class="col-lg-9">
                <div class="blog-posts">

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						// --> the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						/*
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						*/

					endwhile; // End of the loop.
					?>

                </div>
            </main><!-- #endRegion BLOG-->
			
            <?php get_sidebar(); ?><!-- #endRegion SIDEBAR-->
            
        </div><!--endRow-->
    </div><!--endContainer-->
</div><!--endContainer-fluid-->
<!-- !PHP / BLOG Page -->

<?php get_footer(); ?>
