  <!-- ブログ アーカイブ -->
  <?php if (is_archive() || is_home() || is_single() || is_category()) : ?>
    <div class="c-subpage-kv">
      <div class="l-container-large">
        <div class="c-subpage-kv__img" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/blog_kv.jpg');">
        </div>
        <!-- ページタイトル  -->
        <div class="c-subpage-kv__heading">
          <h1 class="c-subpage-kv__textBig">BLOG</h1>
          <!-- サブタイトル -->
          <p class="c-subpage-kv__textSmall">院長ブログ</p>
        </div>
      </div>
    </div>

    <!-- 404 -->
  <?php elseif (is_404()) : ?>
    <div class="c-subpage-kv">
      <div class="l-container-large">
        <div class="c-subpage-kv__img" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/news_kv.jpg');">
        </div>
        <!-- ページタイトル  -->
        <div class="c-subpage-kv__heading">
          <h1 class="c-subpage-kv__textBig">404</h1>
          <!-- サブタイトル -->
          <p class="c-subpage-kv__textSmall">Page Not Found</p>
        </div>
      </div>
    </div>


    <!-- カスタム投稿 -->
    <!-- カスタム投稿 アーカイブと個別 -->
    <!--?php elseif (get_post_type() === '') : ?-->
    <!-- カスタム投稿 アーカイブ -->
    <!--?php elseif (is_post_type_archive('works')) : ? -->
    <!-- カスタム投稿 個別 -->
    <!-- ?php elseif (is_singular('')) : ? -->


    <!-- ----------
    固定ページ
  ------------- -->


    <!-- その他ページ -->
  <?php else : ?>
    <div class="c-subpage-kv">
      <div class="l-container-large">
        <?php if (has_post_thumbnail()) : ?>
          <div class="c-subpage-kv__img" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>')">
          </div>
        <?php else : ?>
          <div class="c-subpage-kv__img" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/news_kv.jpg');">
          </div>
        <?php endif; ?>
        <!-- ページタイトル  -->
        <div class="c-subpage-kv__heading">
          <h1 class="c-subpage-kv__textBig"><?php the_title(); ?></h1>
          <!-- サブタイトル -->
          <?php
          // カスタムフィールドの取得
          $sub_title = get_field('sub_title');
          // カスタムフィールドの出力
          if ($sub_title) {
            echo '<p class="c-subpage-kv__textSmall">' . $sub_title . '</p>';
          }
          ?>
        </div>
      </div>
    </div>
  <?php endif; ?>