<?php get_header(); ?>


<!-- サイトコンテンツ -->
<main class="l-site__main l-front__main">

  <!-- 記事 -->

  <article <?php post_class(); ?>>

    <section class="p-front-mv">
      <div class="l-container">
        <div class="p-front-mv__contents">
          <h2>title title title title</h2>
          <p>text text text text</p>
        </div>
      </div>
    </section>




    <!-- sample01 -->
    <section class="p-front-sample01">
      <div class="l-container">
        <div class="c-front-heading u-mb30">
          <h2 class="c-front-heading__textBig">title</h2>
          <p class="c-front-heading__textSmall">text</p>
        </div>
        <p class="p-front-sample02__desc u-mb50">description</p>
      </div>
    </section>

    <!-- sample03 -->
    <section class="p-front-sample03">
      <div class="l-container">
        <div class="c-front-heading u-mb30">
          <h2 class="c-front-heading__textBig">title</h2>
          <p class="c-front-heading__textSmall">text</p>
        </div>

        <div class="c-row c-row-wrap c-row-between">
          <div class="c-card01">
            <a class="c-card01__link" href="">
              <p class="c-card01__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img01.jpg" alt="" width="">
              </p>
              <div class="c-card01__contents">
                <p class="c-card01__title">title</p>
                <p class="c-card01__desc">description</p>
              </div>
            </a>
          </div>
          <div class="c-card01">
            <a class="c-card01__link" href="">
              <p class="c-card01__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img01.jpg" alt="" width="">
              </p>
              <div class="c-card01__contents">
                <p class="c-card01__title">title</p>
                <p class="c-card01__desc">description</p>
              </div>
            </a>
          </div>
          <div class="c-card01">
            <a class="c-card01__link" href="">
              <p class="c-card01__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img01.jpg" alt="" width="">
              </p>
              <div class="c-card01__contents">
                <p class="c-card01__title">title</p>
                <p class="c-card01__desc">description</p>
              </div>
            </a>
          </div>
        </div>

      </div>
    </section>

    <!-- news -->
    <section class="p-front-news">
      <div class="l-container">
        <div class="c-front-heading u-mb30">
          <h2 class="c-front-heading__textBig">title</h2>
          <p class="c-front-heading__textSmall">text</p>
        </div>



        <div class="p-front-post-list">
          <?php
          //記事の出力    
          global $post;
          $args = array(
            'posts_per_page' => 4, //記事数
            'post_status' => 'publish', //公開の記事だけ
            'post_type' => '', //カスタム投稿slag
            'orderby' => 'date', //日付を出力する基準
            'order' => 'DESC' //表示する順番（逆はASC）
          );
          $myposts = get_posts($args);
          if ($myposts) : foreach ($myposts  as $post) : setup_postdata($post);
          ?>

          <div class="p-front-post-list__item">

            <!-- ブログ 記事一覧 -->
            <div class="p-front-post-list__info">
              <div class="p-front-post-list__time">
                <time
                  datetime="<?php echo esc_html(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
              </div>
              <?php the_category(); ?>
            </div>

            <div class="p-front-post-list__title">
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </div>

          </div>

          <?php endforeach; ?>

          <?php wp_reset_postdata(); endif; ?>

        </div>

      </div>
    </section>













  </article>



</main> <!-- class="l-site__main" -->



<?php get_footer(); ?>