@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/item_purchase_page.css') }}">
@endsection

@section('content')
    <div class="purchase-title">
        {{ $item->name }}を購入する
    </div>
@endsection