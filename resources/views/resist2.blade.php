<!-- 会員登録ページ -->
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
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/resist.css')}}" />
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <title></title>
</head>

<body>
    <h1 class="title">あなたはどっちのタイプ？</h1>
    <h2 class="ask">直感で  お答えください！</h2>
    <form class="form form2" action=".php" method="POST">
        <h2 class="question">第1問</h2>
        <div class="q-container">
            <input class="q-container__input" type="radio" name="q6" id="indoor" value="0" />
            <label for="indoor" class="label">インドア派</label>
            <input class="q-container__input" type="radio" name="q6" id="outdoor" value="1">
            <label for="outdoor" class="label">アウトドア派</label>
        </div>
    <h2 class="question">第2問</h2>
        <div class="q-container">
            <input class="q-container__input" type="radio" name="q7" id="repeater" value="0">
            <label for="repeater" class="label">リピーター</label>
            <input class="q-container__input" type="radio" name="q7" id="innovator" value="1" />
            <label for="innovator" class="label">ミーハー</label>
        </div>
    <h2 class="question">第3問</h2>
        <div class="q-container">
            <input class="q-container__input" type="radio" name="q8" id="listener" value="0" />
            <label for="listener" class="label">聞き上手</label>
            <input class="q-container__input" type="radio" name="q8" id="speaker" value="1">
            <label for="speaker" class="label">話し上手</label>
        </div>
    <h2 class="question">第4問</h2>
        <div class="q-container">
            <input class="q-container__input" type="radio" name="q9" id="think" value="0" />
            <label for="think" class="label">まず考える</label>
            <input class="q-container__input" type="radio" name="q9" id="do" value="1">
            <label for="do" class="label">行動が先</label>
        </div>
    <h2 class="question">第5問</h2>
        <div class="q-container">
            <input class="q-container__input" type="radio" name="q10" id="smart" value="0" />
            <label for="smart" class="label">頭脳で勝負</label>
            <input class="q-container__input" type="radio" name="q10" id="warm" value="1">
            <label for="warm" class="label">ハートでしょ</label>
        </div>
        <input class="form__input__btn" type="submit" name="send" value="Send">

</form>
</body>
</html>
