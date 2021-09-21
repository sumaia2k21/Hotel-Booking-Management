<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table =('newrooms');
    protected $guarded=[];
    public function catagory()
    {
        return $this->belongsTo(Catagory::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
