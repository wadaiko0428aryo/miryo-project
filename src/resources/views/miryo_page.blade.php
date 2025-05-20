@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/miryo_page.css') }}">
@endsection

@section('content')
<div class="description">日本、世界を旅したmiryoが開くカフェ&個展「Miryo's Cafe」へようこそ</div>
    <img src="{{ asset('storage/images/cafe1.jpg') }}" alt="画像" class="cafe-img">

@endsection