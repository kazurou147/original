<?php get_header(); ?>

<?php remove_filter('the_content', 'wpautop'); ?>

<div class="l-site__content l-page">
  <!-- サイトコンテンツ -->

  <main class="l-main l-page__main">


    <!-- キービジュアル -->
    <?php get_template_part('template/page', 'kv'); ?>

    <!--　コンテンツ全体　-->
    <div class="l-page__content-outer p-clinic" id="clinic">


      <!-- 記事 -->

      <article <?php post_class(); ?>>
        <?php if (have_posts()) :
          while (have_posts()) : the_post(); ?>

            <!-- ここから -->
            <div class="c-subpage-common-list">
              <div class="l-container">
                <div class="c-subpage-common-list__inner c-subpage-common-list__inner--medical">
                  <p class="c-subpage-common-list__item"><a href="#clinic01">当院のポリシー</a></p>
                  <p class="c-subpage-common-list__item"><a href="#clinic02">医師紹介</a></p>
                  <p class="c-subpage-common-list__item"><a href="#clinic03">院内紹介</a></p>
                  <!--<p class="c-subpage-common-list__item"><a href="#clinic04">機材紹介</a></p>-->
                  <p class="c-subpage-common-list__item"><a href="#clinic04">アクセス</a></p>
                </div>
              </div>
            </div>


            <!-- 当院のポリシー -->
            <section class="p-clinic-sec01" id="clinic01">

              <div class="l-container-small">

                <div class="c-subpage-heading u-mb110">
                  <h2 class="c-subpage-heading__textBig">当院のポリシー</h2>
                  <p class="c-subpage-heading__textSmall">POLICY</p>
                </div>

                <div class="p-clinic-sec01-block01 u-mb60">
                  <p class="u-mb30">当院では、安心、納得して治療をうけていただけるように、コミュニケーションを大切にし、飼い主様の御意見をより尊重した治療を心がけています。</p>
                  <p>また、最新の獣医学を学び、医療設備の充実、衛生管理、スタッフ教育に努めております。<br>
                    言葉を話すことができない動物の苦痛を和らげ、飼い主様と楽しい時間が一日でも長く続きますよう、スタッフ一同、日々精進していきたいと思っております。</p>
                </div>

                <p class="u-text-center">
                  <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/clinic/sec01-illust01.png' alt=''
                    width="816">
                </p>


              </div>
            </section>


            <!-- 医師紹介 -->
            <div id="clinic02" class="anchor"></div>
            <section class="p-clinic-doctors">
              <div class="l-container">
                <div class="c-subpage-heading u-mb110">
                  <h2 class="c-subpage-heading__textBig">医師紹介</h2>
                  <p class="c-subpage-heading__textSmall">Doctor</p>
                </div>


                <div class="p-clinic-doctors-block01 c-row c-row-between c-row-wrap u-mb120 u-mb100--sp">
                  <div class="p-clinic-doctors-block01__left">
                    <figure class="p-clinic-doctors-block01__img u-mb90 u-mb60--sp">
                      <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/clinic/abe_katsunori.webp'
                        alt='安部 勝典'>
                    </figure>
                  </div>
                  <div class="p-clinic-doctors-block01__right">
                    <p class="p-clinic-doctors-block01__lead">本郷獣医科病院　院⻑</p>
                    <h3 class="p-clinic-doctors-block01__name">安部 勝典</h3>
                    <p class="p-clinic-doctors-block01__name-en u-mb50">KATSUNORI ABE</p>

                    <h4 class="p-clinic-doctors-block01__title">ご挨拶</h4>
                    <p class=" p-clinic-doctors-block01__text u-mb50">
                      当院サイトにお越しくださり有り難うございます。<br>
                      私たちは当院を訪れるわんちゃん、ねこちゃんを私たちの家族と思い診療にあたっています。<br>
                      元気なときのちょっとした出来事も聞かせていただけると幸いです。<br>
                      診療におきましては病気の診断から治療の主作用、副作用まで、誠実に説明させていただきます。<br>
                      飼い主様と協力してわんちゃんねこちゃんの一生を支えていきます。
                    </p>

                    <h4 class="p-clinic-doctors-block01__career">経歴</h4>
                    <ul class="p-clinic-doctors-block01__list u-mb40">
                      <li>日本獣医生命科学大学卒業</li>
                    </ul>

                    <h4 class="p-clinic-doctors-block01__career">所属学会</h4>
                    <ul class="p-clinic-doctors-block01__list">
                      <li>獣医麻酔外科学会</li>
                      <li>日本獣医再生医療学会</li>
                    </ul>
                  </div>

                </div>


                <div class="p-clinic-doctors-block01 p-clinic-doctors-block01--rev c-row c-row-between c-row-wrap u-mb120  u-mb100--sp">
                  <div class="p-clinic-doctors-block01__left">
                    <figure class="p-clinic-doctors-block01__img u-mb90 u-mb60--sp">
                      <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/clinic/nakasako_kae.webp'
                        alt='中瀬古 花衣'>
                    </figure>
                  </div>
                  <div class="p-clinic-doctors-block01__right">
                    <p class="p-clinic-doctors-block01__lead">本郷獣医科病院　獣医師</p>
                    <h3 class="p-clinic-doctors-block01__name">中瀬古 花衣</h3>
                    <p class="p-clinic-doctors-block01__name-en u-mb30">KAE NAKASEKO</p>

                    <h4 class="p-clinic-doctors-block01__title p-clinic-doctors-block01__title--black">ご挨拶</h4>
                    <p class=" p-clinic-doctors-block01__text u-mb50">
                      全ての動物とご家族が安心して来ていただけるよう、皆様の目線になって一緒に考えることを心がけています。些細なことでもお気軽にご相談ください。
                    </p>

                    <h4 class="p-clinic-doctors-block01__career">経歴</h4>
                    <ul class="p-clinic-doctors-block01__list u-mb40">
                      <li>日本獣医生命科学大学卒業</li>
                    </ul>

                    <h4 class="p-clinic-doctors-block01__career">所属学会</h4>
                    <ul class="p-clinic-doctors-block01__list">
                      <li>獣医腎泌尿器学会</li>
                    </ul>

                  </div>

                </div>

                <h4 class="p-clinic-doctors-block01__title2"><span>非常勤</span></h4>
                <div class="p-clinic-doctors-block01 u-mb100--sp">
                  <div class="p-clinic-doctors-block01__right">
                    <p class="p-clinic-doctors-block01__lead">本郷獣医科病院　専門獣医師（内科）</p>
                    <h3 class="p-clinic-doctors-block01__name">手嶋 隆洋</h3>
                    <p class="p-clinic-doctors-block01__name-en u-mb50">TAKAHIRO TESHIMA </p>
                    <h4 class="p-clinic-doctors-block01__career">経歴</h4>
                    <ul class="p-clinic-doctors-block01__list u-mb40">
                      <li>日本獣医生命科学大学 内科学教室 准教授</li>
                    </ul>
                  </div>
                </div>





            </section>



            <!-- 院内紹介 -->
            <section class="p-clinic-intro" id="clinic03">
              <div class="l-container-small">
                <div class="c-subpage-heading u-mb110">
                  <h2 class="c-subpage-heading__textBig">院内紹介</h2>
                  <p class="c-subpage-heading__textSmall">Clinic Introduction</p>
                </div>


                <div class="p-clinic-intro-block01 c-row c-row-wrap u-mb100">
                  <div class="p-clinic-intro-block01__item">
                    <figure class="p-clinic-intro-block01__img">
                      <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/clinic/intro-img01.webp' alt=''
                        width="470">
                    </figure>
                    <h3 class="p-clinic-intro-block01__title">受付</h3>
                  </div>

                  <div class="p-clinic-intro-block01__item">
                    <figure class="p-clinic-intro-block01__img">
                      <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/clinic/intro-img02.webp' alt=''
                        width="470">
                    </figure>
                    <h3 class="p-clinic-intro-block01__title">待合い</h3>
                  </div>

                  <div class="p-clinic-intro-block01__item">
                    <figure class="p-clinic-intro-block01__img">
                      <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/clinic/intro-img03.webp' alt=''
                        width="470">
                    </figure>
                    <h3 class="p-clinic-intro-block01__title">診察室1</h3>
                  </div>

                  <div class="p-clinic-intro-block01__item">
                    <figure class="p-clinic-intro-block01__img">
                      <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/clinic/intro-img04.webp' alt=''
                        width="470">
                    </figure>
                    <h3 class="p-clinic-intro-block01__title">診察室2</h3>
                  </div>

                  <div class="p-clinic-intro-block01__item">
                    <figure class="p-clinic-intro-block01__img">
                      <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/clinic/intro-img05.webp' alt=''
                        width="470">
                    </figure>
                    <h3 class="p-clinic-intro-block01__title">手術室</h3>
                  </div>

                  <div class="p-clinic-intro-block01__item">
                    <figure class="p-clinic-intro-block01__img">
                      <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/clinic/intro-img06.webp' alt=''
                        width="470">
                    </figure>
                    <h3 class="p-clinic-intro-block01__title">病院外観</h3>
                  </div>
                </div>


                <div class="p-clinic-intro-block02">
                  <p class="p-clinic-intro-block02__title">入院について</p>
                  <p class="p-clinic-intro-block02__text">
                    入院室は、冷暖房と空気清浄器が完備された清潔な個室です。重症の動物のためにICU（集中治療室）も用意されています。感染症またはその疑いがある場合にも、入院でしっかり対応できますので、お気軽にご相談ください。
                  </p>
                </div>



              </div>
            </section>






            <!-- アクセス -->
            <section class="p-clinic-access" id="clinic04">
              <div class="l-container-small">
                <div class="c-subpage-heading u-mb70">
                  <h2 class="c-subpage-heading__textBig">アクセス</h2>
                  <p class="c-subpage-heading__textSmall">ACCESS</p>
                </div>


                <div class="p-clinic-access__inner">

                  <p class="p-clinic-access__address u-mb20">
                    〒113-0034 東京都文京区湯島4-1-21
                  </p>

                  <div class="p-clinic-access-block01">

                    <p class="p-clinic-access-block01__map-gmap">
                      <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.7650378117924!2d139.76150807060722!3d35.707399217353114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c24a1cd418d%3A0xa1530fbbe8fe7bfc!2z5pys6YO3542j5Yy756eR55eF6Zmi!5e0!3m2!1sja!2sjp!4v1730969197761!5m2!1sja!2sjp"
                        width="1920" height="510" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>

                    <h3 class="p-clinic-access-block01__title">
                      電車の場合
                    </h3>
                    <ul class="p-clinic-access-block01__list u-mb140">
                      <li>
                        東京メトロ丸ノ内線・都営大江戸線『本郷三丁目駅』徒歩５分</li>
                      <li>東京メトロ千代田線『湯島駅』徒歩５分</li>
                    </ul>


                    <div class="c-subpage-heading--pt2 u-mb70">
                      <h2 class="c-subpage-heading__textBig">アクセス動画</h2>
                      <p class="c-subpage-heading__textSmall">ROUTE</p>
                    </div>


                    <p class="p-clinic-access-block01__youtube-caption">
                      東京メトロ丸ノ内線・都営大江戸線『本郷三丁目駅』4番出口からクリニックへの徒歩ルート
                    </p>
                    <p class="p-clinic-access-block01__youtube">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/8aMO4Zu6izU?si=7HtEG60F9ZOQXNRJ"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </p>
                  </div>

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