<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
        			<?php get_template_part('loop'); ?>
                </div>
            </main><!-- #endRegion BLOG-->
			
            <?php get_sidebar(); ?><!-- #endRegion SIDEBAR-->
            
        </div><!--endRow-->
    </div><!--endContainer-->
</div><!--endContainer-fluid-->
<!-- !PHP / BLOG Page -->

<?php get_footer(); ?>
