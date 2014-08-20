<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<section id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>

		<header class="archive-header">

			<?php
					// Show an optional term description.
			$term_description = term_description();
			if ( ! empty( $term_description ) ) :
				printf( '<div class="taxonomy-description">%s</div>', $term_description );
			endif;
			?>
		</header><!-- .archive-header -->

		<div class="lista-propostas" id="masonry">
			<div class="grid-sizer"></div>
			<?php
					// Start the Loop.
			while ( have_posts() ) : the_post();
			?>
			<div class="item">
				<?
					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
					?>
					<p>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" title="Clique para compartilhar esta proposta no Facebook"><span class="sr-only">Compartilhe no Facebook</span><span class="icon-compartilhe-facebook"></span></a>
					</p>
					<hr>
				</div> <!-- .item -->
				
				<?
				endwhile;
					// Previous/next page navigation.
				?>
			</div> <!-- .lista-propostas -->
			<?
			twentyfourteen_paging_nav();

			else :
					// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
			?>
		</div><!-- #content -->
	</section><!-- #primary -->
	<script type="text/javascript">
	jQuery(document).ready(function ($) {
		var $container = $('#masonry');
		// initialize
		$container.masonry({
			columnWidth: ".grid-sizer",
			itemSelector: '.item'
		});
	}); 
	</script>
	<?php
	get_sidebar( 'content' );
	get_footer();
