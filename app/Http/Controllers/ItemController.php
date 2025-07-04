<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtype;
use App\Models\Item;
use Illuminate\Support\Facades\Storage;

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
    public function edit(Item $item)
{
    // Fetch all subtypes to populate the category dropdown
    $subtypes = Subtype::all();
    
    return view('items.edit', compact('item', 'subtypes')); // Pass subtypes along with the item
}

public function showByCategory($id)
{
    $subtype = Subtype::with('items')->findOrFail($id); 
    $subtypes = Subtype::with('items')->get();
    return view('items.index', [
        'subtype' => $subtype, 
        'subtypes' => $subtypes, 
        'items' => $subtype->items, // Pass the items from the subtype
    ]);
}


public function update(Request $request, Item $item)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'name_en' => 'nullable|string|max:255',
        'name_de' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'description_en' => 'nullable|string',
        'description_de' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'subtype_id' => 'required|exists:subtypes,id',
    ]);

    $item->update($request->only([
        'name',
        'name_en',
        'name_de',
        'description',
        'description_en',
        'description_de',
        'price',
        'subtype_id',
    ]));

    return redirect()->route('dashboard')->with('success', 'Item updated successfully!');
}


    // Delete an item from the database
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('dashboard')->with('success', 'Item deleted successfully!');
    }

        public function create()
    {
        $subtypes = Subtype::all(); // Fetch all subtypes for category selection
        return view('items.create', compact('subtypes'));
    }

public function store(Request $request)
{

    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'subtype_id' => 'required|exists:subtypes,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $item = new Item();
    $item->name = $request->name;
    $item->price = $request->price;
    $item->subtype_id = $request->subtype_id;
    $item->save();

    // dd('Saved'); // DEBUG

    if ($request->hasFile('image')) {
        $request->file('image')->storeAs('public/images/items', $item->id . '.jpg');
    }

    return redirect()->route('items.create')->with('success', 'Item created!');
}





}
