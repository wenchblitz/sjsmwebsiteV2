<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sjsmwebsiteV2
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <figure class="post-image">        
	<a href="<?php the_permalink(); ?>">
        <?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} else { ?>
				<img src="<?php bloginfo('template_directory'); ?>/img/st-clare-building-mobile.jpg" alt="<?php the_title(); ?>" class="img-responsive"/>
		<?php } ?>
	</a>
    </figure>

    <section class="post-content">
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title post-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

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
                
		<div class="entry-content">
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( '.....', 'sjsmv2' ),
					//<span class="screen-reader-text"> "%s"</span>
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sjsmv2' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<!--<footer class="entry-footer">
			<?php sjsmv2_entry_footer(); ?>
		</footer>--><!-- .entry-footer -->

    </section>
</article>