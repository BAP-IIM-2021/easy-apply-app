<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $guarded = [];
    //     'last_name', 
    //     'firstname',
    //     'birth_date',
    //     'address',
    //     'linkedin',
    //     'website',
    //     'phone_number',
    //     'photo',
    //     'cv',
    //     'profile_completed', 
    //     'is_profile_completed',
    //     'location_id',
    //     'status_id',
    //     'degree_id',
    //     'training_id',
    //     'year_exp_id',
    //     'user_id'
    // ];

    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function degree(){
        return $this->belongsTo(Degree::class);
    }

    public function training(){
        return $this->belongsTo(Training::class);
    }

    public function year_exp(){
        return $this->belongsTo(YearExp::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function fields(){
        return $this->belongsToMany(Field::class, 'candidate_fields', 'field_id', 'candidate_id')->withPivot('year_exp')->withTimestamps();
    }

    public function jobs(){
        return $this->belongsToMany(Job::class, 'nominations', 'candidate_id', 'job_id')->withPivot('date', 'status')->withTimestamps();
    }
}
