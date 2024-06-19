<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package allegrosuites
 */

?>

<section class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="copyrighttext">
					<p>Copyrights © 2013-2024. Hotel Beach Way. All rights reserved. | Developed By : <a
							href="https://asifulmamun.info.bd" title="Al Mamun - asifulmamun">@asifulmamun</a></p>
				</div>
			</div>

			<div class="col-md-4 col-sm-12 col-xs-12">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'copyright_menu',
							'container'      => 'div',
							'container_id'   => '',
							'container_class'=> 'copyright_menu',
							'menu_id'        => '',
							'menu_class'     => '',
							// 'walker'          => new Custom_Walker_Nav_Menu(),
						)
					);
				?>
			</div>
		</div>
	</div>
</section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>