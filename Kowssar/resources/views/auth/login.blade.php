@extends('layouts.app')

@section('content')
    <body class=" login">
    <!-- BEGIN LOGO -->
    <div class="logo">

        <h3>سیستم جامع و یکپارچه مدیریت</h3>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span> شماره پرسنلی و کلمه عبور را وارد کنید </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">ایمیل</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="text" placeholder="ایمیل" name="email"  required />


            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">کلمه عبور</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="password" placeholder="کلمه عبور" name="password" required />


            </div>
            <div class="form-actions">
                <button type="submit" class="btn red btn-block uppercase">ورود</button>
            </div>
            <div class="form-actions">
                <div class="pull-left">
                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }} /> من را به خاطر بسپار
                        <span></span>
                    </label>
                </div>
                <div class="pull-right forget-password-block">
                    <a href="javascript:;" id="forget-password" class="forget-password">کلمه عبور خود را فراموش کرده اید؟</a>
                </div>
            </div>
            <div class="create-account">
                <p>
                    <a href="javascript:;" class="btn-primary btn" id="register-btn">ثبت نام</a>
                </p>
            </div>
        </form>
        <!-- END LOGIN FORM -->
        <!-- BEGIN FORGOT PASSWORD FORM -->
        <form class="forget-form" action="{{ route('password.request') }}" method="post">
            <div class="form-title">

                <span class="form-subtitle">شماره تلفنی که در سیستم ثبت شده است وارد کنید</span>
            </div>
            <div class="form-group">
                <input class="form-control placeholder-no-fix" type="text" placeholder="شماره تلفن" name="email" required /> </div>
            <div class="form-actions">
                <button type="button" id="back-btn" class="btn btn-default">بازگشت</button>
                <button type="submit" class="btn btn-primary uppercase pull-right">ارسال</button>
            </div>
        </form>
        <!-- END FORGOT PASSWORD FORM -->
        <!-- BEGIN REGISTRATION FORM -->
        <form class="register-form" method="POST" action="/singup" enctype="multipart/form-data">
            @csrf
            <div class="form-title">
                <span class="form-title">ثبت نام</span>
            </div>
            <p class="hint">اطلاعات فردی</p>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">نام و نام خانوادگی</label>
                <input class="form-control placeholder-no-fix" type="text" placeholder="نام و نام خانوادگی" name="name" required />
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">ایمیل</label>
                <input class="form-control placeholder-no-fix" type="text" placeholder="شماره تماس" name="emaill" required /> </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">ادرس محل سکونت</label>
                <select name="adress" class="form-control">
                    <option value="نهران">تهران</option>
                    <option value="شهریار">شهریار</option>
                    <option value="اسلامشهر">اسلامشهر</option>
                    <option value="نسیم شهر">نسیم شهر</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">تلفن ثابت</label>
                <input class="form-control placeholder-no-fix" type="text" placeholder="تلفن ثابت" name="phone" required />
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">سمت</label>
                <select name="Side" class="form-control">
                    <option value="پزشک">پزشک</option>
                    <option value="پرسنل">پرسنل</option>
                    <option value="مدیر">مدیر</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">تصویر پروفایل</label>
                <input class="form-control placeholder-no-fix" type="file" placeholder="تصویر پروفایل" name="profile" title="تصویر پروفایل" required />
            </div>
            <p class="hint"> اطلاعات ورود به حساب کاربری </p>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">ایمیل</label>
                <input class="form-control placeholder-no-fix" type="text" placeholder="ایمیل" name="email" required />
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">شماره تلفن همراه</label>
                <input class="form-control placeholder-no-fix" type="password" id="register_password" placeholder="شماره تلفن همراه" name="password" required />
            </div>
            <div class="form-actions">
                <button type="button" id="register-back-btn" class="btn btn-default">بازشگت</button>
                <button type="submit" id="register-submit-btn" class="btn red uppercase pull-right">ثبت</button>
            </div>
        </form>
        <!-- END REGISTRATION FORM -->
    </div>




@endsection
