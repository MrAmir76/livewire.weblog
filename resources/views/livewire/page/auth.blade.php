@section('title', 'ورود به حساب کاربری')
<div class="container d-flex align-items-center "
     style="direction: rtl;overflow: hidden;text-align: center;display: flex;align-items: center;justify-content: center;min-height: 100vh;">
    <div class="screen">
        <div class="screen__content">
            <a href="{{route('index')}}" class="auth-home" wire:navigate>خانه</a>
            @error('authenticated')
            <small class="form-error" style="top: 15% ">{{$message}}</small>
            @enderror
            <form class="login" wire:submit.prevent="login">
                <div class="login__field" style="position:relative;">
                    <i class="login__icon fas fa-user"></i>
                    <label>
                        <input type="text" class="login__input"
                               wire:model="username" placeholder="نام کاربری">
                    </label>
                    @error('username')
                    <small class="form-error">{{$message}}</small>
                    @enderror
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <label>
                        <input type="password" class="login__input"
                               wire:model="password" placeholder="کلمه عبور">
                    </label>
                    @error('password')
                    <small class="form-error">{{$message}}</small>
                    @enderror
                </div>
                <button class="button login__submit" type="submit">
                    <span class="button__text">وارد شوید</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>
            </form>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
    <style>
        .screen {
            background: linear-gradient(90deg, #a43a88, #b873b1);
            position: relative;
            height: 600px;
            width: 360px;
            box-shadow: 0 0 24px #8c5896;
        }


        .form-error {
            color: #dc3545;
            text-shadow: 1px 1px 5px white;
            position: absolute;
            right: 40px;
            padding: 6px;
            border-radius: 8px;
            background-color: #b6b9b4;
            top: 85%;
        }

        .auth-home {
            text-decoration: none;
            text-align: right;
            direction: rtl;
            float: right;
            margin: 15px 35px;
            padding: 6px 16px;
            border-radius: 4px;
            background-color: white;
            transition-duration: .8s;
            transition-delay: .3ms;
        }

        .auth-home:hover {
            background: linear-gradient(90deg, #a43a88, #b873b1);
            color: white;
            box-shadow: 1px 1px 1px 1px inset;
        }

        .screen__content {
            z-index: 1;
            position: relative;
            height: 100%;
        }

        .screen__background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
        }

        .screen__background__shape {
            transform: rotate(45deg);
            position: absolute;
        }

        .screen__background__shape1 {
            height: 520px;
            width: 520px;
            background: #FFF;
            top: -50px;
            right: 120px;
            border-radius: 0 72px 0 0;
        }

        .screen__background__shape2 {
            height: 220px;
            width: 220px;
            background: #ac509b;
            top: -172px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape3 {
            height: 540px;
            width: 190px;
            background: linear-gradient(270deg, #a43f8d, #9e6a9e);
            top: -24px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape4 {
            height: 400px;
            width: 200px;
            background: #b974ae;
            top: 420px;
            right: 50px;
            border-radius: 60px;
        }

        .login {
            width: 320px;
            padding: 156px 30px 30px;
        }

        .login__field {
            padding: 20px 0;
            position: relative;
        }

        .login__icon {
            position: absolute;
            top: 30px;
            color: #b55aa0;
        }

        .login__input {
            border: none;
            border-bottom: 2px solid #D1D1D4;
            background: none !important;
            text-indent: 18px;
            padding: 10px 10px 10px 24px;
            font-weight: 700;
            width: 75%;
            transition: .5s;
            text-shadow: 1px 1px white;
        }

        .login__input:active,
        .login__input:focus,
        .login__input:hover {
            outline: none;
            border-bottom-color: #9e4772;
        }

        .login__submit {
            background: #fff;
            font-size: 14px;
            margin-top: 30px;
            padding: 16px 20px;
            border-radius: 26px;
            border: 1px solid #D4D3E8;
            text-transform: uppercase;
            font-weight: 700;
            display: flex;
            align-items: center;
            width: 100%;
            color: #a43a88;
            box-shadow: 0 2px 2px #b873b1;
            cursor: pointer;
            transition: .2s;
        }

        .login__submit:active,
        .login__submit:focus,
        .login__submit:hover {
            border-color: #9e7172;
            outline: none;
        }

        .button__icon {
            font-size: 24px;
            margin-left: auto;
            color: #b55aa0;
        }
    </style>
</div>
