<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtype;
use App\Models\Item;

class ItemController extends Controller
{
   public function show($id)
{
    $subtype = Subtype::with('items')->findOrFail($id);
        $items = $subtype->items;

        return view('items.show', compact('subtype', 'items'));
}
 public function info($id)
    {
        $item = Item::find($id);

        if (!$item) {
            return redirect()->route('home')->with('error', 'Item not found.');
        }

        return view('items.info', compact('item'));
    }
}
