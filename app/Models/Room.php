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
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    public function roomamenities()
    {
        //who->relation name->to whom
        // 1 to  1 dependent =belongsTo
        // 1 to 1 not dependent = hasOne
        return $this->hasMany(Roomamenities::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
