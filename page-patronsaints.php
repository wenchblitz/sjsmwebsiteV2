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

                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header><!-- .entry-header -->
                    
                    <div class="container-fluid">
                        <ul class="list-patron-saints">
                            <?php
                                $args = array(
                                    'depth' => 1,
                                    'include' => 17,
                                    'title_li' => '',
                                );

                                wp_list_pages($args);
                                $args['child_of'] = $args['include'];
                                unset($args['include']);
                                wp_list_pages($args);
                            ?>
                        </ul>
                    </div>

                </div>
            </main><!-- #endRegion BLOG-->
			
            <?php get_template_part('page-sidebar') ?>
            
        </div><!--endRow-->
    </div><!--endContainer-->
</div><!--endContainer-fluid-->
<!-- !PHP / BLOG Page -->

<?php get_footer(); ?>
