<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

// class CourseStudent extends Model
// {
//     use HasFactory;
//     protected $fillable=[
//         'student_id',
//         'course_id',
//     ];
// }

class CourseStudent extends Pivot
{
    protected $table = 'course_student';

    public $incrementing = true;

    public $timestamps = true; // Set to false if your pivot table doesn't use timestamps

    protected $fillable=[
        'student_id',
        'course_id',
    ];
}
