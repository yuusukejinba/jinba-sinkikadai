<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
</head> 

<body>
    <header class="header">
        <div class="header__title">
           お問い合わせフォーム 
        </div>
    </header>

    <main>
        <div class="confirm-form__main"> 
            <div class="confirm-form__head">
                <h2>Image</h2>
            </div>
        </div>
        
        <form class="form" >
            @csrf
            <div class="form__image">
                <div class="form__image__title">【アップロード画像】</div>
                    <div class="form__image__file">
                        <img src="{{ '/storage/' . $contact['image_file'] }}">
                        <input type="hidden" name="image_file" value="{{ $contact['image_file']}} ">
                    </div>
                </div>
            </div>
        </form>
    </main>
</body>