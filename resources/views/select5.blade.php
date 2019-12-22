<!-- 絞り込み検索画面 -->
<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="{{asset('/js/jquery-2.1.3.min.js')}}"></script>
    <!-- fontawesomeの読み込み -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
    <!-- Google fontsの読みこみ -->
    <link
      href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap"
      rel="stylesheet"
    />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

    <link rel="stylesheet" href="{{asset('/css/reset.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/select.css')}}" />
    <title>select</title>
  </head>

  <body>
    <div class="container">
      <div class="form-container">
        <!-- <div class="counter"> -->
          <ul class=list>
              <li><i class="material-icons list--next" >looks_one</i></li>
              <li><i class="material-icons list--next" >looks_two</i></li>
              <li><i class="material-icons list--next" >looks_3</i></li>
              <li><i class="material-icons list--next" >looks_4</i></li>
              <li><i class="material-icons list--now" >looks_5</i></li>
          </ul> 
        <h1 class="title">どっちの気分？</h1>
      <form class="form" method="post" action="#">
        <div class="radio-tile-group">
          <div class="input-container">
            <input id="trend" class="radio-button" type="radio" name="q10" value="0" />
            <div class="radio-tile">
              <div class="icon">
                <i class="material-icons list--now">trending_up</i>
              </div>
              <label for="trend" class="radio-tile-label">新しさ</label>
            </div>
          </div>

          <div class="input-container">
            <input id="tradition" class="radio-button" type="radio" name="q10" value="1" />
            <div class="radio-tile">
              <div class="icon">
                <i class="material-icons list--now" >trending_flat</i>
              </div>
              <label for="tradition" class="radio-tile-label">伝統的</label>
            </div>
          </div>
          <button class="form__btn form__btn--checkit" type="submit">Check it!<button>        
          <!-- <button class="form__btn form__btn--checkit"><a href="{{ url('/plan_see') }}">Check it!!</a><button> -->
        </div>
      </form>
    </div>
  </div>
    @include('footer')

    <!-- <section class="page one">
    <article>
      <h1>Page One</h1>
      <a href="{{ url('/plan_see') }}" class="navigate-anchor">Move to Next Page</a>
    </article>
  </section> -->

<script>
    

$(window).on('load', function(){
  $('body').removeClass('fadeout');
});
 
$(function() {
  // ハッシュリンク(#)と別ウィンドウでページを開く場合はスルー
  $('a:not([href^="#"]):not([target])').on('click', function(e){
    e.preventDefault(); // ナビゲートをキャンセル
    url = $(this).attr('href'); // 遷移先のURLを取得

    if (url !== '') {
      $('body').addClass('fadeout');  // bodyに class="fadeout"を挿入
      setTimeout(function(){
        window.location = url; // 0.8秒後に取得したURLに遷移
        console.log(url);
      }, 800);
    }
    return false;
  });
});
</script>
  </body>
</html>
