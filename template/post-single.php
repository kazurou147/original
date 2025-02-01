<!-- ブログ　個別記事  -->

<div class="c-post-single">
  <div class="c-post-single__info">
    <?php
    $this_categories = get_the_category();
    if ($this_categories) {
      $this_category_color = get_field('color', 'category_' . $this_categories[0]->term_id);
      $this_category_name = $this_categories[0]->name;
      $this_category_slug = $this_categories[0]->category_nicename;;
      echo '<a class="c-post-single__category" href="' .home_url() .'/category/' . $this_category_slug . '"><span style="' . esc_attr('background:' . $this_category_color) . ';">' . esc_html($this_category_name) . '</span></a>';
    }
    ?>
    <div class="c-post-single__time">
      <time datetime="<?php echo esc_html(get_the_date('c')); ?>">
        <?php echo esc_html(get_the_date()); ?></time>
    </div>
  </div>
</div>


<div class="c-post-single__content l-single-content">
  <?php the_content(); ?>
</div>