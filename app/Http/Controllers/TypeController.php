<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Models\Subtype;

class TypeController extends Controller
{
    /**
     * Display a listing of all types (e.g., Предјадења, Десерти, etc.).
     */
    public function index()
    {
        $types = Type::all();
        return view('welcome', compact('types'));
    }

    /**
     * Display a specific type by ID.
     */
    public function show($id)
{
    $type = Type::findOrFail($id);
    $subtype = Subtype::where('type_id', $id)->get();

    return view('types.show', compact('type', 'subtype'));
}
}
