<?PHP
    $file_name = "toukou_2.txt"; /*読込ファイルの指定*/
    $ret_array = file( $file_name ); /*ファイルを全て配列に入れる*/
    for( $i = 0; $i < count($ret_array); ++$i ) { /*行末までループする*/

        echo( $ret_array[$i] . "<br />\n" ); /*配列を順番に表示する*/

    }
    ?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>keisiban</title>
    <!-- Fonts -->
    <script src="../../public/js/jquery-2.1.3.min.js"></script>
    <!-- fontawesomeの読み込み -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <!-- Google fontsの読みこみ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../../public/css/reset.css" />
    <link rel="stylesheet" href="../../public/css/board.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
<div class="title">
  <h1>掲示板投稿</h1>
</div>

<form action="toukou_1.blade.php" method="post"> <!--ファイル、methodの指定-->

<div class="post__table">
  <table>
    <tr>
      <td class="post__title__1" >プラン名：</td>
      <td class="post__title__2" name="name">渋谷AR体験デートプラン<?=$title?></td>
      <!-- <td><input type="text" name="name" required></td> 名前の入力フォーム作成 -->
    </tr>
    <tr>
      <td>コメント:</td>
      <td><input type="text" name="comment" required></td> <!--コメント入力フォーム作成-->
    </tr>
      <td colspan="2" align="center">
      <input type="submit" value="送信"> <!--送信ボタン作成-->
    </tr>
  </table>
</div>
</form>
</body>
</html>