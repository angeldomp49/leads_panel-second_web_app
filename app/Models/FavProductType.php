<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ProductType;

class FavProductType extends Model
{
    use HasFactory;

    public function productType(){
        return $this->belongsTo(ProductType::class);
    }
}
