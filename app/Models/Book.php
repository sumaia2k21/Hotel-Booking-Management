<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function room()
{
    return $this->belongsTo(Room::class);
}
public function catagory()
{
    return $this->belongsTo(Catagory::class);
}
public function book()
{
    return $this->belongsTo(Book::class);
}
public function pay()
{
    return $this->belongsTo(Payment::class);
}
public function user()
{
    return $this->belongsTo(User::class);
}
public function bookingdetails()
{
    return $this->hasMany(BookDetails::class);
}

}



