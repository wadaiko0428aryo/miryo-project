@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/items_detail_page.css') }}">
@endsection

@section('content')
<div class="name-data">
    <h3 class="item-name">
        {{ $item->name }}
    </h3>
</div>
<div class="img-data">
    <img src="{{ asset('storage/'.$item->image) }}" alt="画像" class="item-img">
</div>
<div class="price-data">
    <div class="item-price">
        {{ $item->price }}円
    </div>
</div>
<div class="description-data">
    <span>商品説明</span>
    <div class="item-description">
        {{ $item->description }}
    </div>
</div>
<div class="time-data">
    <span>出品日</span>
    <span class="item-create_time">
        {{ $item->created_at->format('Y年m月d日') }}
    </span>
</div>
<div class="item-purchase">
    <a href="{{ route('purchase', $item->id) }}" class="item-purchase_link">商品を購入する</a>
</div>

@auth
    @if(Auth::user()->is_admin)
        <div class="item-edit">
        <a href="javascript:void(0);" class="edit-item_link"
        onclick="openModal('{{ route('admin.edit_item', ['item_id' => $item->id]) }}')">
            商品を編集する
        </a>
        </div>

        <!-- モーダル -->
        <div id="modal" class="modal hidden">
            <div class="modal-overlay" onclick="closeModal()"></div>
            <div class="modal-content" onclick="event.stopPropagation();">
                <span class="close" onclick="closeModal()">&times;</span>
                <iframe id="modal-iframe" src="" width="100%" height="600" frameborder="0"></iframe>
            </div>
        </div>

        <form action="{{ route('admin.delete_item', ['item_id' => $item->id]) }}" method="post"  onsubmit="return confirm('本当に削除しますか？');">
            @csrf
            <div class="delete_item">
                <input type="submit" value="商品を削除する" class="delete-btn">
            </div>
        </form>

    @endif
@endauth


<a href="{{ route('items') }}" class="back-btn">戻る</a>

<script>
function openModal(url) {
    const modal = document.getElementById('modal');
    const iframe = document.getElementById('modal-iframe');
    iframe.src = url;
    modal.classList.remove('hidden');
}

function closeModal() {
    const modal = document.getElementById('modal');
    const iframe = document.getElementById('modal-iframe');
    iframe.src = '';
    modal.classList.add('hidden');
}
</script>


@endsection

