<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtype;
use App\Models\Item;
use App\Models\Type;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Get all types and subtypes
        $types = Type::all();
        $subtypes = Subtype::all();

        // Fetch items with their associated subtypes (and images) for the dashboard
        $items = Item::with('subtype')->get(); // Assuming `Item` model has a `subtype` relationship

        // Return view with types, subtypes, and items
        return view('dashboard', compact('types', 'subtypes', 'items'));
    }

    public function edit()
    {
        $types = Type::all();
        $subtypes = Subtype::all();
        return view('admin.edit', compact('types', 'subtypes'));
    }

    public function update(Request $request)
    {
        // Optional: Validate structure
        $request->validate([
            'type_name' => 'array',
            'type_name.*' => 'nullable|string|max:255',
            'type_name_en.*' => 'nullable|string|max:255',
            'type_name_de.*' => 'nullable|string|max:255',
            'subtype_name' => 'array',
            'subtype_name.*' => 'nullable|string|max:255',
            'subtype_name_en.*' => 'nullable|string|max:255',
            'subtype_name_de.*' => 'nullable|string|max:255',
        ]);

        // Update types
        foreach ($request->input('type_name', []) as $id => $name) {
            $type = Type::find($id);
            if ($type) {
                $type->name = $name;
                $type->name_en = $request->input("type_name_en.$id");
                $type->name_de = $request->input("type_name_de.$id");
                $type->save();
            }
        }

        // Update subtypes
        foreach ($request->input('subtype_name', []) as $id => $name) {
            $subtype = Subtype::find($id);
            if ($subtype) {
                $subtype->name = $name;
                $subtype->name_en = $request->input("subtype_name_en.$id");
                $subtype->name_de = $request->input("subtype_name_de.$id");
                $subtype->save();
            }
        }

        return redirect()->back()->with('success', 'Types and Subtypes updated successfully!');
    }
}
