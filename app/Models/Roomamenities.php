<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomamenities extends Model
{
    use HasFactory;
    
    protected $guarded=[];
    protected $table =('roomamenities');
    public function amenity()
    {
       return $this->belongsTo(Facility::class,'facilities_id','id');
    }
}
