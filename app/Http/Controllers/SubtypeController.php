<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtype;

class SubtypeController extends Controller
{
       public function show($id)
{
      $subtype = Subtype::with('items')->findOrFail($id);
$items = $subtype->items;

        return view('items.show', compact('subtype', 'items'));
}
}
