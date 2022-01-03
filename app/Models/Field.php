<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    public function candidates(){
        return $this->belongsToMany(Candidate::class, 'candidate_fields', 'candidate_id', 'field_id')->withPivot('year_exp')->withTimestamps();
    }
}
