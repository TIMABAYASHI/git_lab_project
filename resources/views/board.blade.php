<?PHP
    // $file_name = "toukou_2.txt"; /*読込ファイルの指定*/
    // $ret_array = file( $file_name ); /*ファイルを全て配列に入れる*/
    // for( $i = 0; $i < count($ret_array); ++$i ) { /*行末までループする*/

    //     echo( $ret_array[$i] . "<br />\n" ); /*配列を順番に表示する*/

    // }
    // ?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>keisiban</title>
    <!-- Fonts -->
    <script src="{{asset('/js/jquery-2.1.3.min.js')}}"></script>
    <script src="{{asset('/js/jquery.raty.js')}}"></script>
    <!-- fontawesomeの読み込み -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <!-- Google fontsの読みこみ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/board.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/jquery.raty.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="css/fontawesome-stars.css"/ rel="stylesheet"> -->
    <!-- <script src="js/jquery.barrating.min.js"></script> -->
  </head>

<body>
<div class="title">
  <h1>掲 示 板</h1>
</div>

<div class="all__div">

<!-- <form action="toukou_1.blade.php" method="post">  -->

<div class="post__table">
<table>
  <div class="point">
    <p class="star" id="star1"></p>
    <h2>4.24  </h2><h3>8件 </h3><i class="material-icons">sms</i>
  </div>
  
    <tr>
      <!-- <div class="date__table"> -->
        <td class="post__date__1" >投稿日　：</td>
        <td class="post__date__2" >2019/12/24</td>
    </tr>
    <tr>
    <!-- <div class="name__table"> -->
        <td class="post__title__1" >プラン名：</td>
        <td class="post__title__2" name="name"><a href="plan_edit.blade.php">渋谷最先端技術体験ツアー</a></td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr>
        <td class="post__title__1" >作成者名：</td>
        <td class="post__title__2" name="name">ゆうと</td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr>
      <td colspan="2" align="center">
      <div class="sns_box" id="fb-root" >   
      <button class="send__btn" type="submit" value="">評価する</td></button>
        <a class="twitter-share-button" href="https://twitter.com/intent/tweet" data-size="small"><img src="../img/Twitter_Logo_Blue.png"></a>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script>
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="15px" data-layout="button" data-action="like" data-size="small" data-share="true">
      </div>
    </tr>
  </table>
</div>

<div class="post__table">
<table>
  <div class="point">
    <p class="star" id="star2"></p>
    <h2>2.18 </h2><h3>6件 </h3><i class="material-icons">sms</i>
  </div>
  
    <tr>
      <!-- <div class="date__table"> -->
        <td class="post__date__1" >投稿日　：</td>
        <td class="post__date__2" >2019/12/24</td>
    </tr>
    <tr>
    <!-- <div class="name__table"> -->
        <td class="post__title__1" >プラン名：</td>
        <td class="post__title__2" name="name"><a href="plan_edit.blade.php">ミッキーとふれあいプラン</a></td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr>
        <td class="post__title__1" >作成者名：</td>
        <td class="post__title__2" name="name">いまっぱ</td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr>
      <td colspan="2" align="center">
      <div class="sns_box" id="fb-root" >   
      <button class="send__btn" type="submit" value="">評価する</td></button>
        <a class="twitter-share-button" href="https://twitter.com/intent/tweet" data-size="small"><img src="../img/Twitter_Logo_Blue.png"></a>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script>
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="15px" data-layout="button" data-action="like" data-size="small" data-share="true">
      </div>
    </tr>
  </table>
</div>

<div class="post__table">
<table>
  <div class="point">
    <p class="star" id="star3"></p>
    <h2>3.82  </h2><h3>10件 </h3><i class="material-icons">sms</i>
  </div>
  
    <tr>
      <!-- <div class="date__table"> -->
        <td class="post__date__1" >投稿日　：</td>
        <td class="post__date__2" >2019/12/24</td>
    </tr>
    <tr>
    <!-- <div class="name__table"> -->
        <td class="post__title__1" >プラン名：</td>
        <td class="post__title__2" name="name"><a href="plan_edit.blade.php">家族団欒ほっこりプラン</a></td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr>
        <td class="post__title__1" >作成者名：</td>
        <td class="post__title__2" name="name">mayo</td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr>
      <td colspan="2" align="center">
      <div class="sns_box" id="fb-root" >   
      <button class="send__btn" type="submit" value="">評価する</td></button>
        <a class="twitter-share-button" href="https://twitter.com/intent/tweet" data-size="small"><img src="../img/Twitter_Logo_Blue.png"></a>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script>
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="15px" data-layout="button" data-action="like" data-size="small" data-share="true">
      </div>
    </tr>
  </table>
</div>

<div class="post__table">
<table>
  <div class="point">
    <p class="star" id="star4"></p>
    <h2>2.38  </h2><h3>3件 </h3><i class="material-icons">sms</i>
  </div>
  
    <tr>
      <!-- <div class="date__table"> -->
        <td class="post__date__1" >投稿日　：</td>
        <td class="post__date__2" >2019/12/24</td>
    </tr>
    <tr>
    <!-- <div class="name__table"> -->
        <td class="post__title__1" >プラン名：</td>
        <td class="post__title__2" name="name"><a href="plan_edit.blade.php">上野パンダプラン</a></td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr>
        <td class="post__title__1" >作成者名：</td>
        <td class="post__title__2" name="name">いまっぱ</td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr>
      <td colspan="2" align="center">
      <div class="sns_box" id="fb-root" >   
      <button class="send__btn" type="submit" value="">評価する</td></button>
        <a class="twitter-share-button" href="https://twitter.com/intent/tweet" data-size="small"><img src="../img/Twitter_Logo_Blue.png"></a>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script>
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="15px" data-layout="button" data-action="like" data-size="small" data-share="true">
      </div>
    </tr>
  </table>
</div>

<div class="post__table">
<table>
  <div class="point">
    <p class="star" id="star5"></p>
    <h2>1.00 </h2><h3>1件 </h3><i class="material-icons">sms</i>
  </div>
  
    <tr>
      <!-- <div class="date__table"> -->
        <td class="post__date__1" >投稿日　：</td>
        <td class="post__date__2" >2019/12/21</td>
    </tr>
    <tr>
    <!-- <div class="name__table"> -->
        <td class="post__title__1" >プラン名：</td>
        <td class="post__title__2" name="name"><a href="plan_edit.blade.php">自宅でまったりプラン</a></td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr>
        <td class="post__title__1" >作成者名：</td>
        <td class="post__title__2" name="name">いまっぱ</td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr>
      <td colspan="2" align="center">
      <div class="sns_box" id="fb-root" >   
      <button class="send__btn" type="submit" value="">評価する</td></button>
        <a class="twitter-share-button" href="https://twitter.com/intent/tweet" data-size="small"><img src="../img/Twitter_Logo_Blue.png"></a>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script>
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="15px" data-layout="button" data-action="like" data-size="small" data-share="true">
      </div>
    </tr>
  </table>
</div>

</div>
@include('footer')
</form>

<script>
  $(function raty() {
     $("#star1").raty({
          size: 14,
          starOff: '/img/star-off.png',
          starOn : '/img/star-on.png',
          number: 5,
          score : 3
     });
});
$(function raty() {
     $("#star2").raty({
          size: 14,
          starOff: '/img/star-off.png',
          starOn : '/img/star-on.png',
          number: 5,
          score : 3
     });
});
$(function raty() {
     $("#star3").raty({
          size: 14,
          starOff: '/img/star-off.png',
          starOn : '/img/star-on.png',
          number: 5,
          score : 3
     });
});
$(function raty() {
     $("#star4").raty({
          size: 14,
          starOff: '/img/star-off.png',
          starOn : '/img/star-on.png',
          number: 5,
          score : 3
     });
});
$(function raty() {
     $("#star5").raty({
          size: 14,
          starOff: '/img/star-off.png',
          starOn : '/img/star-on.png',
          number: 5,
          score : 3
     });
});
// $(function raty() {
//      $("#star5").raty({
//           size: 14,
//           starOff: '/img/star-off.png',
//           starOn : '/img/star-on.png',
//           number: 5,
//           score : 3
//      });
// });

//  $(function() {
//   $('#example1').barrating({
//     theme: 'fontawesome-stars'
//   });
// });
// $(function() {
//   $('#example2').barrating({
//     theme: 'fontawesome-stars'
//   });
// });
// $(function() {
//   $('#example3').barrating({
//     theme: 'fontawesome-stars'
//   });
// });
// $(function() {
//   $('#example4').barrating({
//     theme: 'fontawesome-stars'
//   });
// });
// $(function() {
//   $('#example5').barrating({
//     theme: 'fontawesome-stars'
//   });
// });
</script>
</body>
</html>


