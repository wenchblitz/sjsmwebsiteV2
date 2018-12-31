<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package sjsmwebsiteV2
 */

get_header();
?>

<!-- PHP / Normal Page -->            
<div id="blog-bg" class="container-fluid">               
    <div class="container">
        <div class="row">
           
            <main id="blog" class="col-lg-9"> <!-- col-lg-9 -->
                <div class="blog-posts"> 
				
					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title">
								<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for: %s', 'sjsmv2' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h1>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						//the_posts_navigation();
						the_posts_pagination(); 

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>

					
				</div>
            </main><!-- #endRegion BLOG-->
			
            <?php get_sidebar(); ?><!-- #endRegion SIDEBAR-->
            
        </div><!--endRow-->
    </div><!--endContainer-->
</div><!--endContainer-fluid-->
<!-- !PHP / BLOG Page -->

<?php get_footer(); ?>
