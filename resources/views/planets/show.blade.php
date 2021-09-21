<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>
        <b>名前 : {{ $planet->name }}</b>
    </p>
    <p>
        <b>名前(英語) : {{ $planet->english }}</b>
    </p>
    <p>
        <b>半径 : {{ $planet->radius }}</b>
    </p>
    <p>
        <b>重量 : {{ $planet->weight }}</b>
    </p>

    <a href="/planets">戻る</a>
</body>
</html>