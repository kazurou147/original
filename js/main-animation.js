/* -------------------------
GSAP
---------------------------- */
window.addEventListener('load', function () {
    // プラグイン登録
    gsap.registerPlugin(ScrollTrigger);


    let gsap_responsive = gsap.matchMedia();
    gsap_responsive.add("(min-width: 1024px)", () => {




        // sample
        // gsap.timeline({
        //         repeat: -1,
        //         repeatDelay: 2,
        //     })
        //     .to(":root", {
        //         '--width-none': 0,
        //         duration: 1,
        //         delay: 2,
        //         ease: 'power2.in',
        //     })
        //     .to(":root", {
        //         '--height-none': 0,
        //         duration: 1,
        //         delay: 1,
        //         ease: 'bounce.out',
        //     });



        /*
          スクラグアニメーション
        */
        // gsap.utils.toArray(".p-front-feature-block01__img").forEach((el) => {
        //     gsap.set(el, {
        //         y: 300,
        //     });
        //     gsap.to(el, {
        //         y: 0,
        //         duration: 1,
        //         delay: 0.5,

        //         // スクロールトリガーの設定
        //         scrollTrigger: {
        //             trigger: el,
        //             start: 'top center',
        //             end: 'bottom center',
        //             toggleClass: {
        //                 targets: el,
        //                 className: "is-scroll"
        //             },
        //             scrub: 3,
        //         },
        //     });



        // });













    });

});