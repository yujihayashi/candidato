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
					<a href="#" title="Acompanhe o programa do dia">
						<span class="imagem"><img src="" alt=""></span>
						<span class="icone"><span class="icone-content"><span class="icon-video"></span></span></span>
						<span class="content">
							<span class="content-extra">Acompanhe o programa do dia</span>
						</span>
					</a>
				</div> <!-- .box -->
				<div class="box">
					<a href="#" title="Os compromissos do 70 com o povo">
						<span class="imagem"><img src="" alt=""></span>
						<span class="icone"><span class="icone-content"><span class="icon-balao"></span></span></span>
						<span class="content">
							<span class="content-extra">Os compromissos do 70 com o povo</span>
						</span>
					</a>
				</div> <!-- .box -->
				<div class="box">
					<a href="#" title="Veja a agenda de Bruno e Aline">
						<span class="imagem"><img src="" alt=""></span>
						<span class="icone"><span class="icone-content"><span class="icon-agenda"></span></span></span>
						<span class="content">
							<span class="content-extra">Veja a agenda de Bruno e Aline</span>
						</span>
					</a>
				</div> <!-- .box -->
				<div class="box">
					<a href="#" title="Escute o jingle da campanha">
						<span class="imagem"><img src="" alt=""></span>
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
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>