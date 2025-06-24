<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtype extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type_id'];

    // Define relationship with Type
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    // Define relationship with Items
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
