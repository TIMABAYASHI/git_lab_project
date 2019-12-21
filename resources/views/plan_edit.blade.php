<!-- 登録後に来るページ。プランをどうするか選択するページ -->
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
    <link rel="stylesheet" href="{{asset('/css/plan.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}" />
    <title>プラン選択</title>
</head>

<body>
    <i class="material-icons back">
      keyboard_arrow_left
    </i>
    <h1 class="title">プラン編集</h1>
    <input class="" name="planName" value=""></input>
    <div class="form-container" id="proposal_photo">
    <p class="coment">あなたの性格、年齢、住んでいる場所から<br>
    診断したおすすめプラン</p>
        <img id="proposal_photo" src="../img/IMG_2518.JPG" height="10%" />
        <p class="coment">AIによる診断＆提案を希望します</p>
        <button class="form__btn"><a href="{{url('\select')}}">AI診断へ</a></button>
        <p class="coment">過去の履歴のなどを確認できます</p>
        <button class="form__btn"><a href="{{url('\mypage')}}">Myページへ</a></button>
        <p class="coment">他の人のプランを閲覧できます</p>
        <button class="form__btn"><a href="{{url('\plan_post')}}">投稿ページへ</a></button>
        <div class="footer">
            <i class="material-icons menu">
        subject
      </i>

            <i class="material-icons">
        publish
      </i>
            <i class="material-icons">
        map
      </i>
            <i class="material-icons myPage">
        perm_identity
      </i>
        </div>
</body>

</html>