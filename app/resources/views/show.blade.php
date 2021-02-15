@extends('layouts.layout')

@component('components.humberger')

@component('components.nav')

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
