<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>
        <b>惑星一覧</b>
    </h1>
    <table border="1">
        <tr>
            <th>名前</th>
            <th>名前(英語)</th>
            <th>半径</th>
            <th>重量</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($planets as $planet)
        <tr>
            <td>{{ $planet->name }}</td>
            <td>{{ $planet->english }}</td>
            <td>{{ $planet->radius }}</td>
            <td>{{ $planet->weight }}</td>
            <td><a href="/planets/{{ $planet->id }}">詳細</a></td>
            <td><a href="/planets/edit">編集</a></td>
            <td>
                <form action="planets/{{ $planet->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="削除する" onclick="if(!confirm('本当に削除しますか?')){return false}">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="/planets/create">新規登録</a>
</body>
</html>