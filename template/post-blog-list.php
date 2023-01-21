<div class="c-post-blog-list__item">

  <!-- ブログ 記事一覧 -->

  <a href="<?php the_permalink(); ?>">
    <figure class="c-post-blog-list__img">
      <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('thumb01'); ?>
      <?php else : ?>
      <img src="<?php echo catch_that_image(); ?>" alt="" />
      <?php endif ; ?>
    </figure>
  </a>

  <div class="c-post-blog-list__content">
    <div class="c-post-blog-list__info">
      <div class="c-post-blog-list__time">
        <time datetime="<?php echo esc_html(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
      </div>
      <?php the_category(); ?>
    </div>

    <div class="c-post-blog-list__title">
      <a href="<?php the_permalink(); ?>">
        <?php is_mobile() ? wp_trim_words(the_title(), 50, '...') : wp_trim_words(the_title(), 100, '...'); ?>
      </a>
    </div>

  </div>

</div>