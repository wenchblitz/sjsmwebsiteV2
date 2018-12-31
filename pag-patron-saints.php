<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sjsmwebsiteV2
 */

/*
 * Template Name: Patron Saints
 */

get_header();
?>

<!-- PHP / Normal Page -->            
<div id="page-bg" class="container-fluid">               
    <div class="container">
        <div class="row">
           
            <main id="page" class="col-lg-9">
                <div class="page-content">
                <!-- ### -->



                <!-- ### -->
                </div>
            </main><!-- #endRegion BLOG-->
			
			<?php get_template_part('page-sidebar') ?>
            
        </div><!--endRow-->
    </div><!--endContainer-->
</div><!--endContainer-fluid-->
<!-- !PHP / BLOG Page -->

<?php get_footer(); ?>