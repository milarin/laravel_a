@extends('layouts.layout')

@section('humberger')

<span class="humberger-btn-bar top"></span>
  <span class="humberger-btn-bar mid"></span>
  <span class="humberger-btn-bar bot"></span>
</div><!-- .humberger-btn -->

@endsection

@section('nav')

<header class="wrapper">
  <h1><a href="/"><img class="logo" src="{{ asset('image/logo.jpeg') }}" alt="ライバロリ"></a></h1>
  <nav>
    <ul class="main-nav">
      <li><a href="/">ライバロリ</a></li>
      <li><a href="https://www.youtube.com/channel/UCSdExItCszcnIp-roT7b0kw">Youtube</a></li>
      <li><a href="https://www.youtube.com/channel/UCFonAazmxOCc5sl9UiIkilg">Youtube Sub</a></li>
      <li><a href="https://twitter.com/raibarori">Twitter</a></li>
      <li><a href="https://www.instagram.com/barori_harada/?hl=ja">Instagram</a></li>
      <li><a href="https://com.nicovideo.jp/community/co2580354">Niconico</a></li>
    </ul>      
  </nav>
</header>

@endsection

@section('content')
        <div class="detail-content wrapper">
        <h1>show page</h1>
        <p>{{ $message }}</p>
        <img src="{{ asset('image/' . $article->img_url) }}" alt="" class="thumbnail">


          <!-- <iframe src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
          <p class="title">{{ $article->title }}</p>
        <p>
            <a href="{{ route('article.list') }}">一覧に戻る</a>
        </p>
        </div> 
@endsection
