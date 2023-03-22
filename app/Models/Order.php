<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   use HasFactory;

   protected $fillable = ['merch_id',
    'name_user', 'email',
    'delivery_address', 'comment', 
    'phone_number', 'status'];
   
   public function merch()
   {
       return $this->hasMany(Merch::class,'merch_id','id');
      //return $this->belongsTo(Merch::class,'merch_id','id');
   }
} 
