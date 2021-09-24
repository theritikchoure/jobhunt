<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    protected $table = 'internships';

    use HasFactory;

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function perk()
    {
        return $this->hasOne(Perk::class);
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function student()
    {
        return $this->belongsToMany(Student::class, 'applications');
    }
}
