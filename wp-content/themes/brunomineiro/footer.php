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
</div> <!-- .container -->
</div><!-- #main -->
<div class="extra-boxs">
	<div class="site-boxs">
		<div class="container">
			<div class="lista-box">
				<div class="box">
					<a href="">
						<span class="imagem"><img src="" alt=""></span>
						<span class="icone"><span class="icon-video"></span></span>
						<span class="content">
							Acompanhe o programa do dia
						</span>
					</a>
				</div> <!-- .box -->
				<div class="box">
					<a href="">
						<span class="imagem"><img src="" alt=""></span>
						<span class="icone"><span class="icon-balao"></span></span>
						<span class="content">
							Os compromissos do 70 com o povo
						</span>
					</a>
				</div> <!-- .box -->
				<div class="box">
					<a href="">
						<span class="imagem"><img src="" alt=""></span>
						<span class="icone"><span class="icon-agenda"></span></span>
						<span class="content">
							Veja a agenda de Bruno e Aline
						</span>
					</a>
				</div> <!-- .box -->
				<div class="box">
					<a href="">
						<span class="imagem"><img src="" alt=""></span>
						<span class="icone"><span class="icon-audio"></span></span>
						<span class="content">
							Escute o Jungle da campanha
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
			<div class="row">
				<div class="col-md-4">
					<?php get_sidebar( 'footer' ); ?>
				</div> <!-- .col-md-4 -->
				<div class="col-md-3 text-center">
					<br>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/bruno-mineiro-sm.png" alt="Logotipo <?php bloginfo( 'name' ); ?>"></a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/ptdob.png" alt="Logotipo PTdoB"></a>
				</div> <!-- .col-md-3 text-center -->
				<div class="col-md-5">
					
				</div> <!-- .col-md-5 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .site-footer -->
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>