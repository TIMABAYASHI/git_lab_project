<!-- マイページ -->
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="{{asset('/js/jquery-2.1.3.min.js')}}"></script>
    <!-- fontawesomeの読み込み -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <!-- Google fontsの読みこみ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/mypage.css')}}" />
    <title>メインページ</title>
</head>

<body>
<h1 class="title">yutoさんのページ</h1>
  <div class="display">

    <h2>AIによる診断 & 提案を行う</h2>
        <button class="form__btn"><a href="{{url('\select')}}">AI診断へ</a></button>
        <h2 class="comment">プラン一覧</h2>
    <div class="search__box">

    <input class="input-container__search" type="search" name="search" placeholder="プラン検索">
    <input class="input-container__btn" type="submit" name="submit" value=""><i class="material-icons seach">
    search
    </i>
    </form>
  </div>

  <h3>< 現在予定中のプラン ></h3>
  <h4>日付　：１２月２４日　２１：００</h4>
  <h5>プラン名：お洒落な横浜で決めるぜプラン</h5>
  <div class="form-container" id="proposal_photo">
  <a href="plan_see.blade.php">  <img id="proposal_photo" src="/img/p_yokohama.jpg" /></a>

  <h3 class="past">< 過去のプラン履歴 ></h3>
  <h4>日付　：１２月２０日　９：００</h4>
  <h5>プラン名：ミッキーとふれあいプラン</h5>
    <div class="form-container" id="proposal_photo">
        <img id="proposal_photo" src="/img/mickey.jpg" />
    </div>
    <h4>日付　：１２月１日　９：００</h4>
  <h5>プラン名：ミッキーとふれあいプラン</h5>
    <div class="form-container" id="proposal_photo">
        <img id="proposal_photo" src="/img/mickey.jpg" />
    </div>
    <h4>日付　：１１月１０日　９：００</h4>
  <h5>プラン名：ミッキーとふれあいプラン</h5>
    <div class="form-container" id="proposal_photo">
        <img id="proposal_photo" src="/img/mekakushi.jpg" />
    </div>
      
    <h4>日付　：１０月２日　９：００</h4>
    <h5>プラン名：ミッキーとふれあいプラン</h5>
    <div class="form-container" id="proposal_photo">
        <img id="proposal_photo" src="/img/mickey.jpg" />
    </div>
    <h4>日付　：９月２０日　９：００</h4>
    <h5>プラン名：ミッキーとふれあいプラン</h5>
    <div class="form-container" id="proposal_photo">
        <img id="proposal_photo" src="/img/mickey.jpg" />
    </div>
    <h4>日付　：９月９日　９：００</h4>
    <h5>プラン名：ミッキーとふれあいプラン</h5>
    <div class="form-container" id="proposal_photo">
        <img id="proposal_photo" src="/img/2525e7c1.jpg" />
    </div>
</div>
    @include('footer')

</body>

</html>