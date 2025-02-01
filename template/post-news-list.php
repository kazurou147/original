<div class="c-post-news-list__item">

  <!-- ブログ 記事一覧 -->
  <div class="c-post-news-list__content">

    <div class="c-post-news-list__info">
      <h2 class="c-post-news-list__title">
        <?php the_title(); ?>
      </h2>
      <div class="c-post-news-list__time">
        <time datetime="<?php echo esc_html(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
      </div>
    </div>

    <div class="c-post-news-list__desc">
     <a class="c-post-news-list__link" href="<?php the_permalink(); ?>">
      <?php the_excerpt(); ?>
      </a>
    </div>

    <div class="c-post-news-list__link-wrap">
      <a class="c-post-news-list__link" href="<?php the_permalink(); ?>">続きを見る</a>
    </div>

  </div>

</div>