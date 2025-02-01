<?php get_header(); ?>

<?php remove_filter('the_content', 'wpautop'); ?>

<div class="l-site__content l-page">
  <!-- サイトコンテンツ -->

  <main class="l-main l-page__main">


    <!-- キービジュアル -->
    <?php get_template_part('template/page', 'kv'); ?>

    <!--　コンテンツ全体　-->
    <div class="l-page__content-outer p-price" id="price">


      <!-- 記事 -->

      <article <?php post_class(); ?>>
        <?php if (have_posts()) :
          while (have_posts()) : the_post(); ?>

        <!-- ここから -->


        <!-- 当院のポリシー -->
        <section class="p-price-sec01">

          <div class="l-container">

            <div class="u-mb110">
              <p class="p-price-memo01">※ 金額は全て税別</p>
              <h3 class="p-price-subtitle01">診察料金</h3>
              <dl class="p-price-dl01">
                <div class="p-price-dl01__content">
                  <dt>初診料</dt>
                  <dd>1,000円</dd>
                </div>
                <div class="p-price-dl01__content">
                  <dt>再診料</dt>
                  <dd>700円</dd>
                </div>
              </dl>
            </div>


            <div class="u-mb110">
              <h3 class="p-price-subtitle01">各種ワクチン</h3>
              <dl class="p-price-dl01">
                <div class="p-price-dl01__content">
                  <dt>猫 3種混合ワクチン</dt>
                  <dd>5,000円</dd>
                </div>
                <div class="p-price-dl01__content">
                  <dt>猫 5種混合ワクチン</dt>
                  <dd>6,000円</dd>
                </div>
                <div class="p-price-dl01__content">
                  <dt>犬 6種混合ワクチン</dt>
                  <dd>6,000円</dd>
                </div>
                <div class="p-price-dl01__content">
                  <dt>犬 8種混合ワクチン</dt>
                  <dd>8,000円</dd>
                </div>
              </dl>
            </div>

            <div class="u-mb110">
              <h3 class="p-price-subtitle01">予防薬</h3>
              <dl class="p-price-dl01">
                <div class="p-price-dl01__content">
                  <dt>フィラリア予防薬 ［ミルべマイシン］</dt>
                  <dd>1,150円～</dd>
                </div>
                <div class="p-price-dl01__content">
                  <dt>フィラリア、ノミマダニ予防薬 ［ネクスガードスペクトラ］</dt>
                  <dd>3,400円～</dd>
                </div>
                <div class="p-price-dl01__content">
                  <dt>ノミ・マダニ予防薬［フロントライン］</dt>
                  <dd>1,700円～</dd>
                </div>
              </dl>
            </div>


            <div class="u-mb110">
              <h3 class="p-price-subtitle01">検査</h3>
              <dl class="p-price-dl01">
                <div class="p-price-dl01__content">
                  <dt>血液検査一般</dt>
                  <dd>4,500円～</dd>
                </div>
                <div class="p-price-dl01__content">
                  <dt>フィラリア検査</dt>
                  <dd>2,000円&nbsp;&nbsp;&nbsp;</dd>
                </div>
                <div class="p-price-dl01__content">
                  <dt>レントゲン検査</dt>
                  <dd>7,000円～</dd>
                </div>
                <div class="p-price-dl01__content">
                  <dt>エコー検査</dt>
                  <dd>3,500円～</dd>
                </div>
                <div class="p-price-dl01__content">
                  <dt>尿検査</dt>
                  <dd>3,000円&nbsp;&nbsp;&nbsp;</dd>
                </div>
                <div class="p-price-dl01__content">
                  <dt>便検査</dt>
                  <dd>1,500円&nbsp;&nbsp;&nbsp;</dd>
                </div>
              </dl>
            </div>


            <div class="u-mb110">
              <h3 class="p-price-subtitle01">猫の去勢・避妊手術</h3>
              <dl class="p-price-dl01">
                <div class="p-price-dl01__content">
                  <dt>猫 去勢手術</dt>
                  <dd>30,340円～</dd>
                </div>
                <div class="p-price-dl01__content">
                  <dt>猫 避妊手術</dt>
                  <dd>42,650円～</dd>
                </div>
              </dl>
            </div>


            <div class="u-mb110">
              <h3 class="p-price-subtitle01">犬の去勢・避妊手術</h3>
              <dl class="p-price-dl01">
                <div class="p-price-dl01__content">
                  <dt>犬 去勢手術</dt>
                  <dd>32,320円～</dd>
                </div>
                <div class="p-price-dl01__content">
                  <dt>犬 避妊手術</dt>
                  <dd>44,090円～</dd>
                </div>
              </dl>
              <p class="p-price-memo02">※ 犬の避妊手術は5kg以上の場合1kgごとに+3,000円</p>
            </div>



            <div class="u-mb110">
              <h3 class="p-price-subtitle01">入院</h3>
              <dl class="p-price-dl01">
                <div class="p-price-dl01__content">
                  <dt>入院・お預かり</dt>
                  <dd>3,500円～</dd>
                </div>
                <div class="p-price-dl01__content">
                  <dt>酸素室入院</dt>
                  <dd>6,500円&nbsp;&nbsp;&nbsp;</dd>
                </div>
              </dl>
            </div>



            <div class="u-mb110">
              <h3 class="p-price-subtitle01">トリミング</h3>
              <dl class="p-price-dl01">
                <div class="p-price-dl01__content">
                  <p class="p-price-dl01__text-pt2">お問い合わせください。</p>
                </div>
              </dl>
            </div>

          </div>

        </section>




        <!-- ここまで -->

        <?php the_content();  ?>

        <?php endwhile;
        endif; ?>
      </article>




    </div><!-- /l-page-content-outer -->


  </main>




</div><!-- class="l-site-content" -->



<?php get_footer(); ?>