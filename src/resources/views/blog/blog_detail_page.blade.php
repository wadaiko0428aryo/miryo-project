@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/blog_detail_page.css') }}">
@endsection

@section('content')
<div class="blog-location">
    <h3 class="blog-location_data">
        {{ $blog->location }}
    </h3>
</div>

<div class="blog-img">
    <img src="{{ asset('storage/'.$blog->image) }}" alt="画像" class="blog-img_data">
</div>

<div class="blog-blog">
    <div class="blog-blog_data">
        {{ $blog->blog }}
    </div>
</div>

<div class="blog-create_time">
    <span>投稿日</span>
    <span class="blog-create_time-data">
        {{ $blog->created_at->format('Y年m月d日') }}
    </span>
</div>


    <a href="{{ route('blog') }}" class="back-btn">戻る</a>


@endsection