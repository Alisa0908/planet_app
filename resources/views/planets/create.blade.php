<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります｡</b>
            </p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>
        <b>惑星情報登録</b>
    </h1>
    <form action="/planets" method="post">
        @csrf
        <p>
            <label><b>名前</b></label>
            <input type="text" name="name" value="{{ old('name') }}">
        </p>
        <p>
            <label><b>名前(英語)</b></label>
            <input type="text" name="english" value="{{ old('english') }}">
        </p>
        <p>
            <label><b>半径</b></label>
            <input type="text" name="radius" value="{{ old('radius') }}">
        </p>
        <p>
            <label><b>重量</b></label>
            <input type="text" name="weight" value="{{ old('weight') }}">
        </p>
        <input class="register" type="submit" value="登録">
        <a href="/planets">戻る</a>
    </form>
</body>

</html>
