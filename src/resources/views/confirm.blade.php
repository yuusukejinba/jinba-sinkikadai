<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
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
                <h2>Confirm</h2>
            </div>
        </div>
        
        <form class="form" action="/thanks" method="post">
            @csrf
            <div class="form__table">
                <table class="confirm__table">
                    <tr class="confirm__table__inner">
                        <th class="confirm__table__name">お名前</th>
                            <td class="confirm__table__text">{{$contact['name']}}</td>
                            <input type="hidden" name="name" value="{{$contact['name']}}" />
                            
                    </tr>
                
                    <tr class="confirm__table__inner">
                        <th class="confirm__table__name">電話番号</th>
                            <td class="confirm__table__text">{{ $contact['tel__1'] }}{{ $contact['tel__2'] }}{{ $contact['tel__3'] }}</td>
                            <input type="hidden" name="tel__1" value="{{ $contact['tel__1'] }}">
                            <input type="hidden" name="tel__2" value="{{ $contact['tel__2'] }}">
                            <input type="hidden" name="tel__3" value="{{ $contact['tel__3'] }}">
                    </tr>

                    <tr class="confirm__table__inner">
                        <th class="confirm__table__name">お問い合わせの種類</th>
                        
                            <td class="confirm__table__text">{{ $item['content'] }}</td>
                            <input type="text" name="item_content" value="{{$item->item_content}}">
                            <input type="hidden" name="item_id" value="{{$item->id}}">
                            
                    </tr>






                </table>
            </div>

            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
            </div>
        </form>
    </main>
</body>