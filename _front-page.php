<?php get_header(); ?>


<!-- サイトコンテンツ -->
<main class="l-site__main l-front__main">

  <!-- 記事 -->

  <article <?php post_class(); ?>>




    <div class="p-front">

      <section class="p-front-mv">

        <div class="p-front-mv__inner">

          <div class="p-front-mv__title wow fadeInRight">
            <h1 class="p-front-mv__title-big">大切な家族の一生を支えます。</h1>
            <p class="p-front-mv__title-small">最新の獣医学で安心の診療を。</p>
          </div>


          <div class="wow fadeInUp">
            <div class="p-front-mv-banner u-tb-none">
              <p><img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/mv-banner01.webp' alt=''
                  width="444"></p>
            </div>

            <figure class="p-front-mv-time u-tb-none">
              <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/mv-time.webp' alt='' width="363">
            </figure>

          </div>


          <div class="p-front-news u-tb-none">
            <div class="p-front-news-block01">
              <div class="p-front-news-block01__left">
                <h2 class="p-front-news-block01__en">NEWS</h2>
              </div>

              <div class="p-front-news-block01__right">

                <div class="p-front-post-list">

                  <?php
                //記事の出力
                global $post;
                $args = array(
                  'posts_per_page' => 1, //記事数
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
                        <time
                          datetime="<?php echo esc_html(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                      </div>
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


                <p class="p-front-news-block01__btn">
                  <a class="" href="<?php echo esc_url(home_url('/news')); ?>">more</a>
                </p>

              </div>

            </div>
          </div>




        </div>


      </section>



      <!-- スマホ用 -->
      <div class="p-front-mv-sp u-tb-show">
        <div class="l-container">


          <div class="p-front-mv-banner-sp">
            <p><img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/mv-banner01.webp' alt=''
                width="444"></p>
          </div>

          <figure class="p-front-mv-time-sp">
            <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/mv-time.webp' alt='' width="363">
          </figure>


          <div class="p-front-news-sp u-tb-show">
            <div class="p-front-news-sp-block01 wow fadeInUp">

              <div class="p-front-news-heading u-mb60">
                <h2 class="p-front-news-heading__textBig">NEWS</h2>
                <p class="p-front-news-heading__textSmall">お知らせ</p>
              </div>

              <div class="p-front-post-list">

                <?php
                //記事の出力
                global $post;
                $args = array(
                  'posts_per_page' => 4, //記事数
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
                      <time
                        datetime="<?php echo esc_html(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                    </div>
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


              <p class="p-front-news-sp-block01__btn">
                <a class="" href="<?php echo esc_url(home_url('/news')); ?>">more</a>
              </p>

            </div>

          </div>
        </div>

      </div>
    </div>


    <!-- ページ内リンク -->


    <div class="l-container-small u-tb-none">

      <ul class="p-common-list">
        <li class="menu-item">
          <a href="#page01">
            <div class="menu-item-img">
              <img class="menu-icon-home" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-home.png"
                alt="ホーム" width="16">
            </div>
            <div class="menu-item-jp">ホーム</div>
            <div class="menu-item-en">HOME</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#page02">
            <div class="menu-item-img">
              <img class="menu-icon-home"
                src="<?php echo esc_url(get_template_directory_uri()); ?>/img/front/icon-pet.png" alt="診療案内" width="42">
            </div>
            <div class="menu-item-jp">診療案内</div>
            <div class="menu-item-en">MEDICAL</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#page03">
            <div class="menu-item-img">
              <img class="menu-icon-home"
                src="<?php echo esc_url(get_template_directory_uri()); ?>/img/front/icon-treat.png" alt="外科診療"
                width="35">
            </div>
            <div class="menu-item-jp">外科診療</div>
            <div class="menu-item-en">S.TREATMENT</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#page04">
            <div class="menu-item-img">
              <img class="menu-icon-home"
                src="<?php echo esc_url(get_template_directory_uri()); ?>/img/front/icon-clinic.png" alt="医院案内"
                width="32">
            </div>
            <div class="menu-item-jp">医院案内</div>
            <div class="menu-item-en">CLINIC</div>
          </a>
        </li>

        <li class="menu-item">
          <a href="#page05">
            <div class="menu-item-img">
              <img class="menu-icon-home"
                src="<?php echo esc_url(get_template_directory_uri()); ?>/img/front/icon-yen.png" alt="料金表" width="37">
            </div>
            <div class="menu-item-jp">料金表</div>
            <div class="menu-item-en">PRICE LIST</div>
          </a>
        </li>
      </ul>

    </div>







    <!-- 診療案内 -->
    <section class="p-front-medical">

      <div class="p-front-medical-outer"></div>

      <div class="l-container-small">

        <div class="c-front-heading u-mb70">
          <h2 class="c-front-heading__textBig c-front-heading__textBig--white">診療案内</h2>
          <p class="c-front-heading__textSmall">MEDICAL</p>
        </div>

        <div class="p-front-medical-block01">
          <div class="p-front-medical-block01__item">
            <a href="<?php echo esc_url( home_url( '/medical' ) ); ?>">
              <h3 class="p-front-medical-block01__title">一般診療</h3>
              <p class="p-front-medical-block01__text">GENERAL TREATMENT</p>
              <figure class="p-front-medical-block01__img">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/icon-pet-lg.png' alt=''
                  width="100">
              </figure>
            </a>
          </div>

          <div class="p-front-medical-block01__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <h3 class="p-front-medical-block01__title">外科診療</h3>
              <p class="p-front-medical-block01__text">SURGICAL TREATMENT</p>
              <figure class="p-front-medical-block01__img">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/icon-treat-lg.png' alt=''
                  width="80">
              </figure>
            </a>
          </div>
        </div>



        <div class="p-front-medical-block02">
          <div class="p-front-medical-block02__item">
            <a href="<?php echo esc_url( home_url( '/medical#medical03' ) ); ?>">
              <h3 class="p-front-medical-block02__title">予防医療</h3>
              <p class="p-front-medical-block02__text">PREVENTIVE</p>
            </a>
          </div>

          <div class="p-front-medical-block02__item">
            <a href="<?php echo esc_url( home_url( '/medical#medical04' ) ); ?>">
              <h3 class="p-front-medical-block02__title">細胞・再生医療</h3>
              <p class="p-front-medical-block02__text">CELL MEDICINE</p>
            </a>
          </div>

          <div class="p-front-medical-block02__item">
            <a href="<?php echo esc_url( home_url( '/medical#medical06' ) ); ?>">
              <h3 class="p-front-medical-block02__title">トリミング・その他</h3>
              <p class="p-front-medical-block02__text">OTHERS</p>
            </a>
          </div>
        </div>


        <p class="p-front-medical__memo">犬猫以外の動物については、近隣の病院を紹介させていただいております。</p>

      </div>
    </section>




    <!-- クリニックの特徴 -->
    <section class="p-front-feature">

      <!-- <figure class="p-front-feature__bg01">
          <img src='<-?php echo esc_url(get_template_directory_uri()); ?>/img/front/feature-bg01.webp' alt=''
            width="687">
        </figure> -->


      <div class="l-container">

        <div class="c-front-heading u-mb140 u-mb80--sp">
          <h2 class="c-front-heading__textBig">クリニックの<br class="u-sp-show">特徴</h2>
          <p class="c-front-heading__textSmall">FEATURE</p>
        </div>


        <div class="p-front-feature-block01">

          <div class="p-front-feature-block01__item wow fadeInUp">
            <div class="p-front-feature-block01__img">
              <div class="p-front-feature-block01__number">
                <div class="p-front-feature-block01__number-inner">
                  <span>FEATURE</span>1
                </div>
              </div>
              <div class="p-front-feature-block01__img-inner">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/feature-img01.webp' alt=''
                  width="500">
              </div>
            </div>
            <div class="p-front-feature-block01__content">
              <div class="p-front-feature-block01__content-inner">
                <h3 class="p-front-feature-block01__title">頼れるチーム医療<br>
                  内科から外科まで<br class="u-sp-none">幅広い診療が可能</h3>
                <div class="p-front-feature-block01__text">
                  <p>
                    大切なご家族であるペットに、365日いつでも対応できる診療体制を整えています。当院では、獣医師数名と動物看護師が一体となって、チーム医療を実践しています。<br>獣医師だけでは成し得ない、質の高い動物医療と、飼い主様に安心していただけるケアをお届けします<br>。私たちのチームは、飼い主様がペットを通じて感じる喜びや悩み、困りごとにも共感し、ともに歩んでいきます。<br>嬉しいことは一緒に分かち合って、さらに大きな喜びに。悲しい時は支え合って、少しでも心が軽くなるように。そして、お悩みには最適な解決策を見つけるお手伝いをいたします。当院のチーム医療が、ペットにより良い治療を提供し、飼い主様に寄り添った安心感のある対応でお力になれると信じています。
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="p-front-feature-block01__item p-front-feature-block01__item--rev wow fadeInUp"
            data-wow-delay="0.3s">
            <div class="p-front-feature-block01__img">
              <div class="p-front-feature-block01__number p-front-feature-block01__number--rev">
                <div class="p-front-feature-block01__number-inner">
                  <span>FEATURE</span>2
                </div>
              </div>
              <div class="p-front-feature-block01__img-inner">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/feature-img02.webp' alt=''
                  width="500">
              </div>
            </div>
            <div class="p-front-feature-block01__content p-front-feature-block01__content--rev">
              <div class="p-front-feature-block01__content-inner">
                <h3 class="p-front-feature-block01__title p-front-feature-block01__title--rev">年中無休<br>
                  毎日19時まで診療中</h3>
                <div class="p-front-feature-block01__text">
                  <p>
                    かわいいペットがいつ体調を崩すかは、飼い主様にも予測できないものです。<br>本郷獣医科病院では、飼い主様がいつでも安心して相談できるよう、365日体制で診療を行っています。大晦日も元日も、変わらず元気に診療を行います。<br>ペットに急な変化があった際、すぐにかかりつけの病院に相談できる環境を整えることは、私たちの大切な役割です。本郷獣医科病院は、毎日「いつでも気軽に通える動物病院」を目指し、皆様の相談所としてお手伝いします。<br>犬や猫が大好きなスタッフが、皆様の大切なペットを心を込めて診療いたします。
                  </p>
                </div>
              </div>
            </div>
          </div>


          <div class="p-front-feature-block01__item wow fadeInUp">
            <div class="p-front-feature-block01__img">
              <div class="p-front-feature-block01__number">
                <div class="p-front-feature-block01__number-inner">
                  <span>FEATURE</span>3
                </div>
              </div>
              <div class="p-front-feature-block01__img-inner">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/feature-img03.webp' alt=''
                  width="500">
              </div>
            </div>
            <div class="p-front-feature-block01__content">
              <div class="p-front-feature-block01__content-inner">
                <h3 class="p-front-feature-block01__title">緊急外来対応</h3>
                <div class="p-front-feature-block01__text">
                  <p>
                    当院では、ペットが突然の体調不良や事故に見舞われた際や、急な症状や不安な状況でも、当院の獣医師とスタッフが迅速に対応し、適切な治療を行うため、いつでもご安心ください。<br>夜間や休日でも診療を受けられる環境を整え、ペットの命と健康を守るための体制を常に備えています。万が一の時も、安心してご来院ください。
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="p-front-feature-block01__item p-front-feature-block01__item--rev wow fadeInUp"
            data-wow-delay="0.3s">
            <div class="p-front-feature-block01__img">
              <div class="p-front-feature-block01__number p-front-feature-block01__number--rev">
                <div class="p-front-feature-block01__number-inner">
                  <span>FEATURE</span>4
                </div>
              </div>
              <div class="p-front-feature-block01__img-inner">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/feature-img04.webp' alt=''
                  width="500">
              </div>
            </div>
            <div class="p-front-feature-block01__content p-front-feature-block01__content--rev">
              <div class="p-front-feature-block01__content-inner">
                <h3 class="p-front-feature-block01__title p-front-feature-block01__title--rev">他院からのご紹介も承ります！</h3>
                <div class="p-front-feature-block01__text">
                  <p>
                    当院では、他院からのご紹介を受け、重症例や外科手術などにも対応しています。<br>かかりつけの病院で診断を受けた際に、より高度な治療や手術が必要とされた場合でも、当院の獣医師とスタッフが専門知識を活かし、安心して治療を受けられるようサポートいたします。紹介元の病院との連携を大切にし、患者様のペットに最適な治療を提供することを心がけております。<br>当院専門外の疾患に関しては、大学病院等を紹介させていただくこともございます。
                  </p>
                </div>
              </div>
            </div>
          </div>


        </div>


      </div>

    </section>



    <!-- ごあいさつ -->
    <section class="p-front-greeting">
      <div class="p-front-greeting-outer"></div>
      <div class="l-container">
        <div class="c-front-heading u-mb80">
          <h2 class="c-front-heading__textBig">ご挨拶</h2>
          <p class="c-front-heading__textSmall">GREETING</p>
        </div>

        <div class="p-front-greeting-block01">

          <div class="p-front-greeting-block01__left">
            <figure class="p-front-greeting-block01__img">
              <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/front/Abe_Katsunori.webp' alt='安倍 勝典'
                width="522">
            </figure>
          </div>

          <div class="p-front-greeting-block01__right">

            <p class="p-front-greeting-block01__positon">本郷獣医科病院　院⻑</p>
            <h3>安部 勝典</h3>
            <p class="p-front-greeting-block01__kana">KATSUNORI ABE</p>

            <div class="p-front-greeting-block01__text">
              <p>
               当院サイトにお越しくださり有り難うございます。私たちは当院を訪れるわんちゃん、ねこちゃんを私たちの家族と思い診療にあたっています。<br>元気なときのちょっとした出来事も聞かせていただけると幸いです。診療におきましては病気の診断から治療の主作用、副作用まで、誠実に説明させていただきます。飼い主様と協力してわんちゃんねこちゃんの一生を支えていきます。
              </p>
            </div>
            <p class="p-front-greeting-block01__btn u-sp-show">
              <a class="c-btn01" href="./clinic#clinic03">クリニック紹介はこちら</a>
            </p>
          </div>

        </div>


      </div>

    </section>


    <!-- ご紹介について -->
    <section class="p-front-care">
      <div class="l-container-small">
        <div class="c-front-heading u-mb80">
          <h2 class="c-front-heading__textBig">ご紹介について</h2>
          <p class="c-front-heading__textSmall">SECONDARY CARE</p>
        </div>


        <div class="p-front-care-block01 u-mb40">
          <div class="p-front-care-block01__inner">
            <h3 class="p-front-care-block01__titie">紹介をご希望の先生方へ</h3>
            <div class="p-front-care-block01__text u-mb50">
              <p>
                当院は、かかりつけの動物病院からのご紹介に基づいて診察・手術を行っております。紹介をご希望の際は、お電話にて、まずはご連絡ください。<br>なお、飼い主様からの直接のお問い合わせでは、予約のご案内をいたしかねますのでご了承ください。
              </p>
            </div>

            <h3 class="p-front-care-block01__titie">ホームドクターからご紹介いただいている飼い主様へ</h3>
            <div class="p-front-care-block01__text">
              <p>
                当院では、一般的な治療や診断後、状態が安定した後の治療については、可能な限りかかりつけの病院にお任せする方針をとっております。<br>また、ワクチンなどの予防や健康診断に関しましてもかかりつけの先生にご相談ください。ご理解のほど、どうぞよろしくお願いいたします。
              </p>
            </div>
          </div>
        </div>

        <p class="p-front-care__btn">
          <a class="c-btn01" href="<?php echo esc_url( home_url( '/medical#medical09' ) ); ?>">ご紹介について詳しくはこちら</a>
        </p>


      </div>
    </section>





    </div>
  </article>



</main> <!-- class="l-site__main" -->



<?php get_footer(); ?>