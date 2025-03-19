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

        <div class="pagination">
            {{ $contacts->links('pagination::bootstrap-4')}}
        </div>

        <div class="form__table">
            <table class="admin__table">
                <tr class="admin__table__inner">
                    <th class="admin__table__header">お名前</th>
                    <th class="admin__table__header">電話番号</th>
                    <th class="admin__table__header">お問い合わせの種類</th>
                    <th class="admin__table__header">知ったきっかけ</th>
                    <th class="admin__table__header">アップロード画像</th>  
                </tr>

                @foreach ($contacts as $contact)
                <tr>                       
                    <td class="admin__table__data">{{ $contact['name'] }}</td>                                                            
                    <td class="admin__table__data">{{ $contact['tel'] }}</td>                                                     
                    <td class="admin__table__data">{{ $contact->item['content'] }}</td>                                                                      
                    <td class="admin__table__data">
                        @foreach($contact->channels as $channel)
                            {{ $channel['content'] }}
                        @endforeach</td>                                                                                                                    
                    <td class="admin__table__data">
                        <a href="/admin/contact/{{$contact['id']}}">
                        <img src="{{ asset('storage/' . $contact['image_file']) }}" class="admin_table_image">
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </main>
</body>

</html>