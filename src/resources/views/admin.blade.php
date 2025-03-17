<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
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
                <h2>Admin</h2>
            </div>
        </div>

        <div class="form__table">
            <table class="admin__table">
                
                @foreach ($contact as $contact)
                    <tr class="admin__table__inner">
                        <th class="admin__table__header">お名前</th>
                        <td class="admin__table__data">{{ $contact['name'] }}</td>
                    </tr>

                    <tr class="admin__table__inner">
                        <th class="admin__table__header">電話番号</th>
                        <td class="admin__table__data">{{ $contact['tel'] }}</td>
                    </tr>

                    <tr class="admin__table__inner">
                        <th class="admin__table__header">お問い合わせの種類</th>
                        <td class="admin__table__data">{{ $contact['item_id'] }}</td>
                    </tr>

                    <tr class="admin__table__inner">
                        <th class="admin__table__header">知ったきっかけ</th>
                        <td class="admin__table__data">{{ $contact['channel_ids'] }}</td>
                    </tr>
                    
                    <tr class="admin__table__inner">
                        <th class="admin__table__header">アップロード画像</th>
                        <td class="admin__table__data">
                            <img src="{{ asset('storage/' . $contact['image_file']) }}" >
                            
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
</body>

</html>