<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\{
    FavProductType,
    Product
};

class ProductType extends Model
{
    use HasFactory;

    public function favProductTypes(){
        return $this->hasMany(FavProductType::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
