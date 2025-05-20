@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
<div class="admin-title">
    <h3>Admin Page</h3>
</div>

<div class="description">
    このページでは、ホームページを編集したり、商品の出品や削除、イベントやブログの更新や削除などができます。
</div>


@endsection