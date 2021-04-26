<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Topic;

class FavTopic extends Model
{
    use HasFactory;

    public function topic(){
        return $this->belongsTo(Topic::class);
    }
}
