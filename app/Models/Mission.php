<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    public function jobs(){
        return $this->belongsToMany(Job::class,'job_missions', 'mission_id', 'job_id')->withTimestamps();
    }
}
