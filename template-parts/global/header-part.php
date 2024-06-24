<?php
function allegrosuites_header_part() {
ob_start();
?>
<header id="masthead" class="site-header">
    <div class="middle_bar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="logo">
                        <?php
                            the_custom_logo();
                            if ( is_front_page() && is_home() ) :
                                ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
                            else :
                                ?>
                                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                        rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                <?php
                            endif;
                            $allegrosuites_description = get_bloginfo( 'description', 'display' );
                            if ( $allegrosuites_description || is_customize_preview() ) :
                        ?>
                        <p class="site-description">
                            <?php echo $allegrosuites_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <nav class="navbar mainmenu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#maintaslim">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                            </button>
                            <a class="navbar-brand hidden-md hidden-sm hidden-lg" href=""><i
                                    class="fa fa-home"></i></a>
                        </div>
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary_menu',
                                    'container'      => 'div',
                                    'container_id'   => 'maintaslim',
                                    'container_class'=> 'collapse navbar-collapse',
                                    'menu_id'        => 'menu-menu',
                                    'menu_class'     => 'nav navbar-nav',
                                    'walker'          => new Custom_Walker_Nav_Menu(),
                                )
                            );
                        ?>
                    </nav>
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="reservation"><a href="/book"
                            title="Book now at Hotel Beach Way – Cox's Bazar" target="_blank">BOOK NOW<i
                                class="fa fa-calendar"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php
return ob_get_clean();
}
add_shortcode('allegrosuites_header_part', 'allegrosuites_header_part');