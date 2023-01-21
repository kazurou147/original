<!doctype html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>


  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- site全体 -->
    <div class="l-site" id="page-top">

      <!-- ページトップ -->
      <div class="c-pageTop">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon_top.png" alt="">
      </div>



      <header>

        <div class="l-container">

          <div class="l-header">


            <!-- Header Left -->
            <div class="l-header__left">
              <!-- Logo -->
              <div class="l-header__branding">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo_header.png" alt=""
                    width="200">
                </a>
              </div>

            </div>




            <!-- Header Right -->
            <div class="l-header__right">

              <!-- PC Menu -->
              <div class="l-nav__wrap">
                <nav class="c-nav">
                  <?php if (has_nav_menu('navigation')) : ?>
                  <?php wp_nav_menu(array(
                    'theme_location' => 'navigation'
                  ));
                  ?>
                  <?php endif; ?>
                </nav>
              </div>

            </div><!-- /l-header-right -->


            <!-- SP Menu Button -->
            <div class="c-nav-button__wrap" id="c-nav-button__wrap">
              <button class="c-nav-button js-toggle-button">
                <span></span>
                <span></span>
                <span></span>
              </button>
              <div class="c-nav-button__text">Menu</div>
            </div>
            <!-- /SP Menu Button -->

            <!-- SP Menu -->
            <nav class="c-nav-sp">
              <?php if (has_nav_menu('navigation')) : ?>
              <?php wp_nav_menu(array(
                  'theme_location' => 'navigation'
                ));
                ?>
              <?php endif; ?>
            </nav>

            <!-- /SP Menu -->



          </div><!-- /l-header-wrap -->

        </div><!-- /container -->

      </header>