<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Lead;

class Information extends Model
{
    use HasFactory;

    public function lead(){
        return $this->belongsTo(Lead::class);
    }
}
