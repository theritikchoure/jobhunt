<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = ['college_name', 'degree', 'branch', 'pass_year',];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
