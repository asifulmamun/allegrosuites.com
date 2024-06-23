<?php
function allegrosuites_header_part() {
ob_start();
?>
<header id="masthead" class="site-header">
    <?php //get_template_part( 'template-parts/global/nav_top', '' ); ?>
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
                    
                        <!-- <ul id="menu-menu" class="nav navbar-nav">
                            <li id="menu-item-121"
                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-121 active">
                                <a title="Home" href="http://hotelbeachway.com/">Home</a></li>
                            <li id="menu-item-21"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-21 dropdown">
                                <a title="About Hotel" href="#" data-toggle="dropdown"
                                    class="dropdown-toggle" aria-haspopup="true">About Hotel <span
                                        class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li id="menu-item-152"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-152">
                                        <a title="About Hotel Beach Way"
                                            href="https://hotelbeachway.com/about-hotel-beach-way/">About
                                            Hotel Beach Way</a></li>
                                    <li id="menu-item-151"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-151">
                                        <a title="Tourist’s Reviews"
                                            href="https://hotelbeachway.com/tourists-reviews/">Tourist’s
                                            Reviews</a></li>
                                    <li id="menu-item-249"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-249">
                                        <a title="Photo Gallery"
                                            href="https://hotelbeachway.com/photo-gallery/">Photo
                                            Gallery</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </nav>
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="reservation"><a href="https://hotelbeachway.book-onlinenow.net/"
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