@extends('layouts.layout')

@component('components.humberger')

@component('components.nav')

@section('content')

<div class="box wrapper">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/BoZ0Zwab6Oc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    {{ Form::open(['method' => 'get']) }}
      {{ Form::label('keyword', 'キーワード:') }}
      {{ Form::text('keyword', null, ['class' => '']) }}
      {{ Form::submit('検索', ['class' => ''])}}
      <a href="{{ route('article.list') }}">クリア</a>
    {{ Form::close() }}
  </div>

  <h3 class="wrapper category-title">{{ $message }}</h3>
  <div class="wrapper main-content">
    <aside>
      <ul class="tags">
        <li><a href="#">ルカリオ</a></li>
        <li><a href="#">バチンキー</a></li>
        <li><a href="#">ルカリオ</a></li>
        <li><a href="#">バチンキー</a></li>
        <li><a href="#">ルカリオ</a></li>
        <li><a href="#">バチンキー</a></li>
      </ul>

      <ul class="tags">
        <li><a href="#">代5世代(BW)</a></li>
        <li><a href="">代6世代(XY)</a></li>
        <li><a href="">代7世代(USUM)</a></li>
        <li><a href="">代8世代(剣盾)</a></li>
      </ul>
    </aside>

    <main>
      @foreach($articles as $article)
      <div class="item">
        <a href='{{ route("article.show", ["id" =>  $article->id]) }}'>
          <img src="{{ asset('image/' . $article->img_url) }}" alt="" class="thumbnail">
          <img src="image/logo.jpeg" alt="" class="channel-icon">
          <p class="title">{{ $article->title }}</p>
        </a>
      </div><!-- .item -->
      @endforeach

    </main>

  </div><!-- .wrapper .main-content -->

@endsection