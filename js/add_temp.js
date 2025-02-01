// 動きのきっかけとなるアニメーションの名前を定義
function fadeFix() {

    //ふわっと動くきっかけのクラス名と動きのクラス名の設定
    jQuery(function ($) {
        $('.fadeInTrigger').each(function () { //fadeInUpTriggerというクラス名が
            var elemPos = $(this).offset().top - -400; //要素より、50px上の
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight) {
                $(this).addClass('fadeInFix');
                // 画面内に入ったらfadeInというクラス名を追記
            } else {
                $(this).removeClass('fadeInFix');
                // 画面外に出たらfadeInというクラス名を外す
            }
        });
    });

    // 関数でまとめることでこの後に違う動きを追加することが出来ます
    jQuery(function ($) {
        $('.fadeOutTrigger').each(function () { //fadeInDownTriggerというクラス名が
            var elemPos = $(this).offset().top - -1800; //要素より、50px上の
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight) {
                $(this).addClass('fadeOutFix');
                // 画面内に入ったらfadeDownというクラス名を追記
            } else {
                $(this).removeClass('fadeOutFix');
                // 画面外に出たらfadeDownというクラス名を外す
            }
        });
    });

}//ここまでふわっと動くきっかけのクラス名と動きのクラス名の設定


jQuery(function ($) {
    $(window).scroll(function () {
        fadeFix();/* アニメーション用の関数を呼ぶ*/
    });
});


// 画面をスクロールをしたら動かしたい場合の記述
// $(window).scroll(function () {
    // fadeFix();/* アニメーション用の関数を呼ぶ*/
// });// ここまで画面をスクロールをしたら動かしたい場合の記述
//
// 画面が読み込まれたらすぐに動かしたい場合の記述
// $(window).on('load', function () {
    // fadeFix();/* アニメーション用の関数を呼ぶ*/
// });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
