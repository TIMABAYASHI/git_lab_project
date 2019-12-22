<!-- 登録後に来るページ。プランをどうするか選択するページ -->
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="{{asset('/js/jquery-2.1.3.min.js')}}"></script>
    <!-- fontawesomeの読み込み -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <!-- Google fontsの読みこみ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/plan.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}" />
    <title>プラン選択</title>
</head>

<body>
    <i class="material-icons back">
      keyboard_arrow_left
    </i>
    <h1 class="title">プラン編集</h1>
    <div class="form-container" id="proposal_photo">
      <h2>▼ 最初にオススメするのはこちら！ ▼</h2>
      <input id="plan_edit" placeholder=""></input>
    <div class="top_box" id="top_box">
    <a href="{{url('\plan_see')}}">
      <p class="coment">あなたの性格、年齢、住んでいる場所から<br>
                        診断したおすすめプラン</p>
                       
      <!-- <img id="proposal_photo" src="../img/IMG_2518.JPG" height="15vh" /> -->
    </div>
<h4>↑タップで詳細を確認できます</h4> </a>
        <p class="coment">AIによる診断＆提案を希望します</p>
        <button class="form__btn"><a href="{{url('\select')}}">AI診断へ</a></button>
        <p class="coment">過去の履歴のなどを確認できます</p>
        <button class="form__btn"><a href="{{url('\mypage')}}">Myページへ</a></button>
        <p class="coment">他の人のプランを閲覧できます</p>
        <button class="form__btn"><a href="{{url('\plan_post')}}">投稿ページへ</a></button>
        <div class="footer">
            <i class="material-icons menu">
        subject
      </i>

            <i class="material-icons">
        publish
      </i>
            <i class="material-icons">
        map
      </i>
            <i class="material-icons myPage">
        perm_identity
      </i>
        </div>
        @include('footer')
<script>
window.onload = function (){
  let num = Math.floor( Math.random() * 4 );
  console.log(num);
    //  let func = function(){ 
      if(num == 0){
      $("#plan_edit").attr("placeholder","ミッキーとふれあいプラン")
      $("#plan_name1").attr("placeholder","舞浜駅")
      $("#plan_name2").attr("placeholder","東京ディズニーランド")
      $("#plan_name3").attr("placeholder","オールデイダイニング カリフォルニア")
      $("#plan_name4").attr("placeholder","表参道駅")
      $("#top_box").css("background-image","url('/img/p_disney.jpg')")
    } if(num == 1){
      $("#plan_edit").val("上野満喫パンダプラン")
      $("#plan_name1").val("上野駅")
      $("#plan_name2").val("上野動物園")
      $("#plan_name3").val("アメヤ横丁")
      $("#plan_name4").val("モリキュール")
      $("#plan_edit").val("上野満喫パンダプラン")
      $("#plan_name1").attr("placeholder","上野駅")
      $("#plan_name2").attr("placeholder","上野動物園")
      $("#plan_name3").attr("placeholder","アメヤ横丁")
      $("#plan_name4").attr("placeholder","モリキュール")
      $("#top_box").css("background-image","url('/img/ueno.jpg')")
    } if(num == 2){
      $("#plan_edit").val("渋谷最先端技術体験ツアー")
      $("#plan_name1").val("渋谷ヒカリエ")
      $("#plan_name2").val("渋谷パルコ")
      $("#plan_name3").val("グリーングリル 渋谷店")
      $("#plan_name4").val("渋谷スクランブルスクエア")
      $("#plan_edit").val("渋谷最先端技術体験ツアー")
      $("#plan_name1").attr("placeholder","渋谷ヒカリエ")
      $("#plan_name2").attr("placeholder","渋谷パルコ")
      $("#plan_name3").attr("placeholder","グリーングリル 渋谷店")
      $("#plan_name4").attr("placeholder","渋谷スクランブルスクエア")
      $("#top_box").css("background-image","url('/img/p_shibuya.jpg')")
    } if(num == 3){
      $("#plan_edit").val("自宅でまったりプラン")
      $("#plan_name1").attr("placeholder","自宅でゆっくり")
    } 
  }

</script>
</body>
</html>