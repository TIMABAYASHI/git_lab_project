<!-- 絞り込み検索画面 -->
<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="{{asset('/js/jquery-2.1.3.min.js')}}"></script>
    <!-- fontawesomeの読み込み -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
    <!-- Google fontsの読みこみ -->
    <link
      href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap"
      rel="stylesheet"
    />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

    <link rel="stylesheet" href="{{asset('/css/reset.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/select.css')}}" />
    <title>select</title>
  </head>

  <body>
    <div class="container">
      <div class="form-container">
        <!-- <div class="counter"> -->
            <ul class=list>
                <li><i class="material-icons list--now" id="number6" >looks_one</i></li>
                <li><i class="material-icons list--next" id="number7" >looks_two</i></li>
                <li><i class="material-icons list--next" id="number8">looks_3</i></li>
                <li><i class="material-icons list--next" id="number9">looks_4</i></li>
                <li><i class="material-icons list--next" id="number10">looks_5</i></li>
            </ul> 
          <h1 class="title">どっちの気分？</h1>
        <form class="form" method="POST">
        {{ csrf_field() }}
        <!--  q6 -->
          <div class="radio-tile-group" id="question6" style="visibility:visible;" >
            <div class="input-container">
              <input id="down" class="radio-button" type="radio" name="q6" value="0" />
              <div class="radio-tile">
                <div class="icon">
                  <i class="material-icons list--now">house</i>
                </div>
                <label for="down" class="radio-tile-label">チル</label>
              </div>
            </div>

            <div class="input-container">
              <input id="active" class="radio-button" type="radio" name="q6" value="1" />
              <div class="radio-tile">
                <div class="icon">
                  <i class="material-icons list--now" >directions_run</i>
                </div>
                <label for="active" class="radio-tile-label">アクティブ</label>
              </div>
            </div>
                      <p class="form__btn" id="submit6">Next</p>        

          </div>

          <!--  q7 -->
          <div class="radio-tile-group" id="question7" style="visibility:hidden;" >
            <div class="input-container">
              <input id="saving" class="radio-button" type="radio" name="q7" value="0" />
              <div class="radio-tile">
                <div class="icon">
                  <i class="material-icons list--now">attach_money</i>
              </div>
              <label for="saving" class="radio-tile-label">節約！</label>
            </div>
          </div>
          
          <div class="input-container">
            <input id="rich" class="radio-button" type="radio" name="q7" value="1" />
            <div class="radio-tile">
              <div class="icon">
                <i class="material-icons list--now" >music_note</i>
              </div>
              <label for="rich" class="radio-tile-label">パーっと</label>
            </div>
          </div>
          <p class="form__btn" id="submit7">Next</p>        
        </div>
        
        <!--  q8 -->
        <div class="radio-tile-group" id="question8" style="visibility:hidden;" >
          <div class="input-container">
            <input id="japanese" class="radio-button" type="radio" name="q8" value="0" />
            <div class="radio-tile">
              <div class="icon">
                <i class="material-icons list--now">compass_calibration</i>
              </div>
              <label for="japanese" class="radio-tile-label">和食</label>
            </div>
          </div>
          
          <div class="input-container">
            <input id="western" class="radio-button" type="radio" name="q8" value="1" />
            <div class="radio-tile">
              <div class="icon">
                <i class="material-icons list--now" >restaurant</i>
              </div>
              <label for="western" class="radio-tile-label">洋食</label>
            </div>
          </div>
          <p class="form__btn" id="submit8">Next</p>        
        </div>
        
        <!--  q9 -->
        <div class="radio-tile-group" id="question9" style="visibility:hidden;" >
          <div class="input-container">
            <input id="study" class="radio-button" type="radio" name="q9" value="0" />
            <div class="radio-tile">
              <div class="icon">
                <i class="material-icons list--now">museum</i>
              </div>
              <label for="study" class="radio-tile-label">学ぶ</label>
            </div>
          </div>

          <div class="input-container">
            <input id="play" class="radio-button" type="radio" name="q9" value="1" />
            <div class="radio-tile">
              <div class="icon">
                <i class="material-icons list--now" >motorcycle</i>
              </div>
              <label for="play" class="radio-tile-label">遊ぶ</label>
            </div>
          </div>
          <p class="form__btn" id="submit9">Next</p>        
        </div>
        
        <!--  q10 -->
        <div class="radio-tile-group" id="question10" style="visibility:hidden;" >
          <div class="input-container">
            <input id="trend" class="radio-button" type="radio" name="q10" value="0" />
            <div class="radio-tile">
              <div class="icon">
                <i class="material-icons list--now">trending_up</i>
              </div>
              <label for="trend" class="radio-tile-label">新しさ</label>
            </div>
          </div>

          <div class="input-container">
            <input id="tradition" class="radio-button" type="radio" name="q10" value="1" />
            <div class="radio-tile">
              <div class="icon">
                <i class="material-icons list--now" >trending_flat</i>
              </div>
              <label for="tradition" class="radio-tile-label">伝統的</label>
            </div>
          </div>
          <a class="form__btn form__btn--checkit" href="{{url('plan_see')}}">Check it!</a>        
          <!-- <button class="form__btn form__btn--checkit"><a href="{{ url('/plan_see') }}">Check it!!</a><button> -->
        </div>
        
      </form>
    </div>
    </div>
  </div>
    @include('footer')
    <div id="answer6"></div>
  

<script>

  // q6
    $("#submit6").on("click",function(){
    $("#question6").css("visibility","hidden");
    $("#question6").css("z-index","2");
    $("#question7").css("visibility","visible");
    $("#question7").css("z-index","3");
    $("#number6").removeClass('list--now');
    $("#number6").addClass('list--next');
    $("#number7").removeClass('list--next');
    $("#number7").addClass('list--now');
    });

  // q7
    $("#submit7").on("click",function(){
    $("#question7").css("visibility","hidden");
    $("#question7").css("z-index","2");
    $("#question8").css("visibility","visible");
    $("#question8").css("z-index","3");
    $("#number7").removeClass('list--now');
    $("#number7").addClass('list--next');
    $("#number8").removeClass('list--next');
    $("#number8").addClass('list--now');
    });
    
    // q8
      $("#submit8").on("click",function(){
      $("#question8").css("visibility","hidden");
      $("#question8").css("z-index","2");
      $("#question9").css("visibility","visible");
      $("#question9").css("z-index","3");
      $("#number8").removeClass('list--now');
      $("#number8").addClass('list--next');
      $("#number9").removeClass('list--next');
      $("#number9").addClass('list--now');
      });

    // q9
      $("#submit9").on("click",function(){
      $("#question9").css("visibility","hidden");
      $("#question9").css("z-index","2");
      $("#question10").css("visibility","visible");
      $("#question10").css("z-index","3");
      $("#number9").removeClass('list--now');
      $("#number9").addClass('list--next');
      $("#number10").removeClass('list--next');
      $("#number10").addClass('list--now');
      });


//     var element6 = document.getElementById( "question6" ) ;
//     var answer6 = document.getElementById( "answer6" ) ;
// // 選択状態の値を取得
// for ( var a="", i=element6.length; i--; ) {
// 	if ( element6[i].checked ) {
// 		var a = element6[i].value ;
// console.log(a);
//     answer6.val(a);

// 		break ;
// 	}
// }


</script>
</body>
</html>
