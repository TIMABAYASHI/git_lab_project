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

    <link rel="stylesheet" href="../../public/css/reset.css" />
    <link rel="stylesheet" href="../../public/css/select.css" />
    <title>select</title>
  </head>

  <body>
    <div class="form-container">
      <!-- <div class="counter"> -->
        <ul class=list>
            <li><i class="material-icons list--next" >looks_one</i></li>
            <li><i class="material-icons list--next" >looks_two</i></li>
            <li><i class="material-icons list--next" >looks_3</i></li>
            <li><i class="material-icons list--next" >looks_4</i></li>
            <li><i class="material-icons list--now" >looks_5</i></li>
        </ul> 
        <!-- </div> -->
      <h1 class="title">デートプラン選択</h1>
      <h2 class="question">どっちの気分？</h2>
      <form class="form" method="post" action="#">
        <button class="form__input" type="submit" name="feeling" value="0">
          新しいスポット!!
        </button>
        <button class="form__input" type="submit" name="feeling" value="1">
          歴史的な場所
        </button>
        <!-- <input class="form__btn" type="submit" value="Send" /> -->
      </form>
    </div>
  </body>
</html>
