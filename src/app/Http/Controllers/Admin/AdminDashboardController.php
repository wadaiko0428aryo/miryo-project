<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function create_item()
    {
        return view('admin.create_item');
    }

    public function store_item(Request $request)
    {
        $image_path = $request->file('image')->store('item', 'public');

        $item = new Item();
        $item->image = $image_path;
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->save();

        return redirect()->route('items');
    }

    public function edit_item($item_id)
    {
        $item = Item::find($item_id);
        return view('admin.edit_item', compact('item'));
    }

    public function delete_item($item_id)
    {
        $item = Item::find($item_id);
        $item->delete();

        return redirect()->route('items');
    }


}
