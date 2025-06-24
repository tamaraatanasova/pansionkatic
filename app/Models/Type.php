<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image_url'];

    public function subtypes()
    {
        return $this->hasMany(Subtype::class);
    }

    public function items()
{
    return $this->hasMany(Item::class);
}

}
