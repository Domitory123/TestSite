<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
    use HasFactory;
    use Filterable;
    
    public function category()
    {
        return $this->belongsTo(Category::class ,"сategory_id","id");
    }

}
