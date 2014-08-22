<?php
/**
 * The template for displaying posts in the Image post format
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php

		if ( is_single() ) :
			the_title( '<h1 class="entry-title text-primary">', '</h1>' );
		else :
			the_title( '<h1 class="entry-title text-primary"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		endif;
		?>

	</header><!-- .entry-header -->
	<div class="entry-content">
		<div class="media">
			<span class="pull-left"><?php the_post_thumbnail('large'); ?></span>
			<div class="media-body">


				<div class="descricao">
					<?php the_content(); ?>
				</div> <!-- .descricao -->
				<?php 
				if ( has_post_thumbnail() ) {
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
					$filetype = wp_check_filetype($large_image_url[0]);
					echo '<a href="' . $large_image_url[0] . '" class="" title="' . the_title_attribute( 'echo=0' ) . '" download="'.the_title_attribute( 'echo=0' ).'.'.$filetype['ext'].'">';
					echo 'Download da imagem';
					echo '</a>';        
				}
				?>
				<?php edit_post_link( __( 'Edit', 'twentyfourteen' ), ' / <span class="edit-link">', '</span>' ); ?>
				<hr>
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=607367415995227&version=v2.0";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-like" data-href="<? the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
			</div> <!-- .media-body -->
		</div> <!-- .media -->
	</div><!-- .entry-content -->
</article><!-- #post-## -->
