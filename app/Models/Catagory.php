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
         return $this->hasMany(Room::class);
     }
    
}
