<!-- home.blade.phpに挿入してください -->




<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="../../public/js/jquery-2.1.3.min.js"></script>
    <!-- fontawesomeの読み込み -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <!-- Google fontsの読みこみ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../../public/css/reset.css" />
    <link rel="stylesheet" href="../../public/css/main.css" />
    <title>メインページ</title>
</head>

<body>
    <i class="material-icons back">
      keyboard_arrow_left
    </i>
    <h1 class="title">デートプラン選択</h1>
    <p class="comment__p">AIが分析したあなたにオススメのコース例</p>
    <div class="form-container" id="proposal_photo">
        <img id="proposal_photo" src="../img/IMG_2518.JPG" />
    </div>
    <p class="comment__p_1">AIがあなたに合ったプランを提案します</p>
    <button class="form__btn"><a href="./select.blade.php">プラン選択</a></button>
    <p class="comment__p_2">過去のプラン履歴やお気に入りを確認できます</p>
    <button class="form__btn"><a href="./mypage.blade.php">Myページへ</a></button>
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