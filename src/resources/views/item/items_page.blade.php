@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/items_page.css') }}">
@endsection

@section('content')
<h2 class="items-title">
    Shopping
</h2>
<form action="" method="get">
    @csrf
    <div class="search-form">
        <div class="search-input">
            <input type="text" name="items-name" id="items-name" placeholder="商品名を入力してください" class="search">
        </div>
        <div class="btn-group">
            <input type="submit" value="検索" class="search-btn">
            <input type="submit" value="リセット "class="reset-btn" >
        </div>
    </div>
</form>
@auth
    @if(Auth::user()->is_admin)
        <div class="admin-create_item">
            <a href="{{ route('admin.create_item') }}" class="admin-create_item-link">商品を追加する</a>
        </div>
    @endif
@endauth
<div class="item-cards_group">
    @foreach($items as $item)
        <div class="item-cards">
            <a href="{{ route('item_detail', $item->id) }}" class="item-card">
                <img src="{{ asset('storage/'.$item->image) }}" alt="画像" class="item-card_image_data item-img">
                <span class="item-card_name_data">
                    {{ $item->name }}
                </span>
            </a>
            <span class="message">＊この商品は「Miryo's Cafe」でも販売しています</span>
        </div>
    @endforeach
    <div class="pagination">
        {{ $items->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>







    <!-- ・　全員が商品カードを閲覧できる
    　　　　　　　　　　・　全員が商品を名前部分検索できる
    　　　　　　　　　　・　全員が商品カードをタップすると商品詳細画面に遷移できる
    　　　　　　　　　　・　ユーザーが商品にいいねできる
    　　　　　　　　　　・　ユーザーが商品にコメントできる
    　　　　　　　　　　・　ユーザーが商品を購入できる-->
@endsection