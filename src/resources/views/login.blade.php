@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login">
    <div class="header-login">
        <div class="header-login__inner">
            <h2 class="header-login__logo">Login</h2>
        </div>
    </div>
    <div class="section__login">
        <div class="login__infor">
            <form action="/" class="login__form" method="post">
                <table class="login__form--table">
                    <tr class="login__form--table-list">
                        <th class="login__form--table-header">
                            <label>
                                <div class="login__table-header1">メールアドレス</div>
                                <div class="login__table-header__input">                                        
                                    <input type="email" class="login__form--table-input" name="email" >
                                    <input type="hidden" name="id" >
                                </div>
                            </label>
                        </th>
                    </tr>
                    <tr class="login__form--table-list">
                        <th class="login__form--table-header">
                            <label>
                                <div class="login__table-header2">パスワード</div>
                                <div class="login__table-header__input">
                                    <input type="password" class="login__form--table-input" name="password" >
                                    <input type="hidden" name="id" >
                                </div>
                            </label>
                        </th>
                    </tr>
                    <tr class="login__form--table-list">
                        <th class="login__form--table-header">
                            <div class="login__form--table-btn">
                                <input type="hidden" name="id" >
                                <button class="login__btn">ログイン</button>
                            </div>
                        </th>     
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection