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
    <!-- fontawesomeの読み込み -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <!-- Google fontsの読みこみ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/board.css')}}" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/fontawesome-stars.css"/ rel="stylesheet">
    <script src="js/jquery.barrating.min.js"></script>
  </head>

<body>
<div class="title">
  <h1>掲 示 板</h1>
</div>

<div class="all__div">

<!-- <form action="toukou_1.blade.php" method="post">  -->

<div class="post__table">
    <select id="example1">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  <table>
    <tr>
      <div class="date__table">
        <td class="post__date__1" >投稿日　：</td>
        <td class="post__date__2" >2019/12/24</td>
      </div>
    </tr>
    <tr class="name__table">
        <td class="post__title__1" >プラン名：</td>
        <td class="post__title__2" name="name"><a href="plan_edit.blade.php">ミッキーとふれあいプラン</a></td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr class="name__table">
        <td class="post__title__1" >作成者名：</td>
        <td class="post__title__2" name="name">いまっぱ</td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>

    <tr>
      <td>コメント:</td>
      <td><input type="text" name="comment" required></td> <!--コメント入力フォーム作成-->
    </tr>
      <td colspan="2" align="center">
      
      <div class="sns_box" id="fb-root" >
      <input class="send__btn" type="submit" value="投稿する"> 
        <a class="twitter-share-button" href="https://twitter.com/intent/tweet" data-size="small"><img src="../img/Twitter_Logo_Blue.png"></a>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script>
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="15px" data-layout="button" data-action="like" data-size="small" data-share="true">
      </div>
    </tr>
  </table>
</div>
<div class="post__table">
    <select id="example2">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  <table>
    <tr>
      <div class="date__table">
        <td class="post__date__1" >投稿日　：</td>
        <td class="post__date__2" ></td>
      </div>
    </tr>
    <tr class="name__table">
        <td class="post__title__1" >プラン名：</td>
        <td class="post__title__2" name="name"><a href="plan_edit.blade.php"></a></td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr class="name__table">
        <td class="post__title__1" >作成者名：</td>
        <td class="post__title__2" name="name"></td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>

    <tr>
      <td>コメント:</td>
      <td><input type="text" name="comment" required></td> <!--コメント入力フォーム作成-->
    </tr>
    
      <td colspan="2" align="center">
      
      <div class="sns_box" id="fb-root" >
      <input class="send__btn" type="submit" value="投稿する">
        <!-- <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a> -->
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <a class="twitter-share-button" href="https://twitter.com/intent/tweet" data-size="small"></a>
        <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script> -->
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="15px" data-layout="button" data-action="like" data-size="small" data-share="true">
      </div>
    </tr>
  </table>
</div>
<div class="post__table">
    <select id="example3">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  <table>
    <tr>
      <div class="date__table">
        <td class="post__date__1" >投稿日　：</td>
        <td class="post__date__2" ></td>
      </div>
    </tr>
    <tr class="name__table">
        <td class="post__title__1" >プラン名：</td>
        <td class="post__title__2" name="name"><a href="plan_edit.blade.php"></a></td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr class="name__table">
        <td class="post__title__1" >作成者名：</td>
        <td class="post__title__2" name="name"></td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr>
      <td>コメント:</td>
      <td><input type="text" name="comment" required></td> <!--コメント入力フォーム作成-->
      <td colspan="2" align="center">
      
      <div class="sns_box" id="fb-root" >
      <input class="send__btn" type="submit" value="投稿する">
        <!-- <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a> -->
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <a class="twitter-share-button" href="https://twitter.com/intent/tweet" data-size="small"></a>
        <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script> -->
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="15px" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
      </div>
    </tr>
  </table>
</div>
  <div class="post__table">
    <select id="example4">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  <table>
    <tr>
      <div class="date__table">
        <td class="post__date__1" >投稿日　：</td>
        <td class="post__date__2" ></td>
      </div>
    </tr>
    <tr class="name__table">
        <td class="post__title__1" >プラン名：</td>
        <td class="post__title__2" name="name"><a href="plan_edit.blade.php"></a></td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr class="name__table">
        <td class="post__title__1" >作成者名：</td>
        <td class="post__title__2" name="name"></td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr>
      <td>コメント:</td>
      <td><input type="text" name="comment" required></td> <!--コメント入力フォーム作成-->
    </tr>
      <td colspan="2" align="center">
      
      <div class="sns_box" id="fb-root" >
      <input class="send__btn" type="submit" value="投稿する">
        <!-- <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a> -->
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <a class="twitter-share-button" href="https://twitter.com/intent/tweet" data-size="small"></a>
        <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script> -->
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="15px" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
      </div>
    </tr>
  </table>
  </div>
</div>
@include('footer')
</form>

<script>
 $(function() {
  $('#example1').barrating({
    theme: 'fontawesome-stars'
  });
});
$(function() {
  $('#example2').barrating({
    theme: 'fontawesome-stars'
  });
});
$(function() {
  $('#example3').barrating({
    theme: 'fontawesome-stars'
  });
});
$(function() {
  $('#example4').barrating({
    theme: 'fontawesome-stars'
  });
});
// $(function() {
//   $('#example5').barrating({
//     theme: 'fontawesome-stars'
//   });
// });
</script>
</body>
</html>