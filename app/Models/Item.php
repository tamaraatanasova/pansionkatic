<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'subtype_id'];

    public function subtype()
    {
        return $this->belongsTo(Subtype::class);
    }
}
