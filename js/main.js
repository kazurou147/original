/* -------------------------
Navigation Menu
---------------------------- */
window.addEventListener('DOMContentLoaded', function () {

    //ナビボタンエリアの取得
    const navButton_wrap = document.getElementById('c-nav-button__wrap');
    //ナビボタンの取得
    const navButton = document.querySelector('.c-nav-button');
    //ナビメニューの取得
    const navMenu = document.querySelector('.c-nav-sp');
    //ナビメニューのリスト
    const navItem = document.querySelectorAll('.c-nav-sp .menu > li > a');
    //ヘッダー
    const header = document.querySelector('.l-header');


    //ナビボタンをクリックしたら
    navButton_wrap.addEventListener('click', function () {
        //ナビボタンの変更
        navButton.classList.toggle('is-close');
        //ナビメニューの表示
        navMenu.classList.toggle('is-open');
        //ヘッダークラス追加
        header.classList.toggle('is-nav-sp');
    });

    // ページ内リンクの場合
    navItem.forEach(el => {
        // ナビメニューのリスト
        el.addEventListener('click', function () {
            //ナビボタンの変更
            navButton.classList.toggle('is-close');
            //ナビメニューの表示
            navMenu.classList.toggle('is-open');
        });
    });

});


/* -------------------------
Navigation Sub Menu
---------------------------- */
//初回の判定 class="sub-menu-sp-btn"の複数入力を防ぐため
let firstTime = true;

function navMenu() {
    //windowの幅を取得
    let winwidth = jQuery(window).width();
    const breakPoint = 768;
    const menuItem_children = jQuery('.menu-item-has-children');

    //ナビメニューのホバー
    if (winwidth >= breakPoint) {
        menuItem_children.on({
            'mouseenter': function () {
                jQuery(this).children('.sub-menu').addClass('is-open');
            },
            'mouseleave': function () {
                jQuery(this).children('.sub-menu').removeClass('is-open');
            }
        });

    } else if (winwidth < breakPoint && firstTime == true) {

        //ナビの子メニュー（アコーディオン）
        menuItem_children.append('<div class="sub-menu-sp-btn"></div>');
        jQuery('.sub-menu-sp-btn').on('click touch', function () {
            jQuery(this).prev().slideToggle();
            jQuery(this).toggleClass('is-open');
        });
        firstTime = false;
    }
}

jQuery(window).on('load resize', function () {
    navMenu();
});





/* -------------------------
ページ外リンク ページ内リンク
---------------------------- */
{
    // Headerの高さを取得
    const headerHeight = document.querySelector('header').offsetHeight;
    // locationはurl , hashは#～
    var urlHash = location.hash;

    /* ページ外リンク  */
    // ロード時 URLにアンカーが含まれていた時に処理
    window.addEventListener('DOMContentLoaded', function () {
        if (urlHash) {
            // スクロール位置を初期化
            window.scroll({
                top: 0
            });
            // その後の処理
            setTimeout(function () {
                // ターゲットの要素を取得
                const target = document.querySelector(urlHash)
                // ターゲットの位置を取得  window.pageYOffset:スクロール量  getBoundingClientRect().top:ブラウザ左上からの位置
                let targetoffsetTop = window.pageYOffset + target.getBoundingClientRect().top;
                // ターゲットからヘッダーの高さを引く
                targetoffsetTop -= headerHeight;
                // スクロール
                window.scroll({
                    top: targetoffsetTop,
                    behavior: "smooth"
                });
            }, 100);
        }
    });

    /* ページ内リンク */
    // #で始まるhref属性を要素取得
    const anchor = document.querySelectorAll('a[href^="#"]');
    // ノードリストを配列に変換する　forEachメソッドが使えるようになる
    const anchorArray = Array.prototype.slice.call(anchor);

    // 配列全てに処理を行う
    anchorArray.forEach(function (link) {
        // リンクをクリック時に処理
        link.addEventListener('click', function (e) {
            // 処理を止める
            e.preventDefault();
            // ターゲットのIDを取得
            const targetId = link.hash;
            // ターゲットの要素を取得
            const targetEl = document.querySelector(targetId);
            // ターゲットの位置を取得  window.pageYOffset:スクロール量  getBoundingClientRect().top:ブラウザ左上からの位置
            let targetoffsetTop = window.pageYOffset + targetEl.getBoundingClientRect().top;
            // ターゲットからヘッダーの高さを引く
            targetoffsetTop -= headerHeight;

            // スクロール
            window.scroll({
                top: targetoffsetTop,
                behavior: "smooth"
            });
        })
    });
}

/* -------------------------
Vegas
---------------------------- */
var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;

/* -----------------------------------
トップページのスライダー
下記に画像のURLを置き換えること！
------------------------------------- */

// const home_url = 'http://hayakawa-kotaro.local/'

if (windowwidth > 768) {
    // PC用の画像
    var responsiveImage = [{
            src: '/wp-content/themes/hon-gou/img/front/banner_mv01.webp'
        },
        {
            src: '/wp-content/themes/hon-gou/img/front/banner_mv02.webp'
        },
        {
            src: '/wp-content/themes/hon-gou/img/front/banner_mv03.webp'
        },
    ];
} else {
    // スマホ用の画像
    // スマホ用の画像が必要なければPC用の画像のURLを設定しておくこと
    var responsiveImage = [{
            src: '/wp-content/themes/hon-gou/img/front/banner_mv01-sp.webp'
        },
        {
            src: '/wp-content/themes/hon-gou/img/front/banner_mv02-sp.webp'
        },
        {
            src: '/wp-content/themes/hon-gou/img/front/banner_mv03-sp.webp'
        },
    ];
}

jQuery(function ($) {
    $('.p-front-mv__inner').vegas({
        timer: false,
        transition: 'blur',
        animation: 'kenburnsrev',
        delay: 5000,
        animationDuration: 30000,
        transitionDuration: 33000,
        slides: responsiveImage
    });
});

/* -------------------------
Slick
---------------------------- */
// jQuery(function ($) {
//     $('.p-front-facility-block01').slick({
//         autoplay: true,
//         autoplaySpeed: 0,
//         speed: 8000,
//         cssEase: 'linear',
//         variableWidth: true,
//         arrows: false,

//     });
// });


/* -------------------------
wow.js
---------------------------- */
window.addEventListener('DOMContentLoaded', function () {

    if (window.innerWidth > 1130) {
        const wow = new WOW({
            boxClass: 'wow',
            offset: 300,
            animateClass: 'animated',
        }).init();
        const wow2 = new WOW({
            boxClass: 'wow2',
            offset: 0,
            animateClass: 'animated',
        }).init();
    }
});

/* -------------------------
時間差表示 wow.js
---------------------------- */
// {
//     // BLOGの時間差表示
//     const wowBlog = function () {
//         const $wowLoop = document.getElementsByClassName('js-wow-blog');
//         let loopIndex = 0;
//         let loopDelay = 0.3;
//         const loopLength = $wowLoop.length;
//         while (loopIndex < loopLength) {
//             $wowLoop[loopIndex].dataset.wowDelay = loopDelay + 's';
//             loopIndex++
//             // 時間差の秒数
//             loopDelay += 0.2;
//         }
//     }
//     window.addEventListener('DOMContentLoaded', function () {
//         wowBlog();
//     });
// }


/* -------------------------
Header Scroll
---------------------------- */
function headerScrll() {

    const body = document.querySelector('body');
    const header = document.querySelector('.l-header');
    const headerArea01 = document.querySelector('.l-header-area1Wrap');
    // const headerArea02 = document.querySelector('.l-gnav');
    // let headerArea01_height = headerArea01.clientHeight;
    // let currentPoint = 0;

    // スクロール時
    // window.addEventListener('scroll', function () {


    let scrollPosition = window.scrollY;

    if (scrollPosition > 10) {
        header.classList.add('is-scroll');
        headerArea01.classList.add('is-move');
    } else {
        header.classList.remove('is-scroll');
        headerArea01.classList.remove('is-move');
    }

    // // ヘッダー以上をスクロール
    // if (scrollPosition > headerArea01_height) {
    //     headerArea02.classList.add('is-fixed');
    //     headerArea01.classList.add('is-move');
    // } else {
    //     headerArea01.classList.remove('is-fixed');
    //     headerArea01.classList.remove('is-move');
    //     headerArea02.classList.remove('is-fixed');
    // }
    // // 下にスクロール
    // if (scrollPosition >= currentPoint) {
    //     headerArea01.classList.remove('is-fixed');
    // } else {
    //     headerArea01.classList.add('is-fixed');
    //     headerArea01.classList.remove('is-move');
    // }
    // if (scrollPosition < headerArea01_height && scrollPosition <= currentPoint) {
    //     headerArea02.classList.remove('is-fixed');
    //     headerArea02.classList.add('is-move');
    // } else {
    //     headerArea02.classList.remove('is-move');
    // }
    // currentPoint = scrollPosition;

    // 初期化
    // if (scrollPosition == 0) {
    //     headerArea01.classList.remove('is-fixed');
    //     headerArea01.classList.remove('is-move');
    //     headerArea02.classList.remove('is-fixed');
    //     headerArea02.classList.remove('is-move');
    // }

    // });

}

document.addEventListener('DOMContentLoaded', headerScrll);
document.addEventListener('scroll', headerScrll);
document.addEventListener('resize', headerScrll);


/* -------------------------
高さを揃える
---------------------------- */
jQuery(function ($) {
    $('.p-front-medical-block01__item').matchHeight();
    $('.p-front-sec03-block01__list').matchHeight();
    $('.p-block02__title').matchHeight();


});

/* -------------------------
ページトップ
---------------------------- */
{
    const pageTop_element = document.querySelector('.c-pageTop');
    // イベントクリック
    pageTop_element.addEventListener('click', function () {
        window.scroll({
            top: 0,
            behavior: 'smooth'
        });
    });

    const switchPoint = 1000;
    // スクロール時に表示
    window.addEventListener('scroll', function () {
        let scrollPosition = window.scrollY;
        if (scrollPosition > switchPoint) {
            pageTop_element.classList.add('is-show');
        } else {
            pageTop_element.classList.remove('is-show');
        }
    });

}