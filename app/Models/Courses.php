<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'courseName',
        'instructor',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
