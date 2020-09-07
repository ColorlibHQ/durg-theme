<!-- ***** Header Area Start ***** -->
<header>
    <div class="header-area">
        <?php
        // Header Topbar
        if( durg_opt( 'durg_header_topbar_toggle' ) == 1 ){
            $phone_number       = !empty( durg_opt( 'durg_phone_number' ) ) ? durg_opt( 'durg_phone_number' ) : '';
            $email_address      = !empty( durg_opt( 'durg_email_field' ) ) ? durg_opt( 'durg_email_field' ) : '';
            ?>
            <div class="header-top black-bg d-none d-md-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="header-contact">
                                <a href="#"><i class="fa fa-phone"></i> <?php echo esc_html( $phone_number )?></a>
                                <a href="#"><i class="fa fa-envelope"></i> <?php echo esc_html( $email_address )?></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="header-top-menu">
                                <nav>
                                    <?php
                                    if(has_nav_menu('top-bar-menu')) {
                                        wp_nav_menu(array(
                                            'menu'           => 'top-bar-menu',
                                            'theme_location' => 'top-bar-menu',
                                            'menu_id'        => false,
                                            'container'      => false,
                                            'menu_class'     => null,
                                            'depth'          => 1
                                        ));
                                    }
                                    ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <div id="sticky-header" class="main-header-area white-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <?php
                                echo durg_theme_logo( 'navbar-brand' );
                            ?>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-7">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <?php
                                    if(has_nav_menu('primary-menu')) {
                                        wp_nav_menu(array(
                                            'menu'           => 'primary-menu',
                                            'theme_location' => 'primary-menu',
                                            'menu_id'        => 'navigation',
                                            'container'      => false,
                                            'menu_class'     => null,
                                            'walker'         => new durg_bootstrap_navwalker,
                                            'depth'          => 3
                                        ));
                                    }
                                ?>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3">
                        <div class="quote-area">
                            <div class="search-bar">
                                <a id="search_1" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            </div>

                            <?php
                                // Quote button
                                if( durg_opt( 'durg_quote_btn_label' ) ){
                                    $quote_btn_label    = !empty( durg_opt( 'durg_quote_btn_label' ) ) ? durg_opt( 'durg_quote_btn_label' ) : '';
                                    $quote_btn_url      = !empty( durg_opt( 'durg_quote_btn_url' ) ) ? durg_opt( 'durg_quote_btn_url' ) : '';
                                    ?>
                                    <div class="get-quote d-none d-lg-block">
                                        <a class="boxed-btn" href="<?php echo esc_url($quote_btn_url)?>"><?php echo esc_html($quote_btn_label)?></a>
                                    </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>

                <div class="search_input" id="search_input_box">
                    <div class="container ">
                        <form class="d-flex justify-content-between search-inner">
                            <input type="text" name="s" class="form-control" id="search_input" placeholder="Search Here">
                            <button type="submit" class="btn"></button>
                            <span class="fa fa-close" id="close_search" title="Close Search"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>