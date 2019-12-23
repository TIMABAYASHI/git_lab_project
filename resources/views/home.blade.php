<!-- main.blade.phpにあたるページ -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ログインしました！</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <i class="material-icons back">
                        keyboard_arrow_left
                        </i>
                        <h1 class="title">デートプラン選択</h1>
                        <p class="comment__p">AIが分析したあなたにオススメのコース例</p>
                        <div class="form-container" id="proposal_photo">
                            <img id="proposal_photo" src="../img/IMG_2518.JPG" />
                        </div>
                        <p class="comment__p_1">AIがあなたに合ったプランを提案します</p>
                        <button class="form__btn"><a href="{{ url('/select') }}">プラン選択</a></button>
                        <p class="comment__p_2">過去のプラン履歴やお気に入りを確認できます</p>
                        <button class="form__btn"><a href="{{ url('/mypage') }}">Myページへ</a></button>
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
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
