<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\{
    Lead,
    ContactType
};

class Contact extends Model
{
    use HasFactory;

    public function lead(){
        return $this->belongsTo(Lead::class);
    }

    public function contactType(){
        return $this->belongsTo(ContactType::class);
    }
}
