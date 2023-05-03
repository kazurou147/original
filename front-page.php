<?php get_header(); ?>


<!-- サイトコンテンツ -->
<main class="l-site__main l-front__main">

  <!-- 記事 -->

  <article <?php post_class(); ?>>

    <section class="p-front-mv">
      <div class="p-front-mv__title">
        <h1><span class="p-front-mv__text01">患者様一人ひとりに</span><span class="p-front-mv__text02">合わせた治療を</span></span><span class="p-front-mv__text03">心をこめて。</span></h1>
      </div>

      <div class="p-front-mv-reception">
        <div class="p-front-mv-reception__title">
          <h2>受診案内</h2>
          <p>reception</p>
        </div>
        <div class="p-front-mv-reception__row">
          <div class="p-front-mv-reception__item">
            <a href="">
              <figure><img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/icon_beginer-large.png' alt='' width="42"></figure>
              はじめての方
              <i class="c-arrow01"></i>
            </a>
          </div>
          <div class="p-front-mv-reception__item">
            <a href="">
              <figure><img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/icon_goHospital-large.png' alt='' width="73.5">
              </figure>
              通院中の方
              <i class="c-arrow01"></i>
            </a>
          </div>
        </div>
      </div>
    </section>


    <!-- クリニックからのお知らせ -->
    <section class="p-front-newstopics">
      <div class="l-container">
        <div class="c-front-heading u-mb80">
          <h2 class="c-front-heading__textBig">クリニックからの<br class="u-pc-none">お知らせ</h2>
          <p class="c-front-heading__textSmall">news&topics</p>
        </div>

        <div class="p-front-newstopics-block01">
          <div class="p-front-newstopics-block01__item">

            <div class="p-front-newstopics-block01__btn">
              <a class="c-btn01" href="<?php echo esc_url(home_url('/info')); ?>">お知らせ一覧</a>
            </div>
            <div class="p-front-post-list">
              <h3>お知らせ</h3>
              <?php
              //記事の出力    
              global $post;
              $args = array(
                'posts_per_page' => 5, //記事数
                'post_status' => 'publish', //公開の記事だけ
                'post_type' => 'info', //カスタム投稿slag
                'orderby' => 'date', //日付を出力する基準
                'order' => 'DESC' //表示する順番（逆はASC）
              );
              $myposts = get_posts($args);
              if ($myposts) : foreach ($myposts  as $post) : setup_postdata($post);
              ?>

                  <div class="p-front-post-list__item">

                    <!-- ブログ 記事一覧 -->
                    <div class="p-front-post-list__info">
                      <div class="p-front-post-list__time">
                        <time datetime="<?php echo esc_html(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                      </div>
                      <?php the_category(); ?>
                    </div>

                    <div class="p-front-post-list__title">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                      </a>
                    </div>

                  </div>

                <?php endforeach; ?>

              <?php wp_reset_postdata();
              endif; ?>

            </div>
          </div>

          <div class="p-front-newstopics-block01__item">

            <div class="p-front-newstopics-block01__btn">
              <a class="c-btn01" href="<?php echo esc_url(home_url('/topics')); ?>">トッピクス一覧</a>
            </div>
            <div class="p-front-post-list">
              <h3>トッピクス</h3>
              <?php
              //記事の出力    
              global $post;
              $args = array(
                'posts_per_page' => 5, //記事数
                'post_status' => 'publish', //公開の記事だけ
                'post_type' => 'post', //カスタム投稿slag
                'orderby' => 'date', //日付を出力する基準
                'order' => 'DESC' //表示する順番（逆はASC）
              );
              $myposts = get_posts($args);
              if ($myposts) : foreach ($myposts  as $post) : setup_postdata($post);
              ?>

                  <div class="p-front-post-list__item">

                    <!-- ブログ 記事一覧 -->
                    <div class="p-front-post-list__info">
                      <div class="p-front-post-list__time">
                        <time datetime="<?php echo esc_html(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                      </div>
                      <?php
                      $this_categories = get_the_category();
                      if ($this_categories) {
                        $this_category_color = get_field('color', 'category_' . $this_categories[0]->term_id);
                        $this_category_name = $this_categories[0]->name;
                        $this_category_slug = $this_categories[0]->category_nicename;;
                        echo '<a class="p-front-post-list__category" href="/category/' . $this_category_slug . '"><span style="' . esc_attr('background:' . $this_category_color) . ';">' . esc_html($this_category_name) . '</span></a>';
                      }

                      ?>
                    </div>

                    <div class="p-front-post-list__title">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                      </a>
                    </div>

                  </div>

                <?php endforeach; ?>

              <?php wp_reset_postdata();
              endif; ?>

            </div>
          </div>

        </div>


        <div class="p-front-newstopics-block02">
          <h3>当院を受診される患者様へ</h3>
          <p>新型コロナウイルス対策につき、受診時のマスクの着用と、入室時のアルコールによる手指消毒の徹底をお願いしています。 また、37.5度以上の発熱や、風邪症状のある患者様は受診をお控えくださいますようお願いいたします。
          </p>
          <div class="p-front-newstopics-block02__btn">
            <a class="c-btn01 c-btn01--large" href="">当院における新型コロナウイルス<br class="u-pc-none">感染予防対策について</a>
          </div>
        </div>

      </div>
    </section>


    <!-- 診療案内 -->
    <section class="p-front-medical">
      <div class="l-container-small">
        <div class="c-front-heading u-mb80">
          <h2 class="c-front-heading__textBig">診療案内</h2>
          <p class="c-front-heading__textSmall">medical content</p>
        </div>

        <div class="p-front-medical-block01 u-mb40 u-mb0--sp">
          <div class="p-front-medical-block01__item">
            <a class="p-front-medical-block01__link p-front-medical-block01__link01" href="">体外受精を<br>お考えの方</a>
          </div>
          <div class="p-front-medical-block01__item">
            <a class="p-front-medical-block01__link p-front-medical-block01__link02" href="">一般不妊治療を<br>ご希望の方</a>
          </div>
          <div class="p-front-medical-block01__item">
            <a class="p-front-medical-block01__link p-front-medical-block01__link03" href="">難治性不妊治療<br>の患者様</a>
          </div>
        </div>

        <div class="p-front-medical-block02 u-mb40 u-mb0--sp">
          <div class="p-front-medical-block02__item">
            <a class="p-front-medical-block02__link p-front-medical-block02__link01" href="">治療に関するQ&A</a>
          </div>
          <div class="p-front-medical-block02__item">
            <a class="p-front-medical-block02__link p-front-medical-block02__link02" href="">カウンセリングを<br>ご希望の方</a>
          </div>
        </div>

        <div class="p-front-medical-block03">
          <div class="p-front-medical-block03__item01">
            <a class="p-front-medical-block03__link p-front-medical-block03__link01" href=""><img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/icon_youtube.png' alt='' width="51">WEB説明会</a>
          </div>
          <div class="p-front-medical-block03__item02">
            <a class="p-front-medical-block03__link p-front-medical-block03__link02" href="">すべての診療案内</a>
          </div>
        </div>

      </div>
    </section>



    <!-- 東京HARTクリニックの特徴 -->
    <section class="p-front-feature">
      <div class="l-container">
        <div class="c-front-heading u-mb60">
          <h2 class="c-front-heading__textBig">東京HARTクリニック<br class="u-pc-none">の特徴</h2>
          <p class="c-front-heading__textSmall">feature</p>
        </div>

        <p class="c-front-description u-mb110">当クリニックの理念は、患者様一人ひとりを的確に診断し、それぞれに合わせた最良の治療を行なうこと、<br class="u-sp-none">世界最高レベルの医療を安全かつ確実に提供することです。</p>

        <div class="p-front-feature-block01 u-mb145 u-mb120--sp">
          <div class="p-front-feature-block01__left">
            <div class="p-front-feature-block01__number"><span>feature</span>01</div>
            <figure>
              <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/front_feature01.jpg' alt='' width="600">
            </figure>
          </div>
          <div class="p-front-feature-block01__right">
            <h3 class="p-front-feature-block01__title">患者様個人に合わせた<br>オーダーメイドの治療</h3>
            <p>人の顔が一人一人違うように、卵巣もまた個人差があり、画一的な方法で皆がうまくいくようなやり方はありません。</p>
            <p>当院では世界のスタンダードである卵巣刺激法を主に行っていますが、それにも何種類かの方法があり、前周期での準備や注射の種類を含めると多様な選択肢があります。</p>
            <p>その中からその人にあったやり方を見極めることが良好な卵子を得る上で最も重要です。</p>
          </div>
        </div>

        <div class="p-front-feature-block01 u-mb145 u-mb120--sp">
          <div class="p-front-feature-block01__left">
            <div class="p-front-feature-block01__number"><span>feature</span>02</div>
            <figure>
              <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/front_feature02.jpg' alt='' width="600">
            </figure>
          </div>
          <div class="p-front-feature-block01__right p-front-feature-block01__right2">
            <h3 class="p-front-feature-block01__title">確かな治療技術</h3>
            <p>10年を超えて培われた経験と技術を受け継ぎながら、世界最先端の不妊治療を提供しています。</p>
            <p>ARTの治療レベルは、半分は卵巣刺激法の計画や移植方法の選択といった部分に依存しますが、もう半分はラボの品質に依存しており、培養士の技術や胚の培養環境は非常に重要です。</p>
            <p>将来人間になる命を預かっているのですから、ベストな環境で卵を扱う必要があるのは当然です。</p>
          </div>
        </div>

        <div class="p-front-feature-block01 u-mb145 u-mb120--sp">
          <div class="p-front-feature-block01__left">
            <div class="p-front-feature-block01__number"><span>feature</span>03</div>
            <figure>
              <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/front_feature03.jpg' alt='' width="600">
            </figure>
          </div>
          <div class="p-front-feature-block01__right">
            <h3 class="p-front-feature-block01__title">徹底した安全管理</h3>
            <p>医療において、治療技術はもちろんのこと、安全・安心対策の充実が求められます。</p>
            <p>特に体外受精（ART）関連技術では、患者様の精子・卵子を採取、胚を体外で培養、更にそれらを長期に渡って凍結保存するという手技を行います。</p>
            <p>その作業は複数のスタッフにより毎日行われていますので、より高度な安全管理システムが求められます。</p>
          </div>
        </div>
      </div>
    </section>





    <!-- 施設・設備紹介 -->
    <section class="p-front-facility">
      <div class="l-container">
        <div class="c-front-heading u-mb60">
          <h2 class="c-front-heading__textBig">施設・設備紹介</h2>
          <p class="c-front-heading__textSmall">facility</p>
        </div>

        <p class="c-front-description u-mb110 u-mb50--sp">落ち着いた雰囲気の広い空間・最新の医療設備をご用意し、<br class="u-sp-none">患者様が安心して診察を受けることのできる環境づくりをつとめています。</p>

      </div>

      <div class="p-front-facility-block01 u-mb65">
        <picture>
          <source srcset='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/front_facility01-sp.jpg' media='(max-width: 767px)' width='155'>
          <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/front_facility01.jpg' alt='' width='422'>
        </picture>
        <picture>
          <source srcset='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/front_facility02-sp.jpg' media='(max-width: 767px)' width='155'>
          <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/front_facility02.jpg' alt='' width='422'>
        </picture>
        <picture>
          <source srcset='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/front_facility03-sp.jpg' media='(max-width: 767px)' width='155'>
          <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/front_facility03.jpg' alt='' width='422'>
        </picture>
        <picture>
          <source srcset='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/front_facility04-sp.jpg' media='(max-width: 767px)' width='155'>
          <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/front_facility04.jpg' alt='' width='422'>
        </picture>

        <!-- <figure>
          <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/front_facility04.jpg' alt='' width="422">
        </figure> -->
      </div>

      <div class="p-front-facility__btn">
        <a class="c-btn01" href="">詳しく</a>
      </div>

    </section>



    <!-- 医院情報 -->
    <section class="p-front-information">
      <div class="l-container-small p-front-information__inner">
        <div class="c-front-heading u-mb45 u-mb80--sp">
          <h2 class="c-front-heading__textBig">医院情報</h2>
          <p class="c-front-heading__textSmall">information</p>
        </div>

        <div class="p-front-information-block01">
          <div class="p-front-information-block01__item">
            <div class="p-front-information-block01__table01">
              <table>
                <thead>
                  <tr>
                    <th>診療時間</th>
                    <td class="p-table01-first">月</td>
                    <td>火</td>
                    <td>水</td>
                    <td>木</td>
                    <td>金</td>
                    <td>土</td>
                    <td>日祝</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th><span>午前</span>&nbsp;&nbsp;<br class="u-pc-none">9:00～12:00</th>
                    <td class="p-table01-first">●</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                    <td>●</td>
                    <td>－</td>
                  </tr>
                  <tr>
                    <th><span>午後</span><br class="u-pc-none">15:00～18:00</th>
                    <td class="p-table01-first">●</td>
                    <td>●</td>
                    <td>●</td>
                    <td>－</td>
                    <td>●</td>
                    <td>●</td>
                    <td>－</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <small>※ 休診日：日曜・祝日・木曜午後</small>

            <div class="p-front-information-block01__table02">
              <table>
                <tr>
                  <th>医院名</th>
                  <td>東京HARTクリニック</td>
                </tr>
                <tr>
                  <th>住所</th>
                  <td>〒107-0062 港区南青山5-4-19<br>
                    ジ・アッパーレジデンシィーズ・ミナミアオヤマ1F</td>
                </tr>
                <tr>
                  <th>お問い合わせ</th>
                  <td><img src='<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/icon_tel.png' alt='' width="13">03-5766-3660</td>
                </tr>
                <tr>
                  <th>アクセス</th>
                  <td>東京メトロ表参道駅徒歩6分</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="p-front-information-block01__item">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.6248423933766!2d139.7128105771789!3d35.66161363049625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b613c23c4f1%3A0x1e9358c10fa78782!2z5p2x5Lqs77yo77yh77yy77y044Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1682861247470!5m2!1sja!2sjp" width="450" height="495" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>

      </div>

    </section>

















  </article>



</main> <!-- class="l-site__main" -->



<?php get_footer(); ?>