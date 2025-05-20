@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="auth-group">
        <div class="auth-input">
            <label id="email"class="auth-label">
                メールアドレス
            </label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="メールアドレスを入力してください"  class="auth-input_data">
        </div>
        <div class="auth-input">
            <label id="password" class="auth-label">
                パスワード
            </label>
            <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="パスワードを入力してください"  class="auth-input_data">
        </div>
        <div class="auth-input">
            <input type="submit" value="ログイン" class="auth-btn_submit">
        </div>
        <div class="link-btn">
            <a href="{{ route('register') }}" class="link-btn_auth">新規会員登録画面</a>
        </div>
    </div>
</form>
@endsection