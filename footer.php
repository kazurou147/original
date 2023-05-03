<!-- フッター前に共通で表示するエリアがあればコメントを外す  -->

<?php
if (!is_front_page()) : ?>
  <section>
    <?php get_template_part('template/link', 'bottom'); ?>
  </section>
<?php endif; ?>




<footer>
  <div class="l-container-small">
    <div class="l-footer">

      <h2 class="l-footer__brand">
        <a href="/"><img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/logo_footer.svg' alt='東京HARTクリニック' width="228"></a>
      </h2>


      <nav class="l-footer__nav">
        <?php if (has_nav_menu('footer-menu1')) : ?>
          <?php wp_nav_menu(array(
            'theme_location' => 'footer-menu1'
          ));
          ?>
        <?php endif; ?>

        <?php if (has_nav_menu('footer-menu2')) : ?>
          <?php wp_nav_menu(array(
            'theme_location' => 'footer-menu2'
          ));
          ?>
        <?php endif; ?>

        <?php if (has_nav_menu('footer-menu3')) : ?>
          <?php wp_nav_menu(array(
            'theme_location' => 'footer-menu3'
          ));
          ?>
        <?php endif; ?>

        <?php if (has_nav_menu('footer-menu4')) : ?>
          <?php wp_nav_menu(array(
            'theme_location' => 'footer-menu4'
          ));
          ?>
        <?php endif; ?>

        <?php if (has_nav_menu('footer-menu5')) : ?>
          <?php wp_nav_menu(array(
            'theme_location' => 'footer-menu5'
          ));
          ?>
        <?php endif; ?>

        <?php if (has_nav_menu('footer-menu6')) : ?>
          <?php wp_nav_menu(array(
            'theme_location' => 'footer-menu6'
          ));
          ?>
        <?php endif; ?>
      </nav>


      <div class="l-footer__banner">
        <a href="" target="_blank">
          <img src='<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/footer_banner01.png' alt='広島HARTクリニック' width="300">
        </a>
        <a href="" target="_blank">
          <img src='<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/footer_banner02.png' alt='横浜HARTクリニック' width="300">
        </a>
        <a href="" target="_blank">
          <img src='<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/footer_banner03.png' alt='神奈川HARTクリニック' width="300">
        </a>

      </div>


    </div>

  </div>


  <p class="l-footer__copylight"><small>©東京HARTクリニック</small></p>
</footer>


</div><!-- /l-site -->

<?php wp_footer(); ?>



</body>

</html>