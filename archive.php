<?php
/**
 * The template for displaying archive pages
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package sjsmwebsiteV2
 */

get_header();
?>

<!-- PHP / Normal Page -->            
<div id="blog-bg" class="container-fluid">               
    <div class="container">
        <div class="row">
           
            <main id="blog" class="col-lg-9"> <!--######### id="page" #########-->
                <div class="blog-posts"> <!--######### class="page-content" #########-->
				<!-- ######################################################## -->
				
					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						//the_posts_navigation();
						the_posts_pagination(); 

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				<!-- ######################################################## -->	
				</div>
            </main><!-- #endRegion BLOG-->
			
            <?php get_sidebar(); ?><!-- #endRegion SIDEBAR-->
            
        </div><!--endRow-->
    </div><!--endContainer-->
</div><!--endContainer-fluid-->
<!-- !PHP / BLOG Page -->

<?php get_footer(); ?>

