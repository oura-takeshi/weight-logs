@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
<div class="login-form">
    <div class="login-form__inner">
        <div class="login-form__heading">
            <h2 class="login-form__heading-title">PiGLy</h2>
            <h3 class="login-form__heading-content">ログイン</h3>
        </div>
        <form class="login-form__form" action="/login" method="post">
            @csrf
            <div class="login-form__group">
                <label class="login-form__label" for="email">メールアドレス</label>
                <input class="login-form__input" type="email" name="email" id="email" value="{{ old('email') }}">
                <p>
                    @error('email')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="login-form__group">
                <label class="login-form__label" for="password">パスワード</label>
                <input class="login-form__input" type="password" name="password" id="password">
                <p>
                    @error('password')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <button class="login-form__button" type="submit">ログイン</button>
        </form>
        <a class="login-form__foot-link" href="">アカウント作成はこちら</a>
    </div>
</div>
@endsection