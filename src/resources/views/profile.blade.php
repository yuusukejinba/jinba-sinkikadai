<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
</head> 

<body>
    <header class="header">
        <div class="header__title">
           お問い合わせフォーム 
        </div>

    <main>
        <div class="profile-form__main"> 
            <div class="profile-form__head">
                <h2>Profile_Register</h2>
            </div>
        </div>

        <form class="form" action="/admin/register" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group__title">
                    <span class="form__group__label">役職名</span>
                </div>

                <div class="form__group__input">
                    <div class="form__group__text">
                        <input type="text" name="position" value="{{old('position')}}" >
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group__title">
                    <span class="form__group__label">性別</span>
                </div>

                <div class="form__gender">
                    <div class="form__gender__option">
                        <input class="form__gender-input" name="gender" type="radio" value="1" >
                        <span class="form__gender-text">男性</span>
                    </div>
                </div>

                <div class="form__gender">
                    <div class="form__gender__option">
                        <input class="form__gender-input" name="gender" type="radio" value="2" >
                        <span class="form__gender-text">女性</span>
                    </div>
                </div>

                <div class="form__gender">
                    <div class="form__gender__option">
                        <input class="form__gender-input" name="gender" type="radio" value="2" >
                        <span class="form__gender-text">その他</span>
                    </div>
                </div>
            </div>

            <div class="form__button">
                <button class="form__button-submit" type="submit">登録</button>
            </div>
        </form>   
    </main>
</body>