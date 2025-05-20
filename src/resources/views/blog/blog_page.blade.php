@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/blog_page.css') }}">
@endsection

@section('content')
<h2 class="blog-title">
    Blog
</h2>
<div class="blog-block">
@foreach($blogs as $blog)
    <div class="blogs-card_group">
        <a href="{{ route('blog_detail', $blog->id) }}" class="blog-card">
            <img src="{{ asset('storage/'. $blog->image) }}" alt="画像" class="blog-card_image">
            <span class="blog-card_location">
                {{ $blog->location }}
            </span>
        </a>
    </div>
@endforeach
<div class="pagination">
    {{ $blogs->links('vendor.pagination.bootstrap-4') }}
</div>
</div>




    <!-- ・　全員が筆者のブログを閲覧
    　　  　　 ・　ユーザーが筆者のブログにいいね機能
    　　　　　　　　　　・　ユーザーが筆者のブログにコメント機能
    　　　　　　　　　　・　全員が筆者のブログを日付検索機能　　　-->
@endsection