<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{

    public function items_page()
    {
        $items = Item::paginate(4);
        return view('item.items_page', compact('items'));
    }
    public function items_detail_page($item_id)
    {
        $item = Item::find($item_id);
        return view('item.items_detail_page', compact('item'));
    }
    public function item_purchase_page($item_id)
    {
        $item = Item::find($item_id);
        return view('item.item_purchase_page', compact('item'));
    }

}
