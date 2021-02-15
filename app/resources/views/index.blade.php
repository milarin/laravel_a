<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>paiza bbs</title>
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>top page</h1>
        <p>{{ $message }}</p>
        @foreach ($articles as $article)
            <!-- <p>{{ $article->title }}</p> -->
            <img src="{{ asset('image/' . $article->img_url) }}" alt="" class="thumbnail">
            <p>
              <a href="{{ route('article.show', ['id' => $article->id]) }}">{{ $article->title }}</a>
            </p>
        @endforeach
    </body>
</html>