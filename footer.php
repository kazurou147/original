<!-- フッター前に共通で表示するエリア  -->
<!--?php get_template_part('template/link', 'bottom'); ?-->

<footer>
  <div class="l-footer">


    <!-- 医院情報 -->
    <div class="l-footer-information">
      <div class="l-container">

        <div class="l-footer-information-block01 <?php if(is_front_page())echo 'wow fadeInUp'; ?>">
          <div class="l-footer-information-block01__left l-footer-information-block01__item">
            <div class="l-footer-information-block01__left-inner">
              <figure class="l-footer-information-block01__brand">
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/logo_footer.png' alt='本郷獣医科病院'
                  width="370">
              </figure>

              <p class="l-footer-information-block01__address">〒113-0034 　東京都文京区湯島4-1-21</p>
              <ul class="l-footer-information-block01__train">
                <li>都営大江戸線　本郷三丁目駅　徒歩5分</li>
                <li>東京メトロ丸の内線　本郷三丁目駅　徒歩8分</li>
              </ul>

              <div class="l-footer-information-block01__table01">
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
                      <td class="p-table01-last">日祝</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th><span class="p-table01-waku">午前</span>&nbsp;&nbsp;<br class="u-pc-none"><span
                          class="p-table01-time">9:00～12:00</span>
                      </th>
                      <td class="p-table01-first">●</td>
                      <td>●</td>
                      <td>●</td>
                      <td>●</td>
                      <td>●</td>
                      <td>●</td>
                      <td>●</td>
                    </tr>
                    <tr>
                      <th><span class="p-table01-waku">午後</span><br class="u-pc-none"><span
                          class="p-table01-time">16:00～19:00</span>
                      </th>
                      <td class="p-table01-first">●</td>
                      <td>●</td>
                      <td>●</td>
                      <td>●</td>
                      <td>●</td>
                      <td>●</td>
                      <td>●</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="8">
                        ※ 年中無休で診療致しております。<br>
                        ※ 緊急外来も対応致しております。<br>
						※ 予約優先制です。ご希望のお時間が埋まっている場合はお電話ください。
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>




              <div class="l-footer-information-block01__info">
                <p class="l-footer-information-block01__contact-text">ご予約<br class="u-sp-none">お問い合わせ</p>
                <p class="l-footer-information-block01__tel"><a href="tel:0338115590">03-3811-5590</a></p>
              </div>

              <div class="l-footer-information-block01__links">
                <a href="https://line.me/R/ti/p/@377vsvoo" target="_blank">
                  <figure>
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/banner-line.png' alt='LINE予約'
                      width="213">
                  </figure>
                </a>
                <a href="https://tokyo-doctors.com/preReserve/31239/" target="_blank">
                  <figure>
                    <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/banner-reserve.png' alt='WEB予約'
                      width="213">
                  </figure>
                </a>
              </div>

            </div>
          </div>


          <div class="l-footer-information-block01__right">
            <figure class="l-footer-information-block01__img">
              <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/footer-exterior.webp' alt=''
                width="600">
            </figure>
          </div>
        </div>
        <!-- l-footer-information-block01 -->

      </div>
    </div>
    <!-- l-footer-information -->



    <div class="l-footer-information-map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.7650378117924!2d139.76150807060722!3d35.707399217353114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c24a1cd418d%3A0xa1530fbbe8fe7bfc!2z5pys6YO3542j5Yy756eR55eF6Zmi!5e0!3m2!1sja!2sjp!4v1730969197761!5m2!1sja!2sjp"
        width="1920" height="510" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <div class="l-footer-information-video">
      <div class="l-footer-information-block01__video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/8aMO4Zu6izU?si=Oy6a62y3hAbzupnO"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </div>



    <div class="l-footer-area">

      <div class="l-container-small">
        <!-- <div class="map-root"><a href="https://maps.app.goo.gl/aoK3gDW6GbZ2gtHb7" target="_blank">GoogleMapの経路案内はこちら</a></div> -->

        <nav class="l-footer__nav">
          <div class="menu-footer-gnavi-container">
            <ul id="menu-footer-gnavi" class="menu">
              <li class="menu-item">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <img class="menu-icon-home"
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon-home-white.png" alt="ホーム"
                    width="20">
                </a>
              </li>
              <li class="menu-item">
                <a href="<?php echo esc_url(home_url('/medical/')); ?>">
                  <span class="menu-item-jp">診療案内</span>
                  <span class="menu-item-en">MEDICAL</span>
                </a>
              </li>
              <li class="menu-item">
                <a href="<?php echo esc_url(home_url('/s-treatment/')); ?>">
                  <span class="menu-item-jp">外科診療</span>
                  <span class="menu-item-en">S.TREATMENT</span>
                </a>
              </li>
              <li class="menu-item">
                <a href="<?php echo esc_url(home_url('/clinic/')); ?>">
                  <span class="menu-item-jp">医院案内</span>
                  <span class="menu-item-en">CLINIC</span>
                </a>
              </li>

              <li class="menu-item">
                <a href="<?php echo esc_url(home_url('/price-list/')); ?>">
                  <span class="menu-item-jp">料金表</span>
                  <span class="menu-item-en">PRICE LIST</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>


        <div class="bnr-block">
          <ul>
            <li><a href="https://tokyo-doctors.com/animalList/31239/interview/" target="_blank"><img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bnr_doctors01.png"
                  alt="東京ドクターズ　本郷獣医科病院-院長インタビュー" width="250"></a></li>
                  <li><a href="https://tokuroku-ac.com/" target="_blank"><img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bnr_01.png"
                  alt="とくろくペットクリニック＿バナー" width="250"></a></li>
          </ul>
        </div>



        <div class="l-footer-block01">
          <p class="l-footer-block01__copylight"><small>©本郷獣医科病院</small></p>
        </div>
      </div>
    </div>
    <!-- l-footer-area -->


  </div>
</footer>


</div><!-- /l-site -->

<?php wp_footer(); ?>



</body>

</html>