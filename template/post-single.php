<!-- ブログ　個別記事  -->

<div class="c-post-single">
  <div class="c-post-single__time">
    <time datetime="<?php echo esc_html(get_the_date('c')); ?>">
      <?php echo esc_html(get_the_date()); ?></time>
  </div>
  <?php the_category(); ?>
</div>

<h2 class="c-post-list__title"><?php the_title();  ?></h2>

<div class="c-post-single__content">
  <?php the_content(); ?>
</div>