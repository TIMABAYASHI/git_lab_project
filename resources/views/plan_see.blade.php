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
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyD74CM0lF1Nhh3DpGYjikYjToFLjq8Nwg8&libraries=places&language=ja"></script>
    <!-- Google fontsの読みこみ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="../../public/css/reset.css" />
    <link rel="stylesheet" href="../../public/css/plan_see.css" />
    <style>
      #map { height: 100%; width: 100%}
    </style>
    <title>プラン編集</title>
  </head>

<body onlord="start()">
  <div class="all__div">
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
    <div class="date">
    <input class="date__input" type="date" name="date" value="">
    </div>
    <div class="plan1">
    <div class="plan1__1">
      <input class="plan1__time__input" id="plan1_input" type="time" name="time" value="time">
      <input class="plan1__name" id="plan_name1"  placeholder="渋谷ハチ公前" value="渋谷">
      <button type="submit" id="mapButton"><i class="material-icons search">search</i></button>
      </div>
      <div class="plan1__2">
      <i class="material-icons arrow">arrow_downward</i>
      
      </div>
    </div>
    <div class="plan2">
    <div class="plan2__1">
      <input class="plan2__time__input" id="plan2_input" type="time" name="time" value="">
      <input class="plan2__name" id="plan_name2"  placeholder="渋谷キューズ" value="横浜">
      </div>

      <i class="material-icons arrow">arrow_downward</i>
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2546.2844507280543!2d139.70120916665005!3d35.659259029466334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x387c407b91e2ad68!2z5riL6LC344K544OI44Oq44O844Og!5e0!3m2!1sja!2sjp!4v1576648011338!5m2!1sja!2sjp" width="80%" height="100px" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
    </div>
    <div class="plan3">
      <div class="plan3__1">
        <input class="plan3__time__input" id="plan3_input"  type="time" name="time" value="">
        <input class="plan3__name" id="plan_name3" placeholder="道玄坂上">
      </div>
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1643.487476051775!2d139.70281100152394!3d35.65921445624524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b5850e5a83f%3A0x70297507b32efce5!2z5riL6LC344OS44Kr44Oq44Ko!5e0!3m2!1sja!2sjp!4v1576646652586!5m2!1sja!2sjp" width="80%" height="100px" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
    </div>
    <div class="plan4">
      <div class="plan4__1">
        <input class="plan4__time__input" id="plan4_input"  type="time" name="time" value="">
        <input class="plan4__name" id="plan_name4" placeholder="渋谷駅"></input>
      </div>
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1643.487476051775!2d139.70281100152394!3d35.65921445624524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b5850e5a83f%3A0x70297507b32efce5!2z5riL6LC344OS44Kr44Oq44Ko!5e0!3m2!1sja!2sjp!4v1576646652586!5m2!1sja!2sjp" width="80%" height="100px" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->
    </div>
    
  </div>
  <button class="plan__btn__send" type="submit" neme="send">これでOK!</button>  
</div>

<script>
window.onload = function (){
  let num = Math.floor( Math.random() * 3 );
  console.log(num);
      if(num == 0){
      $("#plan_name1").attr("placeholder","舞浜駅")
      $("#plan_name2").attr("placeholder","東京ディズニーランド")
      $("#plan_name3").attr("placeholder","オールデイダイニング カリフォルニア")
      $("#plan_name4").attr("placeholder","表参道駅")
    } if(num == 1){
      $("#plan_name1").attr("placeholder","上野駅")
      $("#plan_name2").attr("placeholder","上野動物園")
      $("#plan_name3").attr("placeholder","アメヤ横丁")
      $("#plan_name4").attr("placeholder","モリキュール")
    } if(num == 2){
      $("#plan_name1").attr("placeholder","渋谷ヒカリエ")
      $("#plan_name2").attr("placeholder","渋谷パルコ")
      $("#plan_name3").attr("placeholder","グリーングリル 渋谷店")
      $("#plan_name4").attr("placeholder","渋谷スクランブルスクエア")
    } if(num == 3){
      $("#plan_name1").attr("placeholder","自宅でゆっくり")
    } 
}
$("#search1").on("click",function(){
  console.log("ボタンを押したよ")
})
    // var MyLatLng = new google.maps.LatLng(35.6811673, 139.7670516);
    // var Options = {
    //   zoom: 13,             //地図の縮尺値
    //   center: MyLatLng,     //地図の中心座標
    //   mapTypeId: 'roadmap'  //地図の種類
    // };
    // var map = new google.maps.Map(document.getElementById('map'), Options);
  
//マップ検索ゾーン
var mapdiv = document.getElementById('map');
var directionsService = new google.maps.DirectionsService();
var directionsDisplay;

//オプション設定
var myOptions = {
    zoom: 17,
    center: new google.maps.LatLng(35.7102849, 139.77714030000004),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scaleControl: true,
};

//マップを描画
var map = new google.maps.Map(mapdiv, myOptions);
getPlace();

// let p1 = document.getElementById('plan_name1');
// let p2 = document.getElementById('plan_name2');
// let p3 = document.getElementById('plan_name3');
// let p4 = document.getElementById('plan_name4');
// let p5 = document.getElementById('plan_name5');

// let p1location = p1.value();
// console.log(p1location);


//入力１
function getPlace(){
    var mapSearch = document.getElementById('plan_name1');
    if(mapSearch.value){
        var service = new google.maps.places.PlacesService(map);
        var searchValue = mapSearch.value;
        var placeRequest = {
            query: searchValue, //入力したテキスト
        }
        // リクエストを送ってあげるとプライス情報を格納したオブジェクトを返してくれます。
        service.textSearch(placeRequest,function(results,status){
            var places = results[0];
            toGeocode(places);
            console.log(places);
            
        });
    } 
};

//入力２
// function getPlace(){
//     var mapSearch2 = document.getElementById('plan_name2');
//     if(mapSearch2.value){
//         var service2 = new google.maps.places.PlacesService(map);
//         var searchValue2 = mapSearch2.value;
//         var placeRequest2 = {
//             query: searchValue2, //入力したテキスト
//         }
//         // リクエストを送ってあげるとプライス情報を格納したオブジェクトを返してくれます。
//         service2.textSearch(placeRequest2,function(results,status){
//             var places2 = results[0];
//             toGeocode(places2);
//         });
//     } 
// };
// console.log(places2);

// var latlng2 = new google.maps.LatLng(places2.geometry.location.lat(),places2.geometry.location.lng());
// console.log(latlng2);

var request = {};
function toGeocode(places){
    //取得したplacesオブジェクトから緯度と経度をgeocodeとして渡します。
    var latlng = new google.maps.LatLng(places.geometry.location.lat(),places.geometry.location.lng());

    //ルート取得
    console.log(places.geometry.location.lat());
    console.log(places.geometry.location.lng());
    getRoute(latlng);
     
 request = {
        origin: latlng, //入力地点の緯度、経度
        destination: (35.6811673, 139.7670516), //到着地点の緯度、経度
        travelMode: google.maps.DirectionsTravelMode.WALKING //ルートの種類
    }
    console.log(request);
}    
console.log(request);
console.log(latlng);

//ルート描画用
function getRoute(latlng){
    var request = {
        origin: latlng, //入力地点の緯度、経度
        destination: (35.6811673, 139.7670516), //到着地点の緯度、経度
        travelMode: google.maps.DirectionsTravelMode.WALKING //ルートの種類
    }
    directionsService.route(request,function(result, status){
        toRender(result);
    });
}

function toRender(result){
    directionsDisplay = new google.maps.DirectionsRenderer();
    directionsDisplay.setDirections(result); //取得した情報をset
    directionsDisplay.setMap(map); //マップに描画
}



//参考URL
// https://blog.maromaro.co.jp/archives/5441

//ランダムで画像表示
// https://www.nxworld.net/tips/jquery-random-snippets.html

</script>

  </body>
</html>
