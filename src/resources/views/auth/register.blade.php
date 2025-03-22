<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head> 

<body>
    <header class="header">
        <div class="header__title">
           お問い合わせフォーム 
        </div>

        <div class="form__login">
            <a class="form__login__button" href="/login">Login</a>
        </div>
    </header>

    <main>
        <div class="register-form__main"> 
            <div class="register-form__head">
                <h2>Register</h2>
            </div>
        </div>

        <form class="form" action="/register" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group__title">
                    <span class="form__group__label">お名前</span>
                </div>

                <div class="form__group__input">
                    <div class="form__group__text">
                        <input type="text" name="name" value="{{old('name')}}" placeholder="（例）テスト太郎">
                    </div>
                
                    <div class="form__error">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

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
                        <input type="password" name="password">
                    </div>

                    <div class="form__error">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form__button">
                <button class="form__button-submit" type="submit">登録</button>
            </div>
        </form>
    </main>
<body>    