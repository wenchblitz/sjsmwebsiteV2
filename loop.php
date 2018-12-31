<?php
// Define the default query args
//global $wp_query;
//$defaults = $wp_query->query_vars;

// Exclude 'Featured' category in recent post
//$args = array('cat'=>-25);

// Display atleast 3 recent posts
//$posts = array('posts_per_page'=>5);

// merge the default with your custom args
//$args = wp_parse_args($posts, $args, $defaults);

//query_posts($args);

		if ( have_posts() ) :

			/*
			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
			*/

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
			//wp_pagenavi();
		
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>