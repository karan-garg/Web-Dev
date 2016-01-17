<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Patchwork
 * @since Patchwork 1.0
 * Template: No Sidebar
 */

get_header(); ?>

		<div id="primary" class="site-content">
			<div id="content" style = "width:100%" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					
				<?php endwhile; // end of the loop. ?>
<br><br><br><br>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->

<?php get_footer(); ?>