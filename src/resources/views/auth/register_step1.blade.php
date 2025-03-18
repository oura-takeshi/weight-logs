@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register_step1.css') }}">
@endsection

@section('content')
<div class="register-form">
    <div class="register-form__inner">
        <div class="register-form__heading">
            <h2 class="register-form__heading-title">PiGLy</h2>
            <h3 class="register-form__heading-content">新規会員登録</h3>
        </div>
        <p class="register-form__text">STEP1&nbsp;アカウント情報の登録</p>
        <form class="register-form__form" action="/register/step1" method="post">
            @csrf
            <div class="register-form__group">
                <label class="register-form__label" for="name">お名前</label>
                <input class="register-form__input" type="text" name="name" id="name" value="{{ old('name') }}">
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="email">メールアドレス</label>
                <input class="register-form__input" type="email" name="email" id="email" value="{{ old('email') }}">
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="password">パスワード</label>
                <input class="register-form__input" type="password" name="password" id="password">
            </div>
            <button class="register-form__button" type="submit">次に進む</button>
        </form>
        <a class="register-form__foot-link" href="">ログインはこちら</a>
    </div>
</div>
@endsection