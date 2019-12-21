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
     
    </style>
    <title>プラン編集</title>
  </head>

<body>


<div id="box">
  <button type="button" onclick="textcreate()">テキスト追加</button>
  <button type="button" onclick="textdelete()">テキスト削除</button>
  <button type="button" onclick="textcolorchange()">テキスト赤色</button>
  <button type="button" onclick="textchange()">テキスト書き換え</button>
</div>

<script>
var box = document.getElementById('box'),
    input = document.createElement('input'),
    placeholder = document.createTextNode("placeholder");

function textcreate() {
  box.appendChild(input).appendChild(placeholder);
}
function textdelete() {
  box.removeChild(p);
}
function textcolorchange() {
  p.style.color = "red";
}
function textchange() {
  p.textContent = "書き換えたテキストです";
}

</script>
</body>
</html>