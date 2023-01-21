<div class="c-post-news-list__item">

  <!-- ブログ 記事一覧 -->
  <div class="c-post-news-list__info">
    <div class="c-post-news-list__time">
      <time datetime="<?php echo esc_html(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
    </div>
    <?php the_category(); ?>
  </div>

  <div class="c-post-news-list__title">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </div>

</div>