<!-- ブログ アーカイブ -->
<?php if (is_archive() || is_home()) : ?>
<!-- ページタイトル  -->
<div class="c-kv">
  <div class="l-container">
    <h1 class="c-kv__title">
      ブログ
    </h1>
  </div>
</div>

<!-- ブログ 個別 -->
<?php elseif (is_single()) : ?>
<!-- ページタイトル  -->
<div class="c-kv">
  <div class="l-container">
    <h1 class="c-kv__title">
      ブログ
    </h1>
  </div>
</div>

<!-- カテゴリー -->
<?php elseif (is_category()) : ?>
<!-- ページタイトル  -->
<div class="c-kv">
  <div class="l-container">
    <h1 class="c-kv__title">
      <?php echo esc_html(single_cat_title()); ?>
    </h1>
  </div>
</div>

<!-- 404 -->
<?php elseif (is_404()) : ?>
<!-- ページタイトル  -->
<div class="c-kv">
  <div class="l-container">
    <h1 class="c-kv__title">
      404 Page Not Found
    </h1>
  </div>
</div>


<!-- カスタム投稿 -->
<!-- カスタム投稿 アーカイブと個別 -->
<!--?php elseif (get_post_type() === '') : ?-->
<!-- カスタム投稿 アーカイブ -->
<!--?php elseif (is_post_type_archive('works')) : ? -->
<!-- カスタム投稿 個別 -->
<!-- ?php elseif (is_singular('')) : ? -->



<!--　固定ページ　-->
<?php else : ?>
<!-- ページタイトル  -->
<div class="c-kv">
  <div class="c-kv__img">
    <?php the_post_thumbnail(); ?>
  </div>
  <div class="l-container">
    <h1 class="c-kv__title">
      <?php echo esc_html(get_the_title($ID)); ?>
    </h1>
  </div>
</div>

<?php endif; ?>