<!-- ブログ　個別記事  -->

<div class="c-custom-single">

  <div class="c-custom-single__info">
    <div class="c-custom-single__time">
      <time datetime="<?php echo esc_html(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('Y年n月j日')); ?></time>
    </div>
    <?php $terms = get_the_terms(get_the_ID(), 'blog_cat');
    if ($terms) : ?>
      <ul class="c-custom-single__cat">
        <?php for ($i = 0; $i < count($terms); $i++) : ?>
          <li><a href="<?php echo esc_url(home_url('/blog_cat/') . $terms[$i]->slug); ?>"><?php echo $terms[$i]->name; ?></a></li>
        <?php endfor; ?>
      </ul>
    <?php endif; ?>
  </div>


  <?php if (has_post_thumbnail()) : ?>
    <div class="c-custom-single__img">
      <?php the_post_thumbnail() ?>
    </div>
  <?php endif; ?>



  <div class="c-custom-single__content">
    <?php the_content(); ?>
  </div>

</div>