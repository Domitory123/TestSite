<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

   public function merch()
   {
       return $this->belongsTo(Merch::class,'merch_id','id');
   }
} 
