<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head> 

<body>
    <header class="header">
        <div class="header__title">
           お問い合わせフォーム 
        </div>
    </header>

    <main>
        <div class="contact-form__main"> 
            <div class="contact-form__head">
                <h2>Contact</h2>
            </div>
        </div>

        <form class="form" action="/confirm" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form__group">
                <div class="form__group__detail">
                    <span class="form__group__label">お名前</span>
                    <span class="form__group__required">※</span>
                </div>

                <div class="form__group__input">
                    <div class="form__group__input__text">
                        <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name')}}"/>
                    </div>
                </div>

                <div class="form__Validation">
                    <!--バリデーション機能。-->
                    @error('name')
                        {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="form__group">
                <div class="form__group__detail">
                    <span class="form__group__label">電話番号</span>
                    <span class="form__group__required">※</span>
                </div>

                <div class="form__group__input">
                    <div class="form__group__input__text">
                        <input type="tel" name="tel__1" placeholder="090" value="{{ old('tel__1')}}"/>-
                        <input type="tel" name="tel__2" placeholder="1234" value="{{ old('tel__2')}}"/>-
                        <input type="tel" name="tel__3" placeholder="5678" value="{{ old('tel__3')}}"/>
                    </div>
                </div>

                <div class="form__Validation">
                    <!--バリデーション機能-->
                    @error('tel__1')
                        {{ $message }} 
                    @enderror
                    @error('tel__2')
                        {{ $message }} 
                    @enderror
                    @error('tel__3')
                        {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="form__group">
                <div class="form__group__detail">
                    <span class="form__group__label">お問い合わせの種類</span>
                    <span class="form__group__required">※</span>
                </div>
                   
                <div class="form__group__input">
                    <select class="form__group__input__select " name="item_id" >
                        <option class="form__group__input__select__title" disabled selected >問い合わせの部品を選択</option>
                        @foreach($items as $item)
                        <option value="{{$item->id}} {{$item->content}}">{{$item->content}}</option>
                        @endforeach
                    </select>
                </div>    

                <div class="form__Validation">
                    <!--バリデーション機能-->
                    @error('item_id')
                        {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="form__group">
                <div class="form__group__detail">
                    <span class="form__group__label">どこで知りましたか？</span>
                    <span class="form__group__required">※</span>
                </div>

                <div class="form__group__input">
                    <div class="form__group__input__check ">
                        @foreach($channels as $channel)
                            <input type="checkbox" name="channel_ids[]" value="{{$channel->id}}">
                            {{$channel->content}}
                        @endforeach                   
                    </div>
                </div>

                <div class="form__Validation">
                    <!--バリデーション機能-->
                    @error('channel_ids')
                        {{ $message }} 
                    @enderror
                </div>
            </div>

            <div class="form__group">
                <div class="form__group__detail">
                    <span class="form__group__label">ファイルアップロード</span>
                    <span class="form__group__required">※</span>
                        <div class="form__group__input__file__comment">(写真や画像があれば張り付けてください)</div>
                </div> 
            
                <div class="form__group__input">
                    <div class="form__group__input__file__image ">
                        <input type="file" name="image_file" > 
                    </div>
                    </div>
            
                <div class="form__Validation">
                    <!--バリデーション機能-->
                </div>
            </div>

                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </div>
        </form>
    </main>
</body>