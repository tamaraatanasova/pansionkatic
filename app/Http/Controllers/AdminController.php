<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtype;
use App\Models\Item;

class AdminController extends Controller
{
    public function dashboard()
    {
        $subtypes = Subtype::with('items')->get(); // Fetch all subtypes with their related items
        
        return view('dashboard', compact('subtypes'));
    }
}
