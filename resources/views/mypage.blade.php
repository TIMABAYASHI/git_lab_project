
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
  @foreach
  <div class="display">
    <i class="material-icons back">
      keyboard_arrow_left
    </i>
    <h1 class="title">{{$users->name}}さんのページ</h1>
    <h2 class="comment__p">プラン保存履歴</h2>
  <div class="search__box">
  <form action="" method="post">
    <i class="material-icons voice">
    keyboard_voice
    </i>
    <input class="input-container__search" type="search" name="search" placeholder="プラン検索">
    <input class="input-container__btn" type="submit" name="submit" value=""><i class="material-icons seach">
    search
    </i>
    </form>
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
    
    <div class="form-container" id="proposal_photo">
        <img id="proposal_photo" src="../img/IMG_2518.JPG" />
    </div>
</div>
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