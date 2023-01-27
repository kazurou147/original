<?php get_header(); ?>


<main class="l-site__main l-blog__main">

  <!-- キービジュアル -->
  <?php get_template_part('template/page', 'kv'); ?>

  <!-- パンくずリスト -->
  <?php get_template_part('template/page', 'breadcrumbs'); ?>

  <!--　コンテンツ全体　-->
  <div class="l-container">

    <!-- 2カラム -->
    <div class="l-blog__content">

      <!-- コンテンツ -->
      <div class="l-blog__post">

        <div class="c-post-news-list">

          <article <?php post_class(); ?>>

            <?php if (have_posts()) :
                  while (have_posts()) : the_post(); ?>

            <!-- コンテンツ  -->
            <!-- 
              画像なし post-news-list
            画像あり post-blog-list
            -->
            <?php get_template_part('template/post', 'news-list'); ?>

            <?php endwhile;
                endif; ?>

            <!-- pagenation -->
            <?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示 
                ?>
            <div class="l-blog-pagenation">
              <?php
                    echo
                    paginate_links(
                      array(
                        'end_size' => 0,
                        'mid_size' => 1, //もし2に変更した場合、両方のファイルを修正する必要がある
                        'prev_next' => true,
                        'prev_text' => __('before'),
                        'next_text' => __('next'),
                      )
                    );
                    ?>
            </div><!-- /pagenation -->
            <?php endif; ?>

          </article>

        </div><!-- /l-post-list -->

      </div><!-- /l-blog__post -->

      <!-- サイドバー -->
      <div class="l-sidebar">
        <?php get_sidebar(); ?>
      </div>

    </div><!-- /l-blog__content -->

  </div><!-- /l-container -->

</main> <!--  /l-site__main -->

<?php get_footer(); ?>