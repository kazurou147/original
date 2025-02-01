<?php get_header(); ?>

<?php remove_filter('the_content', 'wpautop'); ?>

<div class="l-site__content l-page">
  <!-- サイトコンテンツ -->

  <main class="l-main l-page__main">


    <!-- キービジュアル -->
    <?php get_template_part('template/page', 'kv'); ?>

    <!--　コンテンツ全体　-->
    <div class="l-page__content-outer">
      <div class="l-container">


        <!-- 記事 -->

        <article <?php post_class(); ?>>
          <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>

              <?php the_content();  ?>

          <?php endwhile;
          endif; ?>
        </article>


      </div><!-- /l-container -->

    </div><!-- /l-page-content-outer -->


  </main>




</div><!-- class="l-site-content" -->



<?php get_footer(); ?>