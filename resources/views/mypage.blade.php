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
    <h2 class="comment__p">プラン一覧</h2>

    <p class="coment">AIによる診断＆提案を希望します</p>
        <button class="form__btn"><a href="{{url('\select')}}">AI診断へ</a></button>
    
    <div class="search__box">

    <input class="input-container__search" type="search" name="search" placeholder="プラン検索">
    <input class="input-container__btn" type="submit" name="submit" value=""><i class="material-icons seach">
    search
    </i>
    </form>
  </div>

  <h3>< 現在予約中のプラン ></h3>
  <h4>日付　：１２月２４日　９：００</h4>
  <h5>プラン名：お洒落な横浜で決めるぜプラン</h5>
  <div class="form-container" id="proposal_photo">
  <a href="plan_see.blade.php">  <img id="proposal_photo" src="/img/p_yokohama.jpg" /></a>

  <h3 class="past">< 過去のプラン履歴 ></h3>
    <div class="form-container" id="proposal_photo">
        <img id="proposal_photo" src="../img/IMG_2518.JPG" />
    </div>
    <div class="form-container" id="proposal_photo">
        <img id="proposal_photo" src="../img/IMG_2518.JPG" />
    </div>
    <div class="form-container" id="proposal_photo">
        <img id="proposal_photo" src="../img/IMG_2518.JPG" />
    </div>
    
    <div class="form-container" id="proposal_photo">
        <img id="proposal_photo" src="../img/IMG_2518.JPG" />
    </div>
</div>
    @include('footer')

</body>

</html>