/* -------------------------
高さを揃える
---------------------------- */
jQuery(function () {
    jQuery('.c-box01-item').matchHeight();
    jQuery('.front-sec07-list-item__text').matchHeight();
});


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

    //ナビボタンをクリックしたら
    navButton_wrap.addEventListener('click', function () {
        //ナビボタンの変更
        navButton.classList.toggle('is-close');
        //ナビメニューの表示
        navMenu.classList.toggle('is-open');
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
ページトップ
---------------------------- */
const pageTop_element = document.querySelector('.c-pageTop');
// イベントクリック
pageTop_element.addEventListener('click', function () {
    window.scroll({
        top: 0,
        behavior: 'smooth'
    });
});

const switchPoint = 200;
// スクロール時に表示
window.addEventListener('scroll', function () {
    let scrollPosition = window.scrollY;
    if (scrollPosition > switchPoint) {
        pageTop_element.classList.add('is-show');
    } else {
        pageTop_element.classList.remove('is-show');
    }
});



/* -------------------------
ページ外リンク　ページ内リンク
---------------------------- */
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