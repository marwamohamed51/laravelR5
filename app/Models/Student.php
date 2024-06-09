<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Courses;

class Student extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'studentName',
        'age',
    ];

    public function courses()
    {
        return $this->belongsToMany(Courses::class);
    }
}
