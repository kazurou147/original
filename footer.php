<!-- フッター前に共通で表示するエリアがあればコメントを外す  -->

<?php
if (!is_front_page()) : ?>
<section>
  <?php get_template_part('template/link', 'bottom'); ?>
</section>
<?php endif; ?>




<footer>
  <div class="l-container">
    <div class="l-footer">
      <div class="l-footer__left">
        <h2 class="l-footer__brand">
          <a href="/"><img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/logo_footer.png' alt=''></a>
        </h2>

        <div class="l-footer__info">
          <p>address:</p>
          <p>tel: fax:</p>
        </div>
      </div>

      <div class="l-footer__right">
        <nav class="l-footer__nav">
          <?php if (has_nav_menu('footer-menu1')) : ?>
          <?php wp_nav_menu(array(
              'theme_location' => 'footer-menu1'
            ));
            ?>
          <?php endif; ?>
        </nav>
      </div>

    </div>

  </div>


  <p class="l-footer__copylight"><small>© 2022 All rights reserved.</small></p>
</footer>


</div><!-- /l-site -->

<?php wp_footer(); ?>



</body>

</html>