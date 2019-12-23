@extends('layouts.app')

@section('css')
{{-- この場所に画面毎のcssを記述する --}}    
<link rel="stylesheet" href="{{asset('/css/reset.css')}}" />
 <link rel="stylesheet" href="{{asset('/css/resist.css')}}" />
@endsection

@section('content')

<!DOCTYPE html>
<html lang="jp">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default panel-defaultb">
    <script src="{{('/js/jquery-2.1.3.min.js')}}"></script>
    <!-- fontawesomeの読み込み -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <!-- Google fontsの読みこみ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Arapey|Mansalva|Nothing+You+Could+Do|Noto+Serif+JP|Shadows+Into+Light|Ubuntu&display=swap" rel="stylesheet" />
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <title></title>
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
                        <div class="form-group row">
                            <label for="bloodtype" class="col-md-4 col-form-label text-md-right">ち</label>
                            <div class="col-md-6">
                                <input id="bloodtype" type="text" class="form-control{{ $errors->has('bloodtype') ? ' is-invalid' : '' }}" name="bloodtype" value="{{ old('bloodtype') }}" required>
                                @if ($errors->has('bloodtype'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bloodtype') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btnsubmit">
                                    Submit
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
