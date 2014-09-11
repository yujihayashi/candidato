<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
</div> <!-- .site-central -->
</div> <!-- .container -->
</div><!-- #main -->
<div class="extra-boxs">
	<div class="site-boxs">
		<div class="container">
			<div class="lista-box">
				<div class="box">
					<?php


					$args = array( 'posts_per_page' => 1, 'category_name' => 'programas-tv' );

					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<a href="<?php the_permalink(); ?>" title="Veja o programa de TV do Paulo">
						<span class="imagem">
							<?php the_post_thumbnail();?>
						</span>
						<span class="icone"><span class="icone-content"><span class="icon-video"></span></span></span>
						<span class="content">
							<span class="content-extra">Veja o programa de TV do Paulo</span>
						</span>
					</a>
					<?php endforeach; 
					wp_reset_postdata();?>
				</div> <!-- .box -->
				<div class="box">
					<a href="/categoria/propostas/" title="As propostas de Paulo pro povo">
						<span class="imagem"><img src="<?php echo get_template_directory_uri(); ?>/images/propostas.jpg" alt="Paulo Rocha conversando com eleitora"></span>
						<span class="icone"><span class="icone-content"><span class="icon-balao"></span></span></span>
						<span class="content">
							<span class="content-extra">As propostas de Paulo pro povo</span>
						</span>
					</a>
				</div> <!-- .box -->
				<div class="box">
					<a href="/agenda/" title="Acompanhe a agenda do 131">
						<span class="imagem"><img src="<?php echo get_template_directory_uri(); ?>/images/agenda.jpg" alt="Comócio Paulo Rocha"></span>
						<span class="icone"><span class="icone-content"><span class="icon-agenda"></span></span></span>
						<span class="content">
							<span class="content-extra">Acompanhe a agenda do 131</span>
						</span>
					</a>
				</div> <!-- .box -->
				<div class="box">
					<a href="#" title="Escute o jingle da campanha">
						<span class="imagem"><img src="<?php echo get_template_directory_uri(); ?>/images/audio.jpg" alt="Bandeira e comício Paulo Rocha"></span>
						<span class="icone"><span class="icone-content"><span class="icon-audio"></span></span></span>
						<span class="content">
							<span class="content-extra">Escute o jingle da campanha</span>
						</span>
					</a>
				</div> <!-- .box -->
			</div> <!-- .lista-box -->
		</div> <!-- .container -->
	</div> <!-- .site-boxs -->
</div> <!-- .extra-boxs -->
<footer id="colophon" class="extra-footer" role="contentinfo">
	<div class="site-footer">
		<div class="container">
			<?php get_sidebar( 'footer' ); ?>
		</div> <!-- .container -->
	</div> <!-- .site-footer -->
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10928573-36', 'auto');
  ga('send', 'pageview');

</script>
<!-- <script src="http://localhost:35729/livereload.js"></script> -->
</body>
</html>