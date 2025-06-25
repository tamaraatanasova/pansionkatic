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
        $subtypes = Subtype::with('items')->get(); // Fetch all subtypes with their related items
        
        return view('dashboard', compact('subtypes'));
    }

    
//     public function edit()
// {
//     $types = Type::all();
//     $subtypes = Subtype::all();
//     return view('admin.edit', compact('types', 'subtypes'));
// }


//    public function update(Request $request)
// {
//     // Update types
//     foreach ($request->type_name_en as $id => $name_en) {
//         $type = Type::find($id);
//         if ($type && is_null($type->name_en)) {
//             $type->name_en = $name_en;
//         }
//         if ($type && is_null($type->name_de)) {
//             $type->name_de = $request->type_name_de[$id];
//         }
//         $type->save();
//     }

//     // Update subtypes
//     foreach ($request->subtype_name_en as $id => $name_en) {
//         $subtype = Subtype::find($id);
//         if ($subtype && is_null($subtype->name_en)) {
//             $subtype->name_en = $name_en;
//         }
//         if ($subtype && is_null($subtype->name_de)) {
//             $subtype->name_de = $request->subtype_name_de[$id];
//         }
//         $subtype->save();
//     }

//     return redirect()->route('admin.edit')->with('success', 'Items updated successfully');
// }
}
