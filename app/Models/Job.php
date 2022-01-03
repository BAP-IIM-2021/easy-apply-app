<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'label', 
        'salary',
        'description',
        'employer_id',
        'location_id',
        'working_mode_id',
        'contract_type_id',
        'language_id',
        'activity_id',
    ];


    public function employer(){
        return $this->belongsTo(Employer::class);
    }

    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function working_mode(){
        return $this->belongsTo(WorkingMode::class);
    }

    public function contract_type(){
        return $this->belongsTo(ContractType::class);
    }

    public function language(){
        return $this->belongsTo(Language::class);
    }

    public function activity(){
        return $this->belongsTo(Activity::class);
    }

    public function missions(){
        return $this->belongsToMany(Mission::class, 'job_missions', 'job_id', 'mission_id')->withTimestamps();
    }

    public function candidates(){
        return $this->belongsToMany(Candidate::class, 'nominations', 'job_id', 'candidate_id')->withPivot('date', 'status')->withTimestamps();
    }

}
