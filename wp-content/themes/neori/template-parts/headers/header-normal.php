<!-- Normal Header START -->

  <div class="container">

    <header>

<!-- Logo -->
      <div class="row">

        <?php if(!get_theme_mod('neori_logo_image_setting')) : ?>

          <div class="header-upper" style="height: 69px">

          <div class="logo" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png'); width: 163px; height: 69px;"><a href="<?php echo esc_url( home_url() );  ?>"><h1><?php bloginfo('name'); ?></h1></a></div>

        <?php else : ?>

          <div class="header-upper col-6" style="height: <?php echo esc_html( get_theme_mod ('neori_logo_height_setting', '')); ?>px;">

          <div class="logo" style="background-image: url('<?php echo get_theme_mod ('neori_logo_image_setting', ''); ?>'); width: <?php echo esc_html( get_theme_mod ('neori_logo_width_setting', '')); ?>px; height: <?php echo esc_html( get_theme_mod ('neori_logo_height_setting', '')); ?>px;"><a href="<?php echo esc_url( home_url() ); ?>"><h1><?php bloginfo('name'); ?></h1></a></div>

        <?php endif; ?>

  <!-- Social Icons -->

          <?php if(!get_theme_mod('neori_logo_image_setting')) : ?>

            <div class="logo-right" style="height: 69px">

          <?php else : ?>

            <div class="logo-right" style="height: <?php echo esc_html( get_theme_mod ('neori_logo_height_setting', '')); ?>px;">

          <?php endif; ?>



            </div><!-- /.logo-right -->

          </div><!-- /.header-upper -->

  <!-- Description -->

        <?php if(get_theme_mod( 'neori_show_site_description_setting' ) == true) : ?>

          <div class="description"><?php bloginfo('description'); ?></div>

        <?php endif; ?>

  <!-- Navigation -->

        <div class="header-lower col-6" style="text-align: right; padding-top: 10px;">

          <nav class="main-navigation">

            <?php
              wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'fallback_cb' => 'false',
              ) );
            ?>

          </nav><!-- /.main-navigation -->

          <div class="offcanvas-navigation">
                      
            <i class="fa fa-close offcanvas-close"></i>
                      
            <div class="social-icons">

              <?php if(get_theme_mod('neori_header_first_social_icon_type_setting')) : ?>

                <a href="<?php echo esc_url( get_theme_mod ('neori_header_first_social_icon_url_setting', '')); ?>"><i class="fa fa-<?php echo esc_html( get_theme_mod ('neori_header_first_social_icon_type_setting', '')); ?>"></i></a>

              <?php endif; ?>

              <?php if(get_theme_mod('neori_header_second_social_icon_type_setting')) : ?>

                <a href="<?php echo esc_url( get_theme_mod ('neori_header_second_social_icon_url_setting', '')); ?>"><i class="fa fa-<?php echo esc_html( get_theme_mod ('neori_header_second_social_icon_type_setting', '')); ?>"></i></a>

              <?php endif; ?>

              <?php if(get_theme_mod('neori_header_third_social_icon_type_setting')) : ?>

                <a href="<?php echo esc_url( get_theme_mod ('neori_header_third_social_icon_url_setting', '')); ?>"><i class="fa fa-<?php echo esc_html( get_theme_mod ('neori_header_third_social_icon_type_setting', '')); ?>"></i></a>

              <?php endif; ?>

              <?php if(get_theme_mod('neori_header_fourth_social_icon_type_setting')) : ?>

                <a href="<?php echo esc_url( get_theme_mod ('neori_header_fourth_social_icon_url_setting', '')); ?>"><i class="fa fa-<?php echo esc_html( get_theme_mod ('neori_header_fourth_social_icon_type_setting', '')); ?>"></i></a>

              <?php endif; ?>

              <?php if(get_theme_mod('neori_header_fifth_social_icon_type_setting')) : ?>

                <a href="<?php echo esc_url( get_theme_mod ('neori_header_fifth_social_icon_url_setting', '')); ?>"><i class="fa fa-<?php echo esc_html( get_theme_mod ('neori_header_fifth_social_icon_type_setting', '')); ?>"></i></a>

              <?php endif; ?>

              <?php if(get_theme_mod('neori_header_sixth_social_icon_type_setting')) : ?>

                <a href="<?php echo esc_url( get_theme_mod ('neori_header_sixth_social_icon_url_setting', '')); ?>"><i class="fa fa-<?php echo esc_html( get_theme_mod ('neori_header_sixth_social_icon_type_setting', '')); ?>"></i></a>

              <?php endif; ?>

              <?php if ( class_exists( 'WooCommerce' ) ) : ?>

                <a href="<?php echo wc_get_cart_url(); ?>"><i class="fa fa-shopping-cart cart-icon"></i></a>

              <?php endif; ?>

              <form id="navbarsearchform-offcanvas" class="navbarsearchform" role="search" action="<?php echo esc_url( home_url() );  ?>/" method="get">

                <input type="search" name="s" value="<?php the_search_query(); ?> ">

              </form>

            </div><!-- /.social-icons -->

            <?php
              wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'fallback_cb' => 'false',
              ) );
            ?>

          </div> <!-- /.offcanvas-navigation -->

        </div><!-- /.header-lower -->

      </div>

    </header>

  </div><!-- /.container -->

<!-- Normal Header END -->
