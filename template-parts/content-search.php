<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sjsmwebsiteV2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<figure class="post-image">
        <?php //sjsmv2_post_thumbnail(); ?>

        <?php if ( has_post_thumbnail() ) {

				the_post_thumbnail();

			} else { ?>

				<img src="<?php bloginfo('template_directory'); ?>/img/st-clare-building.jpg" alt="<?php the_title(); ?>" />

		<?php } ?>
    </figure>

    <section class="post-content">
		<header class="entry-header">
			<?php 
			
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

			if ( 'post' === get_post_type() ) :
				?>
					<div class="meta">
						<ul>
						    <li><i class="far fa-folder-open"></i>&nbsp; <?php foreach((get_the_category()) as $category) { echo $category->cat_name; } ?></li>
						    <li><i class="far fa-calendar"></i>&nbsp; <?php the_time('F jS, Y') ?></li>
						    <li><i class="far fa-user-circle"></i>&nbsp; <?php the_author(); ?></li>
						</ul>
					</div>	
			<?php endif; ?>
		</header><!-- .entry-header -->	   	
        
        
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	</section>
	
</article><!-- #post-<?php the_ID(); ?> -->
