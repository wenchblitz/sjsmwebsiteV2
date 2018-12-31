<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sjsmwebsiteV2
 */

get_header();
?>

<!-- PHP / Normal Page -->            
<div id="page-bg" class="container-fluid">               
    <div class="container">
        <div class="row">
           
            <main id="page" class="col-lg-12"> <!-- col-9 -->
                <div class="page-content">

					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'sjsmv2' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'sjsmv2' ); ?></p>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->

                </div>
            </main><!-- #endRegion BLOG-->
			
            <?php //get_sidebar(); ?><!-- #endRegion SIDEBAR-->
            
        </div><!--endRow-->
    </div><!--endContainer-->
</div><!--endContainer-fluid-->
<!-- !PHP / BLOG Page -->

<?php get_footer(); ?>
