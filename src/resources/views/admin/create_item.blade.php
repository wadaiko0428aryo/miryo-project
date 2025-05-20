@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/create_item.css') }}">
@endsection

@section('content')
<div class="create-title">
    <h2>商品を追加する</h2>
</div>

<form action="{{ route('admin.store_item') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="create-item_group">
        @csrf
        <div class="create-data_group">
            <label for="name" class="data-label">商品画像</label>
            <input type="file" id="image" name="image" class="img-data">
        </div>
        <div class="create-data_group">
            <label for="name" class="data-label">商品名</label>
            <input type="text" name="name" id="name" placeholder="商品名を入力してください" value="{{ old('name') }}" class="name-data create-data">
        </div>
        <div class="create-data_group">
            <label for="price" class="data-label">値段</label>
            <input type="text" name="price" id="price" placeholder="商品の値段を入力してください" value="{{ old('price') }}" class="price-data create-data">
        </div>
        <div class="create-data_group">
            <label for="description" class="data-label">商品説明</label>
            <input type="text" name="description" id="description" placeholder="商品の説明を入力してください" value="{{ old('description') }}" class="description-data create-data">
        </div>
        <div class="create-btn">
            <input type="submit" value="商品を追加" class="create-btn_submit">
        </div>
    </div>
</form>




@endsection