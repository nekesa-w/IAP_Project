<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $primaryKey = 'courses_id';

    protected $fillable = [
        'course_id',
        'course_name',
        'faculty_id',
        'role',
        'created_at',
        'updated_at',
    ];

    public function getFaculties()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id');
    }
}
