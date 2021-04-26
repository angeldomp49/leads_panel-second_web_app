<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FavTopic;

class Topic extends Model
{
    use HasFactory;

    public function favTopics(){
        return $this->hasMany(FavTopic::class);
    }
}
