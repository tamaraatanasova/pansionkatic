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
        'price' => 'required|numeric',
        'subtype_id' => 'required|exists:subtypes,id',
        'description' => 'nullable|string', // ✅ Add this line
    ]);

    $item->update($request->only(['name', 'price', 'subtype_id', 'description'])); // ✅ Explicitly update only valid fields

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

    // Store the newly created item in the database
public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'name_en' => 'nullable|string|max:255',
        'name_de' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'description_en' => 'nullable|string',
        'description_de' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'subtype_id' => 'required|exists:subtypes,id',
    ]);

    Item::create($validated);

    return redirect()->route('dashboard')->with('success', 'Item created successfully!');
}


}
