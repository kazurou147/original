<?php get_header(); ?>



<main class="l-site__main l-blog__main l-single__main">


  <!-- キービジュアル -->
  <?php get_template_part('template/page', 'kv'); ?>

  <!-- パンくずリスト -->
  <?php get_template_part('template/page', 'breadcrumb'); ?>



  <!--　コンテンツ全体　-->
  <div class="l-container">

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


            <?php get_template_part('template/post', 'single'); ?>


            <?php endwhile;
                endif; ?>




            <div class="l-single-pagenation">
              <span class="l-single-pagenation__prev">
                <?php previous_post_link('%link', '&lt;&nbsp;古い記事'); ?>
              </span>

              <span class="l-single-pagenation__next">
                <?php next_post_link('%link', '新しい記事&nbsp;&gt;'); ?>
              </span>
            </div>

          </article>

        </div><!-- /l-blog-post-wrap -->


      </div><!-- /l-blog-post-wrap -->

      <!-- サイドバー -->
      <div class="l-sidebar">
        <?php get_sidebar(); ?>
      </div>


    </div><!-- /l-blog-cotent-row -->

  </div><!-- /l-container -->



</main> <!--  id="main" class="site-main" -->




<?php get_footer(); ?>