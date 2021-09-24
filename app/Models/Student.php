<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   

    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'mobile', 'address', 'linkedin', 'image', 'resume',];

    protected $guard = [];

    public function education()
    {
        return $this->hasOne(Education::class);
    }

    public function internship()
    {
        return $this->belongsToMany(internship::class, 'applications');
    }
}

