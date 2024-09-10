<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'equipment_id',
        'start_date',
        'end_date',
        'purpose',
        'delivery_option',
        'address',
        'requirements',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the Equipment model
    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }
}
