<!doctype html>
<html <?php language_attributes(); ?>>

  <head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NK68ZDJG');</script>
<!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <script>
    // viewportの切り替え
    (function() {
      function viewport() {
        var width = screen.width;
        if (width < 374) {
          document.querySelector("meta[name='viewport']").setAttribute("content", "width=375");
        } else {
          document.querySelector("meta[name='viewport']").setAttribute("content",
            "width=device-width,initial-scale=1");
        }
      }
      window.addEventListener('DOMContentLoaded', function() {
        viewport();
      });
      window.addEventListener('resize', function() {
        viewport();
      });
    })();
    </script>
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>


  <body <?php body_class(); ?> id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NK68ZDJG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <div class="body-outline"></div>

    <?php wp_body_open(); ?>

    <!-- site全体 -->
    <div class="l-site" id="page-top">

      <!-- ページトップ -->
      <div class="c-pageTop">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-top.png" alt="ページトップ" width="50">
      </div>

      <div class="c-fix-banner">
        <p class="c-fix-banner__item">
          <a href="https://line.me/R/ti/p/@377vsvoo" target="_blank"><img
              src='<?php echo esc_url(get_template_directory_uri()); ?>/img/fix-side01.png' alt="LINE予約はこちら"
              width="64"></a>
        </p>
      </div>



      <div class="c-fix-banner-sp">

        <p class="c-fix-banner-sp__item c-fix-banner-sp__item01">
          <a href="tel:0338115590" target="_blank"><img
              src='<?php echo esc_url(get_template_directory_uri()); ?>/img/fixed-tel.png' alt="電話予約"
              width="27"><span>03-3811-5590</span></a>
        </p>

        <p class="c-fix-banner-sp__item c-fix-banner-sp__item02">
          <a href="https://line.me/R/ti/p/@377vsvoo" target="_blank"><img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-line.png'
              alt="LINE予約はこちら" width="44"><span>LINE予約</span></a>
        </p>
      </div>








      <header class="l-header">



        <div class="">

          <div class="l-container-header l-header-area1Wrap">
            <div class="l-header__area1">
              <!-- Header Left -->
              <div class="l-header__left">
                <!-- Logo -->
                <div class="l-header-branding">
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="l-header-branding"
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo_header.png" alt="本郷獣医科病院"
                      width="370" height="73">
                  </a>
                </div>
              </div>

              <!-- Header Right -->
              <div class="l-header__right">

                <div class="l-header-insta">
                  <a href="https://www.instagram.com/hongou.ah/" target="_blank"><img class="l-header-insta__img"
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-instagram.png" alt="インスタグラム"
                      width="30"></a>
                </div>

                <!-- PC Menu -->
                <div class="l-gnav">
                  <nav class="c-gnav">

                    <div class="menu-header-gnavi-container">
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img class="menu-icon-home"
                              src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-home.png" alt="ホーム"
                              width="16">
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="<?php echo esc_url(home_url('/medical/')); ?>">
                            <span class="menu-item-jp">診療案内</span>
                            <span class="menu-item-en">MEDICAL</span>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="<?php echo esc_url(home_url('/s-treatment/')); ?>">
                            <span class="menu-item-jp">外科診療</span>
                            <span class="menu-item-en">S.TREATMENT</span>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="<?php echo esc_url(home_url('/clinic/')); ?>">
                            <span class="menu-item-jp">医院案内</span>
                            <span class="menu-item-en">CLINIC</span>
                          </a>
                        </li>

                        <li class="menu-item">
                          <a href="<?php echo esc_url(home_url('/price-list/')); ?>">
                            <span class="menu-item-jp">料金表</span>
                            <span class="menu-item-en">PRICE LIST</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </nav>
                </div>

                <div class="l-header-banner">
                  <div class="l-header-banner__item">
                    <p class="l-header-banner__memo">〒113-0034 東京都文京区湯島4-1-21</p>
                    <a href="tel:03-3811-5590" target="_blank"><img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-tel.png" alt=""
                        width="25">03-3811-5590</a>
                  </div>
                </div>

              </div><!-- /l-header-right -->
            </div>

          </div>




          <!-- SP Menu Button -->
          <div class="c-nav-button__wrap" id="c-nav-button__wrap">
            <button class="c-nav-button js-toggle-button">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
          <!-- /SP Menu Button -->
          <nav class="c-nav-sp">
            <div class="menu-header-gnavi-container">
              <ul class="menu">
                <li class="menu-item">
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="menu-icon-home"
                      src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-home-white.png" alt="ホーム"
                      width="16">
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?php echo esc_url(home_url('/medical/')); ?>">
                    <span class="menu-item-jp">診療案内</span>
                    <span class="menu-item-en">MEDICAL</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?php echo esc_url(home_url('/s-treatment/')); ?>">
                    <span class="menu-item-jp">外科診療</span>
                    <span class="menu-item-en">S.TREATMENT</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?php echo esc_url(home_url('/clinic/')); ?>">
                    <span class="menu-item-jp">医院案内</span>
                    <span class="menu-item-en">CLINIC</span>
                  </a>
                </li>

                <li class="menu-item">
                  <a href="<?php echo esc_url(home_url('/price-list/')); ?>">
                    <span class="menu-item-jp">料金表</span>
                    <span class="menu-item-en">PRICE LIST</span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>

        </div><!-- /container -->

      </header>