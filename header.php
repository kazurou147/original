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

      <div class="l-container-header">

        <div class="l-header">


          <!-- Header Left -->
          <div class="l-header__left">

            <!-- SP Menu Button -->
            <div class="c-nav-button__wrap" id="c-nav-button__wrap">
              <button class="c-nav-button js-toggle-button">
                <span></span>
                <span></span>
                <span></span>
              </button>
            </div>
            <!-- /SP Menu Button -->

            <!-- SP Menu -->
            <div class="c-nav-sp">
              <div class="l-container">
                <div class="c-nav-sp__inner">
                  <div class="c-nav-sp__img">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo_nav.svg" alt="東京HARTクリニック" width="228">
                    </a>
                  </div>
                  <div class="c-nav-sp__content">
                    <nav>
                      <?php if (has_nav_menu('navigation_sp')) : ?>
                        <?php wp_nav_menu(array(
                          'theme_location' => 'navigation_sp'
                        ));
                        ?>
                      <?php endif; ?>
                    </nav>
                    <div class="c-nav-sp-info">
                      <div class="c-nav-sp-info__item">
                        <div class="c-nav-sp-info__tel">
                          <a href="tel:0357663660"><img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/icon_tel-large.png' width="35">03-5766-3660</a>
                        </div>
                        <p class="c-nav-sp-info__memo">
                          受付時間：9:00～12:00 15:00～18:00<br>
                          休診日：日曜・祝日・木曜午後
                        </p>
                      </div>

                      <div class="c-nav-sp-info-btn">
                        <div class="c-nav-sp-info-btn__item">
                          <a class="c-btn-radius c-bgcolor-pink01" href="<?php echo esc_url(home_url('/')); ?>"><img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/icon_beginer-small.png' width="15">初診予約</a>
                        </div>
                        <div class="c-nav-sp-info-btn__item">
                          <a class="c-btn-radius c-bgcolor-pink02" href="<?php echo esc_url(home_url('/')); ?>"><img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/icon_again-small.png' width="17.5">再診予約</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /SP Menu -->

            <!-- Logo -->
            <div class="l-header__branding">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo_header.svg" alt="東京HARTクリニック" width="245">
              </a>
            </div>

          </div>




          <!-- Header Right -->
          <div class="l-header__right">

            <!-- PC Menu -->
            <div class="l-nav">
              <nav class="c-nav">
                <?php if (has_nav_menu('navigation')) : ?>
                  <?php wp_nav_menu(array(
                    'theme_location' => 'navigation'
                  ));
                  ?>
                <?php endif; ?>
              </nav>
            </div>

            <div class="l-header-button">
              <div class="l-header-button__item">
                <a class="c-btn-radius c-bgcolor-pink01" href="<?php echo esc_url(home_url('/')); ?>"><img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/icon_beginer-small.png' width="15">初診予約</a>
              </div>
              <div class="l-header-button__item">
                <a class="c-btn-radius c-bgcolor-pink02" href="<?php echo esc_url(home_url('/')); ?>"><img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/icon_again-small.png' width="17.5">再診予約</a>
              </div>
            </div>

          </div><!-- /l-header-right -->

        </div><!-- /l-header-wrap -->

      </div><!-- /container -->

    </header>