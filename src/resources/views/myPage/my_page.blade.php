@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/my_page.css') }}">
@endsection

@section('content')

<a href="{{ route('my_items') }}" class="my_items-link link">My Items</a>
<a href="{{ route('my_blog') }}" class="my_items-link link">My Blog</a>
<a href="{{ route('my_event') }}" class="my_items-link link">My Event</a>
    マイページ



    <!--・　ユーザーがマイページに遷移できる
        ・　ユーザーがイベントの予約確認ができる
        ・　ユーザーが購入商品を確認できる　
        ・　ユーザーがいいねした商品を閲覧できる
        ・　ユーザーがいいねしたブログを閲覧できる
        -->
@endsection