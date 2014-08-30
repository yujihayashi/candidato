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
			<div class="col-md-6"><a href="<?php the_permalink(); ?>" title="Clique para assistir"><?php the_title(); ?></a></div>
			<div class="col-md-6 text-right"><a href="/categoria/programas-tv/"><strong>Ver todos</strong></a></div>
		</div>

		<a href="<?php the_permalink(); ?>" title="Clique para assistir"><?php the_post_thumbnail(); ?></a>
		<?php
		endforeach; 
		?>
	</div> <!-- .col-md-5 -->
	<div class="col-md-7">
		<h2 class="h1 text-primary">No Rádio:</h2>
		<?
		global $post;
		$args = array( 'numberposts' => 1, 'category_name' => 'audios' );
		$posts = get_posts( $args );
		foreach( $posts as $post ): setup_postdata($post); 

		?>
		<div class="row">
			<div class="col-md-6"><a href="<?php the_permalink(); ?>" title="Clique para assistir"><?php the_title(); ?></a></div>
			<div class="col-md-6 text-right"><a href="/categoria/audios/"><strong>Ver todos</strong></a></div>
		</div>

		<?php the_content(); ?>
		<?php
		endforeach; 
		?>
		<h2 class="h1 text-primary">Agenda:</h2>
		<ul class="media-list lista-agenda">
			<?php

			global $post;
			$all_events = tribe_get_events(
				array(
					'eventDisplay'=>'upcoming',
					'posts_per_page'=>5
					)
				);

			foreach($all_events as $post) {
				setup_postdata($post);
				?>

				<li class="media">
						<?php if ( has_post_thumbnail() ) { ?>
							<span class="pull-left"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></span>
						<?php } ?>
					<div class="media-body">
						<h3 class="media-heading h4"><small><span class="event-date"><?php echo tribe_get_start_date($post->ID, true, 'j M Y'); ?></span></small><br><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
						
					</div> <!-- .media-body -->
				</li>

				<?php } //endforeach ?>
				<?php wp_reset_query(); ?>
			</ul>
			<p class="text-right">
				<a href="/agenda/">Ver agenda completa</a>
			</p>
		</div> <!-- .col-md-7 -->
	</div> <!-- .row -->

	<?php
	get_sidebar( 'content' );
	get_footer();
