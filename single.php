<?php get_header(); ?>



<main class="l-site__main l-blog__main l-single__main">


  <!-- キービジュアル -->
  <?php get_template_part('template/page', 'kv'); ?>


  <!--　コンテンツ全体　-->
  <div class="l-container-post">

    <div class="c-blog-heading">
      <h2 class="c-blog-heading__title"><?php the_title(); ?></h2>
    </div>

    <!-- 2カラム -->
    <div class="l-blog__content">


      <!-- コンテンツ -->
      <div class="l-blog__post">

        <div class="l-post-list">


          <!-- 記事 -->

          <article <?php post_class(); ?>>

            <?php if (have_posts()) :
              while (have_posts()) : the_post(); ?>


                <!-- コンテンツ  -->
                <?php get_template_part('template/post', 'single-news'); ?>

            <?php endwhile;
            endif; ?>




            <div class="l-single-pagenation">
              <div class="l-single-pagenation__prev">

                <?php if (get_previous_post()) {
                  previous_post_link('%link', '前へ');
                } ?>

              </div>

              <div class="l-single-pagenation__center">
                <a href="<?php echo esc_url(home_url('/news')); ?>">一覧に戻る</a>
              </div>

              <div class="l-single-pagenation__next">
                <?php if (get_next_post()) {
                  next_post_link('%link', '次へ');
                } ?>
              </div>
            </div>

          </article>

        </div><!-- /l-blog-post-wrap -->


      </div><!-- /l-blog-post-wrap -->




    </div><!-- /l-blog-cotent-row -->

  </div><!-- /l-container -->



</main> <!--  id="main" class="site-main" -->




<?php get_footer(); ?>