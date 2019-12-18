<!-- トップページ -->

<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Git Love</title>
        <!-- Fonts -->
        <script src="../../public/js/jquery-2.1.3.min.js"></script>
    <!-- fontawesomeの読み込み -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <!-- Google fontsの読みこみ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../../public/css/reset.css" />
    <link rel="stylesheet" href="../../public/css/top.css" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <!-- ここから下がHTML部分 -->
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    <img src="../img/Primary_logo.png">
                </div>
                <div class="slide">
                    <img src="../img/date3.jpg">
                </div>     
            </div>
        </div>
        <button class="login"><a href="./login.blade.php">ログイン</a></button>
        <button class="resist"><a href="./resist.blade.php">新規登録</a></button>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
</body>
</html>
