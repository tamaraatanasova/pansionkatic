<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Subtype;
use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        $subtypes = Subtype::all();
        $items = Item::all();

        return view('welcome', compact('types', 'subtypes', 'items'));
    }
}
