<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header>
            <section class="top-bar1">
                <div class="container">
                    <div class="row">
                        <div class="search col-md-9">Pesquisa</div>
                        <div class="account col-md-3">
                            <div class="account-menu">Menu Conta</div>
                            <div class="cart">Carrinho</div>
                    </div>
                    </div>
                </div>
            </section>
            <section class="top-bar2">
                <div class="container">
                    <div class="row">
                        <div class="brand col-md-3 col-lg-2">Logo</div>
                        <div class="site-menu col-md-9 col-lg-10">
                           <nav class="main-menu navbar navbar-expand-md navbar-light float-md-right" role="navigation">     
                            <!-- Brand and toggle get grouped for better mobile display -->     
                             <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse" 
                             data-bs-target="#bs-example-navbar-collapse-1" 
                             aria-controls="bs-example-navbar-collapse-1" 
                             aria-expanded="false" 
                             aria-label="<?php esc_attr_e( 'Toggle navigation', 'dalpe' ); ?>">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'dalpe_main_menu',
                                        'depth'             => 3,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'bs-example-navbar-collapse-1',
                                        'menu_class'        => 'nav navbar-nav',
                                        'fallback_cb'       => 'bootstrap_5_wp_nav_menu_walker::fallback',
                                        'walker'            => new bootstrap_5_wp_nav_menu_walker(),
                                    ) );
                                    ?>
                                    
                           </nav>
                        </div>
                    </div>
                </div>
            </section>
        </header>