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
<h1 class="sr-only text-primary">Campanha</h1>
<div class="row">
	<div class="col-md-5">
		<h2 class="h1 text-primary">Na TV:</h2>
		<?
		global $post;
$args = array( 'numberposts' => 1, 'category_name' => 'programas-tv' );
$posts = get_posts( $args );
foreach( $posts as $post ): setup_postdata($post); 

?>
<div class="row">
	<div class="col-md-6"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
	<div class="col-md-6 text-right"><a href="/categoria/programas-tv/"><strong>Ver todos</strong></a></div>
</div>

<?php the_excerpt(); ?>
<?php
endforeach; 
?>
	</div> <!-- .col-md-5 -->
	<div class="col-md-7">
		<h2 class="h1 text-primary">No Rádio:</h2>
		<h2 class="h1 text-primary">Agenda:</h2>
		
	</div> <!-- .col-md-7 -->
</div> <!-- .row -->

			<?php
			get_sidebar( 'content' );
			get_footer();
