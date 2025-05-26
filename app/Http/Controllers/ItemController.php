<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Item;




class ItemController extends Controller
{


public function index(Request $request)
{
    $tag = request()->query('tag');

    if ($tag) {
        $items = Item::where('tags', 'like', '%' . $tag . '%')->get();
    } else {
        $items = Item::all();
    }

    // Obtener lista de todas las etiquetas únicas (opcional y simple)
    $allTags = collect(Item::all()->pluck('tags'))
        ->flatMap(fn ($tags) => explode(',', $tags))
        ->map(fn ($tag) => trim($tag))
        ->unique()
        ->sort()
        ->values();

    return view('items.index', compact('items', 'tag', 'allTags'));
}


    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('items.show', compact('item'));
    }
}
