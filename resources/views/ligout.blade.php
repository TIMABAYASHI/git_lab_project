<!-- ログアウトページ --><!-- ログイン入力画面 -->
<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="../../public/js/jquery-2.1.3.min.js"></script>

    <!-- Google fontsの読みこみ -->
    <link
      href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap"
      rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/index.css')}}" />
    <title>Log out</title>
  </head>
  <body>
    <div class="container2">
      <div class="form-container">
        <h1 class="title--logout">Thank you!!</h1>
          <div class="policy">ログアウトしました!<br>ご利用ありがとうございました。
          </div>
        <form class="form">
          <button class="form__btn form__btn--relogin"><a href="./login.blade.php">Re-Login</a></button>
        </form>
      </div>
    </div>
  </body>
</html>


