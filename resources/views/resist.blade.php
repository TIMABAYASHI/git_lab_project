<!-- views > auth > register.blade.phpに挿入お願いします-->
<!-- 移動したら削除で -->



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
    <link rel="stylesheet" href="../../public/css/reset.css" />
    <link rel="stylesheet" href="../../public/css/resist.css" />
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <title>会員登録ページ</title>
</head>

<body>
<h1 class="title">会員情報詳細入力</h1>
<form class="form" action=".php" method="POST">
    <h2 class="form__title">名前 :</h2>
        <input
          class="form__input"
          type="text"
          name="user_name"
          placeholder="リーチ・マイケル"
        />
    <h2 class="form__title">生年月日 :</h2>
        <input
          class="form__input"
          type="password"
          name="birthday"
          placeholder=""
        />
    <h2 class="form__title">郵便番号 :</h2>
        <input
            class="form__input"
            type="text" 
            name="zip" 
            required placeholder="ハイフンなし" 
            value="" 
            onKeyUp="AjaxZip3.zip2addr('zip', '', 'address', 'address');" 
        /><br>
    <h2 class="form__title">住所：</h2>
        <input
            class="form__input"
            type="text" 
            name="address" 
            placeholder="例）港区北青山 ※自動入力" 
            value="" 
        />
        <!-- <input
          class="form__input"
          type="text"
          name="address"
          placeholder=""
        /> -->
    <h2 class="form__title">血液型 :</h2>
        <input
          class="form__input"
          type="text"
          name="bloodtype"
          placeholder="B"
        />
<input class="form__input__btn" type="submit" neme="send">
    </from>
</body>
</html>
