<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\{
    Information,
    FavProductType,
    FavTopic,
    Contact,
    SocialMedia
};

class Lead extends Model
{
    use HasFactory;

    public function information(){
        return $this->hasOne(Information::class);
    }

    public function favProductTypes(){
        return $this->hasMany(FavProductType::class);
    }

    public function favTopics(){
        return $this->hasMany(FavTopic::class);
    }

    public function contacts(){
        return $this->hasMany(Contact::class);
    }



    public function socialMedia(){
        return $this->belongsTo(SocialMedia::class);
    }

}
