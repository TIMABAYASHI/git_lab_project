@extends('layouts.app')

@section('css')
{{-- この場所に画面毎のcssを記述する --}}    
<link rel="stylesheet" href="{{asset('/css/reset.css')}}" />
 <link rel="stylesheet" href="{{asset('/css/resist.css')}}" />
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default panel-defaultb">
                <div class="panel-headingb">会員登録</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

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

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Password確認</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        
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
                        
                        <div class="form-group{{ $errors->has('bloodtype') ? ' has-error' : '' }}">
                            <label for="bloodtype" class="col-md-4 control-label">血液型</label>
                            <div class="col-md-6">
                                <!-- <input id="bloodtype" type="text" class="form-control" name="bloodtype" value="{{ old('bloodtype') }}" required autofocus> -->
                                        <select class="form-control" name="bloodtype" id="bloodtype" value="{{ old('bloodtype') }}" required autofocus>
            <option class="plcholder" value='' disabled selected style='display:none;'></option>
            <option value="A">A型</option>
            <option value="O">O型</option>
            <option value="B">B型</option>
            <option value="AB">AB型</option>
        </select>          

                                @if ($errors->has('bloodtype'))
                                <span class="help-block">
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
