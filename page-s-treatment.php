<?php get_header(); ?>

<?php remove_filter('the_content', 'wpautop'); ?>

<div class="l-site__content l-page">
  <!-- サイトコンテンツ -->

  <main class="l-main l-page__main">


    <!-- キービジュアル -->
    <?php get_template_part('template/page', 'kv'); ?>

    <!--　コンテンツ全体　-->
    <div class="l-page__content-outer p-treat" id="treatment">


      <!-- 記事 -->

      <article <?php post_class(); ?>>
        <?php if (have_posts()) :
          while (have_posts()) : the_post(); ?>

        <!-- ここから -->

        <div class="c-subpage-common-list">
          <div class="l-container">
            <div class="c-subpage-common-list__inner c-subpage-common-list__inner--medical">
              <p class="c-subpage-common-list__item"><a href="#treat0101">外科診療とは</a></p>
              <!--<p class="c-subpage-common-list__item"><a href="#treat0102">対象となる主な疾患</a></p>-->
              <p class="c-subpage-common-list__item"><a href="#treat0102">当院のこだわり</a></p>
              <p class="c-subpage-common-list__item"><a href="#treat0103">当院の外科診療の症例</a></p>
              <p class="c-subpage-common-list__item"><a href="#treat0104">手術前後の注意点</a></p>
            </div>
          </div>
        </div>


        <!-- 外科診療とは -->
        <section class="p-treat-sec01" id="treat0101">

          <div class="l-container-small">

            <div class="c-subpage-heading u-mb80">
              <h2 class="c-subpage-heading__textBig">外科診療とは</h2>
              <p class="c-subpage-heading__textSmall">ABOUT S.TREATMENT</p>
            </div>

            <div class="p-block01 u-mb100">
              <figure class="p-block01__img">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/treat/sec01-img01.webp' alt=''
                  width="500">
              </figure>
              <div class="p-block01__content">
                <p>
                  外科診療は、怪我や病気、先天的な異常を治療するために行われる外科的処置を指します。外科手術の対象には、骨折、腫瘍の摘出、消化器系の手術、異物の除去、または整形外科的な修復などが含まれます。手術前には健康管理や麻酔が行われ、手術のリスクと効果について飼い主様に丁寧にご説明致します。術後の管理も重要で、適切な傷のケアや痛みの管理、抗生物質の投与が必要です。また、早期の診断と介入が治療成功のカギとなります。当院では、去勢・避妊手術やヘルニアの手術も多く行っております。ぜひお気軽にご相談ください。
                </p>
              </div>
            </div>


            <div class="p-medical-frame01 p-medical-frame01--pt03">
              <h3 class="p-medical-frame01__title">こんな症状がある場合は<br class="u-sp-show">ご来院ください</h3>
              <ul class="p-medical-frame01__list">
                <li>足をあげて歩く</li>
                <li>腫れている</li>
                <li>事故やけんかなどで外傷が生じた</li>
                <li>足を引きずるようになった</li>
                <li>しこりができている</li>
                <li>階段を上らなくなった</li>
                <li>歩き方がぎこちない</li>
                <li>ジャンプしなくなった</li>
              </ul>
            </div>

          </div>

        </section>



        <!-- 当院のこだわり -->
        <section class="p-treat-sec02" id="treat0102">

          <div class="l-container-small">
            <div class="c-subpage-heading u-mb80">
              <h2 class="c-subpage-heading__textBig">当院のこだわり</h2>
              <p class="c-subpage-heading__textSmall">COMMITMENT</p>
            </div>

            <div class="p-block02 u-mb50">
              <div class="p-block02__item">
                <figure class="p-block02__img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/treat/sec02-img01.webp" alt=""
                    width="300">
                </figure>
                <p class="p-block02__title">鎮痛剤・麻酔の使用</p>
                <p class="p-block02__text">
                  鎮静剤や麻酔は、動物の診察や治療、手術を安全かつ快適に行うために使用されます。鎮静剤は、動物を落ち着かせたり、不安を和らげるために使用され、簡単な処置や検査の際に役立ちます。麻酔は、痛みを感じさせないために使用され、手術や痛みを伴う治療中に意識をなくさせます。
                </p>
              </div>

              <div class="p-block02__item">
                <figure class="p-block02__img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/treat/sec02-img02.webp" alt=""
                    width="300">
                </figure>
                <p class="p-block02__title">手術前の栄養管理</p>
                <p class="p-block02__text">
                  手術前の栄養管理は、動物の回復力を高め、手術の成功に大きく影響します。栄養状態が良いと、免疫力が向上し、術後の感染リスクが減少するため、手術前から適切な栄養管理が重要です。</p>
              </div>

              <div class="p-block02__item">
                <figure class="p-block02__img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/treat/sec02-img03.webp" alt=""
                    width="300">
                </figure>
                <p class="p-block02__title">チーム医療で<br>高度な手術も可能に</p>
                <p class="p-block02__text">
                  それぞれの専門知識や技術を結集することで、より精密で安全な手術が実現します。手術前の診断や準備、麻酔管理、術後のケアなど、全ての段階でチームとして患者をサポートすることで、合併症のリスクを減らし、回復を促進します。
                </p>
              </div>

            </div>


        </section>




        <!-- 当院の外科診療の症例 -->
        <section class="p-treat-sec03" id="treat0103">

          <div class="l-container-small">
            <div class="c-subpage-heading u-mb80">
              <h2 class="c-subpage-heading__textBig">当院の外科診療の症例</h2>
              <p class="c-subpage-heading__textSmall">CASES</p>
            </div>
            <p><center>ただいま準備中</center></p>


          </div>
        </section>



        <!-- 手術前後の注意点 -->
        <section class="p-treat-sec04" id="treat0104">

          <div class="l-container-small">
            <div class="c-subpage-heading u-mb80">
              <h2 class="c-subpage-heading__textBig">手術前後の注意点</h2>
              <p class="c-subpage-heading__textSmall">CAUTION</p>
            </div>

            <div class="p-block01 u-mb130">
              <figure class="p-block01__img">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/treat/sec04-img01.webp' alt=''
                  width="500">
              </figure>
              <div class="p-block01__content">
                <p>
                  手術を受ける前には、動物の健康状態を安定させるための準備が必要です。手術当日の絶食や、麻酔へのリスクについての説明があります。術後は、傷口の管理や動物の安静を確保し、適切なケアを行うことが重要です。術後の注意点やケアについても、しっかりとご案内します。
                </p>
              </div>
            </div>



            <div class="u-mb100">
              <h3 class="p-heading02 u-mb50">手術前の注意点</h3>
              <h4 class="p-heading03 u-mb15">① 絶食と絶水</h4>
              <p class="u-mb30">
                動物の手術では、通常全身麻酔を使用します。麻酔中に嘔吐すると、誤嚥してしまう危険があるため、手術前には絶食・絶水が必要です。
              </p>
              <dl class="p-list03">
                <div class="p-list03__item">
                  <dt>絶食時間</dt>
                  <dd>手術の12時間前から食事を与えないようにします。</dd>
                </div>
                <div class="p-list03__item">
                  <dt>絶水時間</dt>
                  <dd>手術の2～4時間前から水を与えないように指示される場合があります。</dd>
                </div>
              </dl>
            </div>

            <div class="u-mb70">
              <h4 class="p-heading03 u-mb15">② 健康状態の確認</h4>
              <p>
                動物の健康状態が手術に適しているかどうかを確認するため、事前に血液検査やレントゲン検査、心電図検査などが行われます。また、飼い主は事前に以下のことを確認する必要があります。持病があるのかどうか、投薬中の薬があるかどうかの確認が必要です。また、アレルギーや麻酔に対するリスクなども確認しておくことが必要です。
              </p>
            </div>

            <div class="u-mb120">
              <h4 class="p-heading03 u-mb15">③ 手術当日の準備</h4>
              <p>
                手術当日は、動物のストレスを最小限にするため、なるべく落ち着いた状態で病院に連れて行くように心がけます。当院では、興奮状態を抑え、安全にご来院していただくため、ゲージに入れた状態でのご来院をお願い致しております。ご協力のほどよろしくお願いいたします。
              </p>
            </div>


            <div class="u-mb70">
              <h3 class="p-heading02 u-mb50">手術後の注意点</h3>
              <h4 class="p-heading03 u-mb15">① 帰宅後のケア</h4>
              <p class="u-mb30">
                手術後、動物は麻酔の影響でふらついたり、ぼんやりしたりすることがあります。帰宅後は以下に注意してケアを行います。<br>
                落ち着いた場所で、十分に休ませてあげ、なるべく安静を保つため、急に動き回らせないように注意してください。また、手術直後は、食事や水を与えず、指示された時間になってから少量ずつ与えようにしてください。
              </p>
            </div>

            <div class="u-mb100">
              <h4 class="p-heading03 u-mb15">② 傷口の管理</h4>
              <p class="u-mb30">
                手術後の傷口は感染を防ぐために清潔に保つことが重要です。主に下記の点を注意してください。
              </p>
              <dl class="p-list03 p-list03--pt2">
                <div class="p-list03__item">
                  <dt>傷口のチェック</dt>
                  <dd>出血や腫れ、異常な排液がないか毎日確認してください。</dd>
                </div>
                <div class="p-list03__item">
                  <dt>エリザベスカラーの使用</dt>
                  <dd>動物が傷口を舐めないように、エリザベスカラーを装着することをお勧めします。</dd>
                </div>
                <!--<div class="p-list03__item">
                  <dt>包帯やガーゼの交換</dt>
                  <dd>包帯やガーゼを使用している場合は、定期的に包帯やガーゼを交換してください。</dd>
                </div>-->
              </dl>
            </div>

            <div class="u-mb110">
              <h4 class="p-heading03 u-mb15">③ 安静と運動制限</h4>
              <p>
                手術後は、動物が十分に回復するまで安静が必要です。特に、散歩や遊びなどの激しい運動は控えてください。また、生活の中でも、階段やジャンプを避け、患部に負担をかけないように注意してください。術後は安全のため、狭いゲージの中で安静にすることを推奨しています。
              </p>
            </div>

            <div class="u-mb110">
              <h4 class="p-heading03 u-mb15">④ 食事と水分補給</h4>
              <p>
                術後の食事は、消化しやすいものを少量ずつ与えます。水分補給も少しずつ行い、動物の体調を見ながら調整します。食欲がない場合や吐き気が続く場合は、すぐに当院まで連絡してください。
              </p>
            </div>

            <div class="u-mb110">
              <h4 class="p-heading03 u-mb15">⑤ 投薬管理</h4>
              <p>
                手術後には、鎮痛剤や抗生物質などが処方する場合があります。指示されたとおりに薬を与え、動物の状態を観察してください。もし副作用や異常な反応が見られた場合は、すぐに当院までご連絡ください。
              </p>
            </div>

            <div class="u-mb110">
              <h4 class="p-heading03 u-mb15">⑥ 定期検診と経過観察</h4>
              <p>
                手術後の回復を確認するために、定期的な検診が必要です。傷口の治癒状況や術後の合併症がないかを確認するため、術後も定期的に診察を受けることが大切です。
              </p>
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