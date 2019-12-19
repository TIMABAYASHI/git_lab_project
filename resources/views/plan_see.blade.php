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
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyD74CM0lF1Nhh3DpGYjikYjToFLjq8Nwg8&libraries=places&language=ja"></script>
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
  
    <div class="form-container">
      <h1 class="title">プラン編集</h1>
    </div>
    <!-- <form action=".php" method="POST"> -->
    <div class="plan__edit">
    <h2 class="plan__title__h2" id="plan_edit">プラン名</h2>
    <input class="plan__title" type="text" name="title" value="">
    </div>
  
    <div class="form-container-photo" id="proposal_photo">

    <div id="map"></div>
      <h3></h3>
    
    </div>
  <div class="all__div">
    <div class="date">
    <input class="date__input" type="date" name="date" value="">
    </div>
    <div class="plan1">
    <div class="plan1__1">
      <input class="plan1__time__input" id="plan1_input" type="time" name="time" value="time">
      <input class="plan1__name" id="plan_name1"  placeholder="" value="">
      <button type="submit" id="mapButton1"><i class="material-icons search">search</i></button>
      </div>
      <div class="plan1__2">
      <i class="material-icons arrow">arrow_downward</i>
      <button id="route1" onclick="toRender()">経路検索</button>
      </div>
    </div>
    <div class="plan2">
    <div class="plan2__1">
      <input class="plan2__time__input" id="plan2_input" type="time" name="time" value="">
      <input class="plan2__name" id="plan_name2"  placeholder="" value="">
      <button type="submit" id="mapButton2"><i class="material-icons search">search</i></button>  
    </div>  
      <i class="material-icons arrow">arrow_downward</i>
      <button id="route2" onclick="toRender()">経路検索</button>
    </div>
    <div class="plan3">
      <div class="plan3__1">
        <input class="plan3__time__input" id="plan3_input"  type="time" name="time" value="">
        <input class="plan3__name" id="plan_name3" placeholder="" value="">
        <button type="submit" id="mapButton3"><i class="material-icons search">search</i></button>
      </div>
      <i class="material-icons arrow">arrow_downward</i>
      <button id="route3" onclick="toRender()">経路検索</button>
    </div>
    <div class="plan4">
      <div class="plan4__1">
        <input class="plan4__time__input" id="plan4_input"  type="time" name="time" value="">
        <input class="plan4__name" id="plan_name4" placeholder="" value=""></input>
        <button type="submit" id="mapButton4"><i class="material-icons search">search</i></button>
    </div>
    </div>
  
  <!-- 折り畳み展開ポインタ -->
<div class="open__box" onclick="obj=document.getElementById('open').style; obj.display=(obj.display=='none')?'block':'none';">
<i class="material-icons add">

<a style="cursor:pointer;">add</a></i>
</div>
<!--// 折り畳み展開ポインタ -->

<!-- 折り畳まれ部分 -->
<div id="open" style="display:none;clear:both;">

<!--ここの部分が折りたたまれる＆展開される部分になります。
自由に記述してください。-->
<div class="plan5">
      <div class="plan5__1">
        <input class="plan5__time__input" id="plan5_input"  type="time" name="time" value="">
        <input class="plan5__name" id="plan_name5" placeholder="" value=""></input>
      </div>
      <button type="submit" id="mapButton5"><i class="material-icons search">search</i></button>
    </div>
  </div>
</div>
</div>
<!--// 折り畳まれ部分 -->
</div>
  <div class="bottom">
    <button class="plan__btn__send" type="submit" neme="send">これでOK!</button>
  </div> 
      <!-- </form> -->

<script>
  // $("#plan_edit").on("click",function(){
window.onload = function (){
  let num = Math.floor( Math.random() * 3 );
  console.log(num);
    //  let func = function(){ 
      if(num == 0){
      $("#plan_name1").val("舞浜駅")
      $("#plan_name2").val("東京ディズニーランド")
      $("#plan_name3").val("オールデイダイニング カリフォルニア")
      $("#plan_name4").val("表参道駅")
      $("#plan_name1").attr("placeholder","舞浜駅")
      $("#plan_name2").attr("placeholder","東京ディズニーランド")
      $("#plan_name3").attr("placeholder","オールデイダイニング カリフォルニア")
      $("#plan_name4").attr("placeholder","表参道駅")
     
    } if(num == 1){
      $("#plan_name1").val("上野駅")
      $("#plan_name2").val("上野動物園")
      $("#plan_name3").val("アメヤ横丁")
      $("#plan_name4").val("モリキュール")
      $("#plan_name1").attr("placeholder","上野駅")
      $("#plan_name2").attr("placeholder","上野動物園")
      $("#plan_name3").attr("placeholder","アメヤ横丁")
      $("#plan_name4").attr("placeholder","モリキュール")
      
    } if(num == 2){
      $("#plan_name1").val("渋谷ヒカリエ")
      $("#plan_name2").val("渋谷パルコ")
      $("#plan_name3").val("グリーングリル 渋谷店")
      $("#plan_name4").val("渋谷スクランブルスクエア")
      $("#plan_name1").attr("placeholder","渋谷ヒカリエ")
      $("#plan_name2").attr("placeholder","渋谷パルコ")
      $("#plan_name3").attr("placeholder","グリーングリル 渋谷店")
      $("#plan_name4").attr("placeholder","渋谷スクランブルスクエア")
    } if(num == 3){
      $("#plan_name1").attr("placeholder","自宅でゆっくり")
    } 
  }
// }
// setTimeout(,2000)
    var btn1 = $('#plan_name1').val();
    var btn2 = $('#plan_name2').val();
    var btn3 = $('#plan_name3').val();
    var btn4 = $('#plan_name4').val();
    console.log(btn1);
    console.log(btn2);
    console.log(btn3);
    console.log(btn4);

$("#mapButton1").on("click",function(){
  console.log("ボタンを押したよ")
})

//valueが取れるか確認
$("#mapButton1").on("click",function(){
  console.log($('#plan_name1').val())
})
$("#mapButton2").on("click",function(){
  console.log($('#plan_name2').val())
})
$("#mapButton3").on("click",function(){
  console.log($('#plan_name3').val())
})
$("#mapButton4").on("click",function(){
  console.log($('#plan_name4').val())
})


//位置情報を取得する

// function test() {
//     navigator.geolocation.getCurrentPosition();
// }



//地点検索

// ボタンに指定したid要素を取得
// var button = document.getElementById("button");

// ボタンが押された時の処理
// button.onclick = function() {
//   // フォームに入力された住所情報を取得
//   var address = document.getElementById("address").value;
//   // 取得した住所を引数に指定してcodeAddress()関数を実行
//   codeAddress(address);
// }


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
    zoom: 10,
    center: new google.maps.LatLng(35.7102849, 139.77714030000004),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scaleControl: true,
};

//マップを描画
var map = new google.maps.Map(mapdiv, myOptions);
getPlace();

//入力１
function getPlace(){
    var mapSearch = document.getElementById('plan_name1');
    var mapSearch2 = document.getElementById('plan_name2');
    if(mapSearch.value && mapSearch2.value ){
        var service = new google.maps.places.PlacesService(map);
        var searchValue = mapSearch.value;
        var searchValue2 = mapSearch2.value;
        var placeRequest = {
            query: searchValue, //入力したテキスト
        }
        var placeRequest2 = {
            query: searchValue2, //入力したテキスト
        }
        console.log(placeRequest,placeRequest2)
        // リクエストを送ってあげるとプライス情報を格納したオブジェクトを返してくれます。
        
        // const promise = new Promise((resolve, reject) => {
        //     const xhr = new XMLHttpRequest();
        //     xhr.open('GET', 'foo.txt');
        //     xhr.addEventListener('load', (e) => resolve(xhr.responseText));
        //     xhr.send();
        // });

        // promise.then((response) => console.log(response));

        const textSearch1 = new Promise((resolve, reject) => {
          service.textSearch(placeRequest,(results,status) => {
            console.log(results[0])
            resolve(results[0]);
          });
        });

        const textSearch2 = new Promise((resolve, reject) => {
          service.textSearch(placeRequest2,(results,status) => {
            console.log(results[0])
            resolve(results[0]);
          });
        });

        // service.textSearch(placeRequest,(results,status) => {
        //     var places = results[0];
        //     console.log(results[0]);
        // });
        // service.textSearch(placeRequest2,function(results,status){
        //     var places2 = results[0];     
        //     console.log(places2);
        // });
      
        textSearch1.then((response) => {
          console.log(`これがレスポンス`, response)
          var places = response

          textSearch2.then((response1) => {
            console.log(`これがレスポンス2`, response1)
            var places2 = response1
            toGeocode(places,places2);
          })
        });

       
        // console.log(places);
        // console.log(places2);
        // toGeocode(places,places2);
    } 
};

var request = {};
var latlng = {};

function toGeocode (places,places2){
      latlng = new google.maps.LatLng(places.geometry.location.lat(),places.geometry.location.lng());
      latlng2 = new google.maps.LatLng(places2.geometry.location.lat(),places2.geometry.location.lng());
      //ルート取得
      console.log(places.geometry.location.lat());
      console.log(places.geometry.location.lng());
      console.log(latlng);
      getRoute(latlng, latlng2);

      request = {
        origin: latlng, //入力地点の緯度、経度
        destination: latlng2, //到着地点の緯度、経度
        travelMode: google.maps.DirectionsTravelMode.WALKING //ルートの種類
      }
      console.log(request);
}

function getRoute(latlng,latlng2){
  var request = {
    origin: latlng, //入力地点の緯度、経度
    destination: latlng2, //到着地点の緯度、経度
    travelMode: google.maps.DirectionsTravelMode.WALKING //ルートの種類
  }
  console.log('ああああ');
  directionsService.route(request,function(result, status){
    console.log('dekow')
    toRender(result);
  });
}


var fetchSomething1 = function (){
    //取得したplacesオブジェクトから緯度と経度をgeocodeとして渡します。
    return new Promise(function(resolve,reject){
    
});
}
// console.log(request);
// console.log(latlng);

//ルート描画用
fetchSomething1().then();

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