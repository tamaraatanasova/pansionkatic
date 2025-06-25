<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

protected $fillable = [
    'name',
    'name_en',
    'name_de',
    'description',
    'description_en',
    'description_de',
    'price',
    'subtype_id',
];

    public function subtype()
    {
        return $this->belongsTo(Subtype::class);
    }
}
