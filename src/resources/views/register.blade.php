@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register">
    <div class="header-register">
        <div class="header-register__inner">
            <h2 class="header-register__logo">Register</h2>
        </div>
    </div>
    @foreach ($users as $user)
    <div class="section__register">
        <div class="register__infor">
            <form action="/registers/store" class="register__form" method="post">
                @csrf
                <table class="register__form--table">
                    <tr class="register__form--table-list">
                        <th class="register__form--table-header">
                            <label>
                                <div class="table-header1">お名前</div>
                                <div class="table-header__input">
                                    <input type="text" class="register__form--table-input" name="name" value="{{ $user('name') }}">
                                    <input type="hidden" name="id" value="{{ $user('id') }}">                                 
                                </div>
                            </label>
                        </th>
                    </tr>
                    <tr class="register__form--table-list">
                        <th class="register__form--table-header">
                            <label>
                                <div class="table-header2">メールアドレス</div>
                                <div class="table-header__input">                                        
                                    <input type="email" class="register__form--table-input" name="email" value="{{ $user('email') }}">
                                    <input type="hidden" name="id" value="{{ $user('id') }}">
                                </div>
                            </label>
                        </th>
                    </tr>
                    <tr class="register__form--table-list">
                        <th class="register__form--table-header">
                            <label>
                                <div class="table-header3">パスワード</div>
                                <div class="table-header__input">
                                    <input type="password" class="register__form--table-input" name="password" value="{{ $user('password') }}">
                                    <input type="hidden" name="id" value="{{ $user('id') }}">
                                </div>
                            </label>
                        </th>
                    </tr>
                    <tr class="register__form--table-list">
                        <th class="register__form--table-header">
                            <div class="register__form--table-btn">
                                <input type="hidden" name="id" value="{{ $user('id') }}">
                                <button class="register__btn">登録</button>
                            </div>
                        </th>     
                    </tr>
                </table>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection