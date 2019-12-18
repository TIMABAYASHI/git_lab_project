<!-- プラン概要（みるだけ）ページ -->
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
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyD74CM0lF1Nhh3DpGYjikYjToFLjq8Nwg8&language=ja"></script>
    <!-- Google fontsの読みこみ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../public/css/reset.css" />
    <link rel="stylesheet" href="../../public/css/plan_see.css" />
    <style>
      #map { height: 100%; width: 100%}
    </style>
    <title>プラン編集</title>
  </head>

  <body onlord="start()">
    <div class="form-container">
      <h1 class="title">プラン編集</h1>
    </div>
    <div class="plan__edit">
    <h2 class="plan__title__h2">プラン名</h2>
    <input class="plan__title" type="text" name="title" value="">
    </div>
    <div class="form-container-photo" id="proposal_photo">

<div id="map"></div>
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2119.017552565542!2d139.70116603669882!3d35.659153900366896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b57efbd57c7%3A0x217e9d9fe306fba!2z5b-g54qs44OP44OB5YWs5YOP!5e0!3m2!1sja!2sjp!4v1576647952501!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
      <h3></h3>
        <!-- <img id="proposal_photo" src="../img/IMG_2518.JPG" /> -->
    </div>
    <div class="plan1">
    <div class="plan1__1">
      <input class="plan1__time__input" type="time" name="time" value="">
      <div class="plan1__name"><p id="plan__name1">渋谷ハチ公前待ち合わせ</p></div>
      </div>
      <div class="plan1__2">
      <i class="material-icons arrow">arrow_downward</i>
      
      </div>
    </div>
    <div class="plan2">
      <div class="plan2__1">
        <input class="plan2__time__input" type="time" name="time" value="">
        <div class="plan2__name"><form onsubmit="return false;">
        <input type="text" value="株式会社Maromaro" id="address">
  <button type="button" value="検索" id="map_button">検索</button>
</form></div>
      </div>
      <i class="material-icons">arrow_downward</i>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2546.2844507280543!2d139.70120916665005!3d35.659259029466334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x387c407b91e2ad68!2z5riL6LC344K544OI44Oq44O844Og!5e0!3m2!1sja!2sjp!4v1576648011338!5m2!1sja!2sjp" width="80%" height="100px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <div class="plan3">
      <div class="plan3__1">
        <input class="plan3__time__input" type="time" name="time" value="" placeholder="">
        <div class="plan3__name"><p id="plan__name3">渋谷ヒカリエ</p></div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1643.487476051775!2d139.70281100152394!3d35.65921445624524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b5850e5a83f%3A0x70297507b32efce5!2z5riL6LC344OS44Kr44Oq44Ko!5e0!3m2!1sja!2sjp!4v1576646652586!5m2!1sja!2sjp" width="80%" height="100px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
      
    <button class="plan__btn__send" type="submit" neme="send">これでOK!</button>  

    </div>

<script>

function start(){
  console.log(num);
  let num = Math.floor( Math.random() * 5 );
  return num;
}

//   let name1 = document.getElementById("plan__name1")
//   let name2 = document.getElementById("plan__name2")
//   let name3 = document.getElementById("plan__name3")
//   let name4 = document.getElementById("plan__name4")
//   if(num == 0){
//       neme1.innnerHTML = "<p>東京ディズニーランド</p>"
//     } if(num == 1){
//       neme1.innnerHTML = "<p>上野動物園</p>"
//     } if(num == 2){
//       neme1.innnerHTML = "<p>渋谷ヒカリエ</p>"
//     } if(num == 3){
//       neme1.innnerHTML = "<p>東京都美術館</p>"
//     } if(num == 4){
//       neme1.innnerHTML = "<p>自宅でゆっくり</p>"
//     }
//     if(num == 0){
//       neme1.innnerHTML = "<p>東京ディズニーランド</p>"
//     } if(num == 1){
//       neme1.innnerHTML = "<p>上野動物園</p>"
//     } if(num == 2){
//       neme1.innnerHTML = "<p>渋谷ヒカリエ</p>"
//     } if(num == 3){
//       neme1.innnerHTML = "<p>東京都美術館</p>"
//     } if(num == 4){
//       neme1.innnerHTML = "<p>自宅でゆっくり</p>"
//     }
// }
    var MyLatLng = new google.maps.LatLng(35.6811673, 139.7670516);
    var Options = {
      zoom: 13,             //地図の縮尺値
      center: MyLatLng,     //地図の中心座標
      mapTypeId: 'roadmap'  //地図の種類
    };
    var map = new google.maps.Map(document.getElementById('map'), Options);
</script>

  </body>
</html>
