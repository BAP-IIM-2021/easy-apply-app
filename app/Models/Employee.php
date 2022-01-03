<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name', 
        'address',
        'logo',
        'description',
        'company_size_id',
        'business_sector_id',
        'user_id',
    ];


    public function jobs(){
        return $this->hasMany(Job::class);
    }

    public function business_sector(){
        return $this->belongsTo(Location::class);
    }

    public function company_size(){
        return $this->belongsTo(Status::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
