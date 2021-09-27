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

    public function internships()
    {
        return $this->belongsToMany(Internship::class)->withPivot('status');
    }

    function shortinternships() {
        return $this->belongsToMany(Internship::class)->wherePivot('status', 2);
    }
}

