<?php
// session_start();
// include("funcs1.php");
// chkSsid();
// $pdo = db_conn();

// // $life_flg = $_POST["life_flg"];

// //２．データ登録SQL作成
// $stmt = $pdo->prepare("SELECT * FROM plans");
// $status = $stmt->execute();

// $view="";
// if($status==false) {
//   sql_error($stmt);
// }else{
//   while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){
//     $view .= '<p>';
//     $view .= '<a href="plan_see.blade.php?id='.$r["id"].'">';
//     $view .= "<tr>"."<td>".$r["date"]."</td>"."<td>".$r["name"]."</td>"."<td>".$r["time"]."</td>"."<td>".$r["place"]."<td>".'<img src="upload/'.$r["photo"].'"width="100">'."</<td>"."<br>";
//     $view .= '</a> ';
//     // if($_SESSION["kanri_flg"]=="1"){
//     //   $view .= "<td>".'<a href="delete2.php?id='.$r["id"].'">';
//     //   $view .= "[削除]";
//     //   $view .= '</a></td></tr>';
//     //   $view .= '</p>';
//     // }
//     $view .= '</img>';
//   }
// }
?>

<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="../../public/js/jquery-2.1.3.min.js"></script>
    <!-- fontawesomeの読み込み -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
    <!-- Google mapの読みこみ -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyD74CM0lF1Nhh3DpGYjikYjToFLjq8Nwg8&libraries=places&language=ja"></script>
    <!-- Google fontsの読みこみ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../../public/css/reset.css" />
    <link rel="stylesheet" href="../../public/css/plan_post.css" />
    <style>
      /* #map { height: 100%; width: 100%} */
    </style>
    <title>プラン確認</title>
  </head>

<body>


<!-- <table id="gameList">
    <tr>
        <th>日付</th>
        <th>大会名</th>
        <th>対戦カード</th>
        <th>スタジアム名</th>
        <th>天気</th>
        <th>映像</th>
    </tr>
    <div class="container jumbotron"><?=$view?></div>
</table> -->


<div class="form-container">
      <h1 class="title">プラン確認</h1>
    </div>
    <!-- <form action=".php" method="POST"> -->
    <div class="plan__edit">
    <h2 class="plan__title__h2" id="plan_edit">プラン名</h2>
    <p class="plan__title" type="text" name="title" value=""><?=$name?></p>
    </div>
  
  <div class="all__div">
    <div class="date">
    <input class="date__input" type="date" name="date" value="">
    </div>
    <div class="plan1">
    <div class="plan1__1">
      <input class="plan1__time__input" id="plan1_input" type="time" name="time" value="<?$time?>">
      <p class="plan1__name" id="plan_name1"  placeholder="" value=""><?=$place?></input>
      
      </div>
      <div class="plan1__2">
      <i class="material-icons arrow">arrow_downward</i>
      <!-- <button id="route1" onclick="toRender()">経路検索</button> -->
      </div>
    </div>
    <div class="plan2">
    <div class="plan2__1">
      <input class="plan2__time__input" id="plan2_input" type="time" name="time" value="<?=$time?>">
      <p class="plan2__name" id="plan_name2"  placeholder="" value=""><?=$place?></p>
      
    </div>  
      <i class="material-icons arrow">arrow_downward</i>
      <!-- <button id="route2" onclick="toRender()">経路検索</button> -->
    </div>
    <div class="plan3">
      <div class="plan3__1">
        <input class="plan3__time__input" id="plan3_input"  type="time" name="time" value="<?=$time?>">
        <p class="plan3__name" id="plan_name3" placeholder="" value=""><?=$place?></p>
        
      </div>
      <i class="material-icons arrow">arrow_downward</i>
      <!-- <button id="route3" onclick="toRender()">経路検索</button> -->
    </div>
    <div class="plan4">
      <div class="plan4__1">
        <input class="plan4__time__input" id="plan4_input"  type="time" name="time" value="">
        <input class="plan4__name" id="plan_name4" placeholder="" value=""></input>
    </div>
    </div>
<div class="bottom">
    <button class="plan__btn__send" type="submit" name="send">このプランを共有する</button>
    <button class="plan__btn__back" name="back"><a href="./plan_see.blade.php">考え直す</a></button>
</div> 



</body>