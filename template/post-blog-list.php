<div class="c-post-blog-list__item">
  <div class="c-post-blog-list__img">
    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail() ?>
    <?php else : ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="">
    <?php endif; ?>
  </div>

  <!-- ブログ 記事一覧 -->
  <div class="c-post-blog-list__content">


    <h3 class="c-post-blog-list__title">
      <?php the_title(); ?>
    </h3>

    <div class="c-post-blog-list__info">
      <div class="c-post-blog-list__time">
        <time datetime="<?php echo esc_html(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('Y年n月j日')); ?></time>
      </div>
      <?php $terms = get_the_terms(get_the_ID(), 'blog_cat');
      if ($terms) : ?>
        <ul class="c-post-blog-list__cat">
          <?php for ($i = 0; $i < count($terms); $i++) : ?>
            <li><a href="<?php echo esc_url(home_url('/blog_cat/') . $terms[$i]->slug); ?>"><?php echo $terms[$i]->name; ?></a></li>
          <?php endfor; ?>
        </ul>
      <?php endif; ?>
    </div>

    <div class="c-post-blog-list__desc">
      <?php the_excerpt(); ?>
    </div>
    <div class="c-post-blog-list__link-wrap">
      <a class="c-post-blog-list__link" href="<?php the_permalink(); ?>">続きを見る ></a>
    </div>

  </div>

</div>