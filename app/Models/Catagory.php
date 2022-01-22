<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $table =('catagoris');
    protected $guarded=[];

     public function rooms()
    {
         return $this->belongsTo(Room::class,'catagory_id','id');
     }
    //  public function discount()
    // {
    //      return $this->hasMany(Discount::class);
    //  }
    
}
