<?php get_header(); ?>

<?php remove_filter('the_content', 'wpautop'); ?>

<div class="l-site__content l-page">
  <!-- サイトコンテンツ -->

  <main class="l-main l-page__main">


    <!-- キービジュアル -->
    <?php get_template_part('template/page', 'kv'); ?>

    <!--　コンテンツ全体　-->
    <div class="l-page__content-outer p-medical" id="medical">


      <!-- 記事 -->

      <article <?php post_class(); ?>>
        <?php if (have_posts()) :
          while (have_posts()) : the_post(); ?>

        <!-- ここから -->

        <div class="c-subpage-common-list">
          <div class="l-container">
            <div class="c-subpage-common-list__inner c-subpage-common-list__inner--medical">
              <p class="c-subpage-common-list__item"><a href="#medical01">一般診療</a></p>
              <p class="c-subpage-common-list__item"><a href="#medical02">外科診療</a></p>
              <p class="c-subpage-common-list__item"><a href="#medical03">予防医療</a></p>
              <p class="c-subpage-common-list__item"><a href="#medical04">細胞医療</a></p>
              <p class="c-subpage-common-list__item"><a href="#medical05">去勢・避妊手術</a></p>
              <p class="c-subpage-common-list__item"><a href="#medical06">トリミング</a></p>
              <p class="c-subpage-common-list__item"><a href="#medical07">マイクロチップ</a></p>
              <p class="c-subpage-common-list__item"><a href="#medical08">セカンドオピニオン</a></p>
              <p class="c-subpage-common-list__item"><a href="#medical09">ご紹介に関して</a></p>
              <p class="c-subpage-common-list__item"><a href="#medical10">対象動物について</a></p>
            </div>
          </div>
        </div>


        <!-- 一般診療 -->
        <section class="p-medical-sec01" id="medical01">

          <div class="l-container-small">

            <div class="c-subpage-heading u-mb80">
              <h2 class="c-subpage-heading__textBig">一般診療</h2>
              <p class="c-subpage-heading__textSmall">GENERAL TREATMENT</p>
            </div>

            <div class="p-block01 u-mb110">
              <figure class="p-block01__img">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec01-img01.webp' alt=''
                  width="500">
              </figure>
              <div class="p-block01__content">
                <p>人間の場合、内科や外科、皮膚科、眼科、循環器科など、専門ごとに異なる病院が存在しますが、動物の場合はこれらの専門分野が一つにまとまった総合病院という形がわかりやすいかもしれません。<br>
                  当院では、各分野の専門性を追求し、常に最新の医療を提供できるよう日々努めております。愛犬や愛猫に普段と異なる様子が見られた際には、どうぞお気軽にご相談ください。</p>
              </div>
            </div>


            <div class="u-mb110">
              <h3 class="p-heading01">当院で取り扱っている<br class="u-sp-show">診療科目</h3>

              <div class=>
                <ul class="p-medical-list01">
                  <li>循環器</li>
                  <li>呼吸器</li>
                  <li>消化器</li>
                  <li>眼</li>
                  <li>耳鼻</li>
                  <li>歯</li>
                  <li>皮膚</li>
                  <li>外科</li>
                </ul>
              </div>

            </div>

            <div class="p-medical-frame01 p-medical-frame01--pt01">
              <h3 class="p-medical-frame01__title">こんな症状がある場合は<br class="u-sp-show">ご来院ください</h3>
              <ul class="p-medical-frame01__list">
                <li>嘔吐や下痢</li>
                <li>尿量が多い、少ない、でない</li>
                <li>耳が汚れている</li>
                <li>痩せてきた</li>
                <li>太ってきた</li>
                <li>ご飯を食べない</li>
                <li>いつもより元気がない</li>
                <li>粘膜が白っぽく見える</li>
                <li>咳をする</li>
                <li>散歩で歩ける距離が短くなった</li>
                <li>舌の色が紫色になった</li>
                <li>鼻水、くしゃみが出る</li>
                <li>皮膚が痒そう</li>
                <li>脱毛している</li>
                <li>口の臭いが気になる</li>
                <li>歯石が気になる</li>
                <li>目がしょぼしょぼする</li>
                <li>排便時に力んでいる</li>
                <li>誤食をした</li>

              </ul>
            </div>

          </div>

        </section>



        <!-- 外科手術 -->
        <section class="p-medical-sec02" id="medical02">

          <div class="l-container-small">
            <div class="c-subpage-heading u-mb80">
              <h2 class="c-subpage-heading__textBig">外科診療</h2>
              <p class="c-subpage-heading__textSmall">SURGICAL.TREATMENT</p>
            </div>

            <div class="p-block01 u-mb130">
              <figure class="p-block01__img">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec02-img01.webp' alt=''
                  width="500">
              </figure>
              <div class="p-block01__content">
                <p>外科診療では、まず手術が必要かどうかを診断し、他の治療法の可能性も含めて検討します。<br>
                  病気の進行具合や手術の複雑さ、緊急性について、飼い主様にわかりやすくご説明します。<br>
                  動物の体への負担や飼い主様の希望、費用面を考慮しながら、最適な治療法をご提案します。<br>
                  「手術が必要と言われた」「手術の前に他の選択肢を知りたい」「外科治療について詳しく知りたい」といったセカンドオピニオンも対応可能で、手術に対する不安についてもお気軽にご相談いただけます。</p>
              </div>
            </div>


            <div class="u-mb140">
              <h3 class="p-heading01">当院で対応している手術</h3>

              <div class=>
                <ul class="p-medical-list01 p-medical-list01--white">
                  <li>避妊去勢手術</li>
                  <li>子宮蓄膿症</li>
                  <li>腫瘍摘出</li>
                  <li>異物摘出</li>
                  <li>結石摘出</li>
                  <li>整形外科疾患</li>
                  <li>神経外科疾患</li>
                  <li>その他</li>
                </ul>
              </div>

            </div>

            <div class="u-mb140">
              <div class="p-medical-frame01 p-medical-frame01--pt02">
                <h3 class="p-medical-frame01__title">こんな症状がある場合は<br class="u-sp-show">ご来院ください</h3>
                <ul class="p-medical-frame01__list">
                  <li>足をあげて歩く</li>
                  <li>足を引きずるようになった</li>
                  <li>歩き方がぎこちない</li>
                  <li>肢を痛がる</li>
                  <li>歩きたがらない</li>
                  <li>ふらついたり倒れたりする</li>
                  <li>吐いている</li>
                  <li>血尿が出た</li>
                  <li>腫瘍やしこりを発見した</li>
                  <li>誤飲をした</li>
                  <li>外傷が見られる</li>
                </ul>
              </div>
            </div>



            <div class="">
              <h3 class="p-heading01">当院の外科診療</h3>

              <div class="p-block02 u-mb50">

              <div class="p-block02__item">
                  <figure class="p-block02__img">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec02-list-img03.webp'
                      alt='' width="300">
                  </figure>
                  <p class="p-block02__title">鎮痛剤の使用で安心！</p>
                  <p class="p-block02__text">手術後の痛みを和らげるために鎮痛剤を処方し、動物ができるだけ快適に回復できるようサポートします。</p>
                </div>

                <div class="p-block02__item">
                  <figure class="p-block02__img">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec02-list-img02.webp'
                      alt='' width="300">
                  </figure>
                  <p class="p-block02__title">手術前の健康管理も<br>しっかりサポート</p>
                  <p class="p-block02__text">手術前の体調により、手術の成功率も変わります。手術前検査で全身状態をしっかりと把握した上で手術前後の健康をサポートしていきます。</p>
                </div>


                <div class="p-block02__item">
                  <figure class="p-block02__img">
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec02-list-img01.webp'
                      alt='' width="300">
                  </figure>
                  <p class="p-block02__title">専門的な設備を幅広く完備</p>
                  <p class="p-block02__text">当院では、専門的な設備を幅広く完備し、適切な処置を行えるよう準備致しております。</p>
                </div>





              </div>


              <p class="u-text-center">
                <a href="/s-treatment" class="c-btn02">外科診療について<br class="u-sp-show">詳しくはこちら</a>
              </p>



            </div>

        </section>




        <!-- 予防医療 -->
        <section class="p-medical-sec03" id="medical03">

          <div class="l-container-small">
            <div class="c-subpage-heading u-mb80">
              <h2 class="c-subpage-heading__textBig">予防医療</h2>
              <p class="c-subpage-heading__textSmall">PREVENTIVE</p>
            </div>

            <div class="p-block01 u-mb130">
              <figure class="p-block01__img">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec03-img01.webp' alt=''
                  width="500">
              </figure>
              <div class="p-block01__content">
                <p>
                  混合ワクチンや狂犬病予防接種、フィラリア予防など、予防医療によって防げる病気があります。さらに、日常の些細な不安やケアに関する疑問についても、ペットのライフステージに応じた適切なアドバイスや、食事指導などのサポートを行っています。どんな小さなことでも構いませんので、ぜひお気軽にご相談ください。
                </p>
              </div>
            </div>



            <div class="u-mb80">
              <h3 class="p-heading02">各種ワクチン</h3>
              <p>
                ワンちゃんの伝染病は減少しているものの、まだ完全にはなくなっていません。一方で、ネコちゃんの伝染病は依然として多く報告されています。当クリニックでは、子犬や子猫に対しては年に2〜3回、成犬や成猫には年に1回の予防接種をおすすめしております。
              </p>
            </div>



            <div class="u-mb80">
              <h4 class="p-medical-subheading01">猫のワクチン</h4>
              <table class="p-table01">
                <tr>
                  <th>3種混合ワクチン</th>
                  <td>ウイルス性鼻気管炎 / カリシウイルス感染症 / 猫汎白血球減少症</td>
                </tr>
                <tr>
                  <th>5種混合ワクチン</th>
                  <td>上記に加えて、猫白血病ウイルス / 猫クラミジア症</td>
                </tr>
              </table>
            </div>


            <div class="u-mb80">
              <h4 class="p-medical-subheading02">犬のワクチン</h4>
              <table class="p-table01">
                <tr>
                  <th>6種混合ワクチン</th>
                  <td>犬ジステンパーウイルス / 犬アデノウイルス1型（犬伝染性肝炎） / 犬アデノウイルス2型（犬伝染性喉頭気管炎） / 犬パルボウイルス感染症 / 犬パラインフルエンザウイルス感染症 /
                    コロナウイルス感染症</td>
                </tr>
                <tr>
                  <th>8種混合ワクチン</th>
                  <td>上記に加えて、レプトスピラ感染症（黄疸出血型） / レプトスピラ感染症（カニコーラ型）</td>
                </tr>
              </table>
            </div>

            <div class="u-mb80">
              <h3 class="p-heading02">狂犬病予防</h3>
              <p>
                日本では「狂犬病予防法」に基づき、犬には年に1回のワクチン接種が義務付けられています。生後91日以上の犬は、飼い始めてから30日以内に1回、その後は毎年1回の接種が必要です。狂犬病は致死率が高く、感染力が強い病気で、人間にも感染するリスクがあるため、ワクチン接種が最も効果的な予防手段です。決められたスケジュールに従って接種を行うことが重要です。狂犬病ワクチンは安全かつ高い効果を持ち、感染リスクをほぼ完全に防ぐことができます。飼い主として、ワクチンスケジュールを守り、ペットや周囲の人々の健康を守る責任があります。
              </p>
            </div>


            <div class="u-mb80">
              <h3 class="p-heading02">フィラリア予防</h3>
              <p>
                フィラリア症は、蚊によって媒介される寄生虫が原因で発症する病気です。感染初期は目に見えないほど小さな虫ですが、数ヶ月で15cm以上の素麺のような成虫となり、肺動脈や心臓に寄生します。成虫が体内に寄生すると、命に関わる深刻な症状が現れ、治療自体が非常に危険になります。そのため、決められた期間に毎月1回の予防薬をしっかり投与することが非常に重要です。
              </p>
            </div>


            <div class="">
              <h3 class="p-heading02">ノミ・マダニ駆虫薬</h3>
              <p>
                ノミやダニは、動物の血液を栄養源にして生活しています。彼らは主に草むらに潜んでおり、犬や猫が通りかかると寄生してしまいます。特にマダニは「重症熱性血小板減少症」という、非常に深刻な症状を引き起こす病気を媒介しています。ノミやダニは室内でも年中繁殖が可能なため、予防を年間を通じて行うことをおすすめします。効果的な予防策として、月に1回の駆除薬の投与が有効です。これまではつけるタイプが一般的でしたが、最近では即効性のある食べるタイプの駆除薬も登場しています。
              </p>
            </div>


          </div>
        </section>



        <!-- 細胞医療 -->
        <section class="p-medical-sec04" id="medical04">

          <div class="l-container-small">
            <div class="c-subpage-heading u-mb80">
              <h2 class="c-subpage-heading__textBig">細胞医療</h2>
              <p class="c-subpage-heading__textSmall">CELL MEDICINE</p>
            </div>

            <div class="p-block01 u-mb130">
              <figure class="p-block01__img">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec04-img01.webp' alt=''
                  width="500">
              </figure>
              <div class="p-block01__content">
                <p>
                  細胞医療は、動物の健康や治療において細胞を利用する新しい医療分野です。このアプローチは、再生医療や治療の最前線に位置しており、特に組織の修復や再生を促進するために活用されます。間葉系幹細胞医療では、体内の細胞を再活性化したり、外部から提供された細胞を使用して、損傷した組織や臓器の修復を目指します。また、活性化リンパ球療法は、特定の病気に対する免疫応答を強化するための手段としても研究されています。
                </p>
              </div>
            </div>



            <div class="u-mb80">
              <h3 class="p-heading02">間葉系幹細胞投与</h3>
              <p>
                幹細胞投与とは、幹細胞を投与することで組織の修復、再生を促進する能力が注目されている先進医療です。<br>
                当院では椎間板ヘルニア、脳梗塞などの神経病から腎炎、肝炎、免疫介在性貧血などさまざまな疾患に応用しています。
              </p>
            </div>

            <div class="">
              <h3 class="p-heading02">活性化リンパ球療法</h3>
              <p>
                活性化リンパ球療法は腫瘍患者の免疫治療として悪性腫瘍の手術後または抗がん剤治療の際、再発の予防促進とQOLの向上を目的として行っています。乳がん患者の局所麻酔での摘出と活性化リンパ球療法により、全身麻酔無く再発せずにコントロールしている症例も経験しています。
              </p>
            </div>

          </div>
        </section>


        <!-- 去勢・避妊手術 -->
        <section class="p-medical-sec05" id="medical05">

          <div class="l-container-small">
            <div class="c-subpage-heading u-mb80">
              <h2 class="c-subpage-heading__textBig">去勢・避妊手術</h2>
              <p class="c-subpage-heading__textSmall">CONTRACEPTIVE SURGERY</p>
            </div>

            <div class="p-block01 u-mb130">
              <figure class="p-block01__img">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec05-img01.webp' alt=''
                  width="500">
              </figure>
              <div class="p-block01__content">
                <p class="u-mb40">
                  去勢・避妊手術は、繁殖を防ぐために行われる手術です。オスの去勢手術は精巣を摘出し、メスの避妊手術は卵巣を摘出します。これにより、繁殖能力がなくなるだけでなく、特定の健康リスクも低減します。例えば、メスでは子宮蓄膿症や乳腺腫瘍のリスクが減り、オスでは前立腺疾患や精巣腫瘍のリスクが低下します。また、望まない妊娠を防ぎ、行動面でも攻撃性やマーキング行為が抑えられることがあります。手術は通常全身麻酔で行われ、術後の回復も比較的短期間です。
                </p>
                <p><strong>※手術可能な月齢：生後６か月以降</strong></p>
              </div>
            </div>



            <div class="u-mb80">
              <h3 class="p-heading02">去勢手術で予防できる病気</h3>
              <ul>
                <li>前立線の病気</li>
                <li>精巣・肛門周辺の腫瘍</li>
                <li>会陰ヘルニアの予防など</li>
              </ul>
            </div>

            <div class="u-mb140">
              <div class="p-medical-frame02">
                <h3 class="p-medical-frame02__title">去勢手術のメリット</h3>
                <ul class="p-medical-frame02__list">
                  <li>攻撃性が和らぐ</li>
                  <li>肛門周囲腺腫の予防</li>
                  <li>尿マーキングをしにくくなる</li>
                  <li>鼠径ヘルニア、会陰ヘルニアの予防</li>
                  <li>精巣腫瘍を予防</li>
                  <li>性ホルモン性皮膚病の予防・治療</li>
                  <li>前立腺肥大の予防・治療</li>
                </ul>
              </div>
            </div>


            <div class="u-mb80">
              <h3 class="p-heading02">避妊手術で予防できる病気</h3>
              <ul>
                <li>子宮蓄膿症、卵巣腫瘍、乳腺腫瘍の予防</li>
                <li>鼠経ヘルニアの予防など</li>
              </ul>
            </div>

            <div class="u-mb140">
              <div class="p-medical-frame02 p-medical-frame02--pt2">
                <h3 class="p-medical-frame02__title">避妊手術のメリット</h3>
                <ul class="p-medical-frame02__list p-medical-frame02__list--pt2">
                  <li>生理（発情出血）がこなくなる</li>
                  <li>乳腺腫瘤の発生予防、切除後の再発予防</li>
                  <li>性ホルモン性皮膚病等の予防・治療</li>
                  <li>卵巣腫瘍、子宮腫瘍、子宮蓄膿症等の予防・治療</li>
                </ul>
              </div>
            </div>

          </div>
        </section>


        <!-- トリミング -->
        <section class="p-medical-sec06" id="medical06">

          <div class="l-container-small">
            <div class="c-subpage-heading u-mb80">
              <h2 class="c-subpage-heading__textBig">トリミング</h2>
              <p class="c-subpage-heading__textSmall">TRIMMING</p>
            </div>

            <div class="p-block01 u-mb120">
              <figure class="p-block01__img">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec06-img01.webp' alt=''
                  width="500">
              </figure>
              <div class="p-block01__content">
                <p>
                  当院のトリミングサービスでは、健康を第一に考えたサービスを提供しています。健康なペットのトリミングはもちろん、高齢の動物や病気を持つわんちゃんに対しても、負担を最小限に抑える配慮を行っています。また、当院ではトリミングに加え、皮膚や被毛の健康についてのアドバイスも行っています。シャンプーやカットの際に気になる点があれば、ぜひご相談ください。
                </p>
              </div>
            </div>


            <div class="u-mb60">
              <h3 class="p-heading01">当院のトリミングの特徴</h3>

              <div class="p-block02">
                <div class="p-block02__item">
                  <figure class="p-block02__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec06-list-img01.webp"
                      alt="" width="300">
                  </figure>
                  <p class="p-block02__title">低刺激で優しいシャンプー</p>
                  <p class="p-block02__text">アレルギー性皮膚炎などの皮膚疾患を抱えるペットには、獣医師の診断に基づいて、皮膚の状態に適した動物病院専用のシャンプーを使用することが可能です。
                  </p>
                </div>

                <div class="p-block02__item">
                  <figure class="p-block02__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec06-list-img02.webp"
                      alt="" width="300">
                  </figure>
                  <p class="p-block02__title">薬浴で皮膚の健康をサポート</p>
                  <p class="p-block02__text">トリミングの際、薬浴も行っております。薬浴を行うことで、皮膚の健康を守り、様々な皮膚に関する病気の予防にもなります。</p>
                </div>

                <div class="p-block02__item">
                  <figure class="p-block02__img">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec06-list-img03.webp"
                      alt="" width="300">
                  </figure>
                  <p class="p-block02__title">獣医師常駐</p>
                  <p class="p-block02__text">
                    獣医師が常駐しているため、体調の変化がある場合はすぐに診察することが可能です。シニアのわんちゃんや持病を持っている場合も、獣医師と連携をとりながらトリミングを行います。</p>
                </div>

              </div>
            </div>


           <div class="p-medical-sec06-block01">
               <!--<a class="p-medical-sec06-block01__item" href="https://www.instagram.com/hongou.ah/" target="_blank">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/btn-insta.png"
                  alt="インスタフォローで爪切りサービス" width="460">
              </a>-->
              <a class="p-medical-sec06-block01__item" href="https://liff.line.me/1645278921-kWRPP32q/?accountId=zdw9143h" target="_blank">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/btn-line.png"
                  alt="トリミング用LINE予約" width="460">
              </a>
            </div>



          </div>
        </section>


        <!-- マイクロチップ -->
        <section class="p-medical-sec07" id="medical07">

          <div class="l-container-small">
            <div class="c-subpage-heading u-mb80">
              <h2 class="c-subpage-heading__textBig">マイクロチップ</h2>
              <p class="c-subpage-heading__textSmall">MICROCHIP</p>
            </div>

            <div class="p-block01 u-mb130">
              <figure class="p-block01__img">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec07-img01.webp' alt=''
                  width="500">
              </figure>
              <div class="p-block01__content">
                <p>
                  令和4年6月1日から「改正動物愛護管理法」が施行され、令和4年6月以降に取得した犬や猫には、マイクロチップの装着およびその情報登録が義務化されました。ただし、制度開始前に生まれた犬や猫については、一部例外が適用される場合があります。マイクロチップは、直径約2mm、長さ8〜12mmほどの円筒形で、ガラスで覆われており、体内で位置がずれないように設計されています。この電子タグには15桁の番号が登録されており、専用のリーダーを使って番号を読み取ることができます。リーダーは、全国の動物病院や動物保護センター
                  に設置されています。
                </p>
              </div>
            </div>



            <div class="u-mb80">
              <h3 class="p-heading02">マイクロチップ挿入方法</h3>
              <p class="u-mb60">
                犬や猫へのマイクロチップの埋め込みは、通常の注射よりやや太い針を持つ注入器を使い、首の後ろの皮膚の下に挿入するのが一般的です。特別な処置として、鎮痛剤や麻酔を使うことは通常必要ありません。
                ただ、去勢・避妊手術など、他の治療で麻酔を使用することがあれば、その時に同時に行うことも可能です。</p>
              <!--div class="p-medical-sec07-block01">
                <p class="p-medical-sec07-block01__item">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec07-img02.webp" alt=""
                    width="300">
                </p>
                <p class="p-medical-sec07-block01__item">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec07-img03.webp" alt=""
                    width="300">
                </p>
              </div-->
            </div>

          </div>
        </section>



        <!-- セカンドオピニオン -->
        <section class="p-medical-sec08" id="medical08">

          <div class="l-container-small">
            <div class="c-subpage-heading u-mb80">
              <h2 class="c-subpage-heading__textBig">セカンドオピニオン</h2>
              <p class="c-subpage-heading__textSmall">SECOND OPINION</p>
            </div>

            <div class="p-block01 u-mb110">
              <figure class="p-block01__img">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec08-img01.webp' alt=''
                  width="500">
              </figure>
              <div class="p-block01__content">
                <p>
                  セカンドオピニオンとは、現在通院中の動物病院の獣医師をかかりつけ医として、その獣医師の意見（ファーストオピニオン）を考慮した上で、他の獣医師の意見を求めることを指します。本郷獣医科病院では、セカンドオピニオンの相談を受け付けています。セカンドオピニオンを受けたからといって、必ずしもかかりつけ医を変更する必要はありませんので、ご安心ください。「他の獣医師の意見も聞いてみたい」といったご要望がありましたら、ぜひお気軽にご相談ください。
                </p>
              </div>
            </div>



            <div class="">
              <h3 class="p-heading02 u-mb50">ご持参いただく物</h3>

              <div class="u-mb80">
                <h4 class="p-heading03">・これまでの検査結果資料</h4>

                <p>下記のうち、ご用意できるものをご用意お願い致します。CT検査、MRI検査、内視鏡検査などのデータ情報が多いほど、より正確な病状の把握が可能になりますので、できるだけ多くの検査資料をご用意ください。
                </p>

                <div class="u-pl40">
                  <ul>
                    <li>血液検査結果</li>
                    <li>レントゲンデータ</li>
                    <li>超音波検査結果</li>
                    <li>細胞診、病理組織検査結果</li>
                  </ul>
                </div>
              </div>


              <div class="u-mb50">
                <h4 class="p-heading03">これまでの診療情報がわかる資料・メモ</h4>

                <p>皮膚疾患の場合は、写真などの画像を提供していただくと、より具体的に状況を把握できます。また、発作や問題行動については、動画を用意していただくことで、理解が深まります。
                </p>
              </div>

              <div class="">
                <h4 class="p-heading03">現在、飲ませている薬とその袋（薬袋）</h4>

                <p>お薬の種類や投薬量を把握することで、治療の際に役立つことがあります。不明点がある場合は、事前にご相談ください。
                </p>
              </div>

            </div>

          </div>
        </section>


        <!-- ご紹介に関して -->
        <section class="p-medical-sec09" id="medical09">

          <div class="l-container-small">
            <div class="c-subpage-heading u-mb80">
              <h2 class="c-subpage-heading__textBig">ご紹介に関して</h2>
              <p class="c-subpage-heading__textSmall">SECOND CARE</p>
            </div>

            <div class="p-block01 u-mb110">
              <figure class="p-block01__img">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/medical/sec09-img01.webp' alt=''
                  width="500">
              </figure>
              <div class="p-block01__content">
                <p>
                  当院では、ご紹介をいただいた際に、動物たちの健康状態や症状に基づき、最適な診療を受けられるよう尽力致しております。ぜひお気軽にご相談ください。
                </p>
              </div>
            </div>


            <div class="u-mb100">
              <h3 class="p-heading02 u-mb50">診療までの流れ</h3>

              <div class="p-ol01">
                <div class="p-ol01__item">
                  <div class="p-ol01__no">
                    <p>1</p>
                  </div>
                  <div class="p-ol01__content">
                    <p class="p-ol01__title">かかりつけの病院へご相談</p>
                    <p class="p-ol01__text">当院での診療には、病歴や治療、検査歴などの詳細情報が必要です。これらの情報を事前にご提供していただきます。予約日等はかかりつけの先生へご相談ください。
                    </p>
                  </div>
                </div>
                <div class="p-ol01__item">
                  <div class="p-ol01__no">
                    <p>2</p>
                  </div>
                  <div class="p-ol01__content">
                    <p class="p-ol01__title">診療</p>
                    <p class="p-ol01__text">
                      ご予約いただいた時間までに、当院にお越しください。</p>
                  </div>
                </div>
                <div class="p-ol01__item">
                  <div class="p-ol01__no">
                    <p>3</p>
                  </div>
                  <div class="p-ol01__content">
                    <p class="p-ol01__title">診療結果のご報告</p>
                    <p class="p-ol01__text">当日または結果が出ましたら、当院よりご紹介いただいた動物病院様に結果をお伝えいたします。</p>
                  </div>
                </div>
                <div class="p-ol01__item">
                  <div class="p-ol01__no p-ol01__no--last">
                    <p>4</p>
                  </div>
                  <div class="p-ol01__content">
                    <p class="p-ol01__title">連携</p>
                    <p class="p-ol01__text">診療後も、ご紹介いただいた動物病院様と当院が連携し、治療を進めてまいります。</p>
                  </div>
                </div>
              </div>





            </div>


            <h3 class="p-heading02 u-mb50">診療の際のご注意</h3>
            <ul>
              <li>受診の際は、かかりつけの動物病院様からの指示を守っていただきますようお願い申し上げます。</li>
              <li>持参するよう指示された過去の記録などをお忘れなくお持ちください。</li>
              <li>動物には必ずリードを付けるか、キャリーに入れてお連れください。</li>
              <li>前の患者様の診療が長引いた場合など、ご予約いただいた時間よりも診察開始が遅れることがありますので、ご理解とご協力をお願い申し上げます。</li>
              <li>担当医の勤務日に変更が生じた際には、当院から飼い主様に直接ご連絡させていただくことがございますので、あらかじめご了承ください。</li>
              <li>診察依頼を受けた内容を中心に診させていただきます。その他の症状や処置に関しましては、基本的にかかりつけの先生にご相談いただくようお願い申し上げます。</li>
            </ul>



          </div>
        </section>


        <!-- 対象動物・当院から他院への紹介について -->
        <section class="p-medical-sec10" id="medical10">

          <div class="l-container-small">
            <div class="c-subpage-heading u-mb80">
              <h2 class="c-subpage-heading__textBig">対象動物・当院から<br class="u-sp-show">他院への紹介について</h2>
              <p class="c-subpage-heading__textSmall">TARGET ANIMAL</p>
            </div>

            <p class="u-text-center">当院は、犬・猫専門の獣医科病院です。犬・猫以外の動物は、当院で診療ができないため、他院を紹介いたしており、<br class="u-sp-none">
              谷中千駄木ペットクリニック様を紹介しています。</p>

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