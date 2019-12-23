@extends('layouts.app')

@section('css')
{{-- この場所に画面毎のcssを記述する --}}    
<link rel="stylesheet" href="{{asset('/css/reset.css')}}" />
 <link rel="stylesheet" href="{{asset('/css/resist.css')}}" />
@endsection

@section('js')
{{-- この場所に画面毎のjsを記述する --}} 
<script src="{{asset('/js/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('/js/register.js')}}"></script>
@endsection


@section('content')
<div class="container">
    <div class="row" id="r1" style="visibility:visible;">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default panel-defaultb">
                <div class="panel-headingb">会員登録</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <!-- name -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- email -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- password -->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- pass確認 -->
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Password確認</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <!-- 生年月日 -->
                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-md-4 control-label">生年月日</label>
                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control" name="birthday" min="1970-01-01" max="1999-12-31" value="{{ old('birthday') }}" required autofocus>
                                @if ($errors->has('birthday'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('birthday') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- 血液型 -->
                        <div class="form-group">
                            <label for="bloodtype" class="col-md-4 col-form-label text-md-right">血液型</label>
                            <div class="col-md-6">
                                <input id="bloodtype" type="text" class="form-control{{ $errors->has('bloodtype') ? ' is-invalid' : '' }}" name="bloodtype" value="{{ old('bloodtype') }}" required>
                                @if ($errors->has('bloodtype'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bloodtype') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- nextボタン -->
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <p class="btn btn-primary btnsubmit" id="submit-r1">Next</p>        
                            </div>
                        </div>
            </div>

                    <!-- q1-q5 -->
                <div class="row2" id="r2" style="visibility:hidden;">
                    <h1 class="title">あなたはどっちのタイプ？</h1>
                    <h2 class="ask">直感で  お答えください！</h2>
                    <!-- <form class="form form2" action=".php" method="POST"> -->
                    <h2 class="question">第1問</h2>
                    <div class="q-container">
                        <input class="q-container__input" type="radio" name="q1" id="indoor" value="0" />
                        <label for="indoor" class="label">インドア派</label>
                        <input class="q-container__input" type="radio" name="q1" id="outdoor" value="1">
                        <label for="outdoor" class="label">アウトドア派</label>
                    </div>
                    <h2 class="question">第2問</h2>
                    <div class="q-container">
                        <input class="q-container__input" type="radio" name="q2" id="repeater" value="0">
                        <label for="repeater" class="label">リピーター</label>
                        <input class="q-container__input" type="radio" name="q2" id="innovator" value="1" />
                        <label for="innovator" class="label">ミーハー</label>
                    </div>
                    <h2 class="question">第3問</h2>
                    <div class="q-container">
                        <input class="q-container__input" type="radio" name="q3" id="listener" value="0" />
                        <label for="listener" class="label">聞き上手</label>
                        <input class="q-container__input" type="radio" name="q3" id="speaker" value="1">
                        <label for="speaker" class="label">話し上手</label>
                    </div>
                    <h2 class="question">第4問</h2>
                    <div class="q-container">
                        <input class="q-container__input" type="radio" name="q4" id="think" value="0" />
                        <label for="think" class="label">まず考える</label>
                        <input class="q-container__input" type="radio" name="q4" id="do" value="1">
                        <label for="do" class="label">行動が先</label>
                    </div>
                    <h2 class="question">第5問</h2>
                        <div class="q-container last">
                            <input class="q-container__input" type="radio" name="q5" id="smart" value="0" />
                            <label for="smart" class="label">頭脳で勝負</label>
                            <input class="q-container__input" type="radio" name="q5" id="warm" value="1">
                            <label for="warm" class="label">ハートでしょ</label>
                        </div>
                        <input class="form__input__btn" type="submit" name="send" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection