<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table =('payments');
    protected $guarded=[];

    public function book()
    {
        return $this->belongsTo(Book::class,'book_id','id');
    }
  
}
