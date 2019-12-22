<!-- 絞り込み検索画面 -->
<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="/jquery-2.1.3.min.js"></script>
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
              <li><i class="material-icons list--now" >looks_one</i></li>
              <li><i class="material-icons list--next" >looks_two</i></li>
              <li><i class="material-icons list--next" >looks_3</i></li>
              <li><i class="material-icons list--next" >looks_4</i></li>
              <li><i class="material-icons list--next" >looks_5</i></li>
          </ul> 
        <h1 class="title">どっちの気分？</h1>
      <form class="form" method="post" action="#">
        <div class="radio-tile-group">
          <div class="input-container">
            <input id="down" class="radio-button" type="radio" name="q6" value="0" />
            <div class="radio-tile">
              <div class="icon">
                <i class="material-icons list--now">house</i>
              </div>
              <label for="down" class="radio-tile-label">チル</label>
            </div>
          </div>

          <div class="input-container">
            <input id="active" class="radio-button" type="radio" name="q6" value="1" />
            <div class="radio-tile">
              <div class="icon">
                <i class="material-icons list--now" >directions_run</i>
              </div>
              <label for="active" class="radio-tile-label">アクティブ</label>
            </div>
          </div>
          <button class="form__btn" type="submit">Next<button>        
        </div>
      </form>
    </div>
  </div>
    @include('footer')
  </body>
</html>
