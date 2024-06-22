<?php
function allegrosuites_footer_part() {
ob_start();
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
<?php
return ob_get_clean();
}
add_shortcode('allegrosuites_footer_part', 'allegrosuites_footer_part');