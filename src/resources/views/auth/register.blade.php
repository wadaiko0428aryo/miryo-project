@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
<form action="{{ route('register') }}" method="post">
    @csrf
    <div class="auth-group">
        <div class="auth-input">
            <label id="name" class="auth-label">
                ニックネーム
            </label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="ニックネームを入力してください" class="auth-input_data">
        </div>
        <div class="auth-input">
            <label id="email" class="auth-label">
                メールアドレス
            </label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレスを入力してください"  class="auth-input_data">
        </div>
        <div class="auth-input">
            <label id="password" class="auth-label">
                パスワード
            </label>
            <input id="password" type="password" name="password" value="{{ old('password') }}" placeholder="パスワードを入力してください"  class="auth-input_data">
        </div>
        <div class="auth-input">
            <input type="submit" value="会員登録" class="auth-btn_submit">
        </div>
        <div class="link-btn">
            <a href="{{ route('login') }}" class="link-btn_auth">ログイン画面</a>
        </div>
    </div>
</form>
@endsection