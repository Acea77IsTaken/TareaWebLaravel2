<?php

namespace App\Http\Controllers;
use App\Models\Item;

abstract class Controller
{
    public function show($id)
{
    $item = Item::findOrFail($id);
    return view('items.show', compact('item'));
}

}
