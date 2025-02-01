<!-- ブログ　個別記事  -->

<div class="c-post-single">
  <div class="c-post-single__info c-post-single__info--news">
    <div class="c-post-single__time c-post-single__time--news">
      <time datetime="<?php echo esc_html(get_the_date('c')); ?>">
        <?php echo esc_html(get_the_date()); ?></time>
    </div>
  </div>
</div>


<div class="c-post-single__content l-single-content">
  <?php the_content(); ?>
</div>