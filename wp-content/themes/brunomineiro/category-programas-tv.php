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
<h1 class="text-primary sr-only">Programas de TV</h1>
<?php if ( have_posts() ) : ?>
	<ul class="lista-tv">
		
		<?php
					// Start the Loop.
		while ( have_posts() ) : the_post();
		?>
		<li>
			<?
					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
					?>
				</li>
				<?
				endwhile;
				?>
			</ul>
			<?
					// Previous/next page navigation.
			twentyfourteen_paging_nav();
			?>
			<?
			else :
					// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
			?>
			<script type="text/javascript">
				jQuery(document).ready(function ($) {
					var ul = $(".lista-tv");
					ul.find("> li:nth-child(3n-2)").addClass("first");
				});
			</script>
			<?php
			get_sidebar( 'content' );
			get_footer();
