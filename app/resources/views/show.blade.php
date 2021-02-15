<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>paiza bbs</title>
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>show page</h1>
        <p>{{ $message }}</p>
        <p>{{ $article->title }}</p>
        <img src="{{ asset('image/' . $article->img_url) }}" alt="" class="thumbnail">

        <p>
            <a href="{{ route('article.list') }}">一覧に戻る</a>
        </p>
    </body>
</html>
