<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head> 

<body>
    <header class="header">
        <div class="header__title">
           お問い合わせフォーム 
        </div>

        <div class="form__register">
            <a class="form__register__button" href="/register">Register</a>
        </div>
    </header>

    <main>
        <div class="login-form__main"> 
            <div class="login-form__head">
                <h2>Login</h2>
            </div>
        </div>

        <form class="form" action="/login" method="post">
            <div class="form__group">
                <div class="form__group__title">
                    <span class="form__group__label">メールアドレス</span>
                </div>

                <div class="form__group__input">
                    <div class="form__group__text">
                        <input type="email" name="email" value="{{old('email')}}" placeholder="（例）test@test.com">
                    </div>

                    <div class="form__error">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group__title">
                    <span class="form__group__label">パスワード</span>
                </div>

                <div class="form__group__input">
                    <div class="form__group__text">
                        <input type="password" name="password" value="{{old('password')}}" >
                    </div>

                    <div class="form__error">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form__button">
                <button class="form__button-submit" type="submit">ログイン</button>
            </div>
        </form>
    </main>
<body>    