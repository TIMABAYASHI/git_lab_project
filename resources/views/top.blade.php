<!-- トップページ -->
<!DOCTYPE html>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Git Love</title>
        <!-- Fonts -->
        <script src="{{asset('/js/jquery-2.1.3.min.js')}}"></script>
    <!-- fontawesomeの読み込み -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <!-- Google fontsの読みこみ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/top.css')}}" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js.map" rel="stylesheet"> -->
    </head>
    <body>
    <!-- ここから下がHTML部分 -->
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title">
            <img src="/img/logo3.png">
        </div>
        <div class="slide">

            <div class="swiper-container">
                <!-- 全スライドをまとめるラッパー -->
                <div class="swiper-wrapper">
                    <!-- 各スライド -->
                    <div class="swiper-slide">
                        <img src='/img/9.jpg'>
                    </div>
                    <!-- <div class="swiper-slide">
                        <img src='/img/1.jpg'>
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/2.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/3.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/4.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/5.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/6.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/7.jpg">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/8.jpg">
                    </div> -->
                </div>
                <!-- ページネーションを表示する場合 -->
                <!-- <div class="swiper-pagination"></div> -->
            
                <!-- 前後スライドへのナビゲーションボタン(矢印)を表示する場合 -->
                <!-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> -->
            
                <!-- スクロールバーを表示する場合 -->
                <!-- <div class="swiper-scrollbar"></div>
            </div> -->
                    <!-- <img src="../img/date3.jpg"> -->
    </div>     
</div>

        <button class="login"><a href="{{ url('/login') }}">ログイン</a></button>
        <button class="register"><a href="{{ url('/register') }}">新規登録</a></button>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<script>
//     var mySwiper = new Swiper ('.swiper-container', {
//         // オプションパラメータ部分
//         loop: true, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
//         speed: 300, // スライドが切り替わるトランジション時間(ミリ秒)。
//         slidesPerView: 9, // 何枚のスライドを表示するか
//         spaceBetween: 10, // スライド間の余白サイズ(ピクセル)
//         direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
//         effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)
    
        
//         // スライダーの自動再生
//         // autoplay: true 　のみなら既定値での自動再生
//         autoplay: {
//             delay: 3000, // スライドが切り替わるまでの表示時間(ミリ秒)
//             stopOnLast: false, // 最後のスライドまで表示されたら自動再生を中止するか
//             disableOnInteraction: false // ユーザーのスワイプ操作を検出したら自動再生を中止するか
           
//         },
    
//         // レスポンシブ化条件
//         breakpoints: {
//         // 980ピクセル幅以下になったら
//         980: {
//             slidesPerView: 3,
//             spaceBetween: 30
//         },
//         // 640ピクセル幅以下になったら
//         640: {
//             slidesPerView: 2,
//             spaceBetween: 20
//         }
//         },
    
//         // ページネーションを表示する場合
//         pagination: {
//             el: '.swiper-pagination',　 // ページネーションを表示するセレクタ
//             type: 'bullets',
// 		    clickable: true
//         },
    
//         // 前後スライドへのナビゲーションを表示する場合
//         navigation: {
//             nextEl: '.swiper-button-next', // 次のスライドボタンのセレクタ
//             prevEl: '.swiper-button-prev', // 前のスライドボタンのセレクタ
//         },
    
//         // スクロールバーを表示する場合
//         // scrollbar: {
//         // el: '.swiper-scrollbar', // スクロールバーを表示するセレクタ
//         // }
//         // effect: 'coverflow',
//         // slidesPerView: 3,
//         // autoplay: {
//         //     delay: 300,
//         //     autoplay: tru
//         // 	stopOnLastSlide: false,
//         // 	disableOnInteraction: false,
//         // 	reverseDirection: false
//         // },
//         // navigation: {
//         // 	nextEl: '.swiper-button-next',
//         // 	prevEl: '.swiper-button-prev'
//         // },
//         // pagination: {
//         // 	el: '.swiper-pagination',
//         // 	type: 'bullets',
//         // 	clickable: true

//   });
</script>
</body>
</html>
