<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    /**
     * Get the equipment associated with the category.
     */
    public function equipment()
    {
        return $this->hasMany(Equipment::class, 'category_id');
    }
}
