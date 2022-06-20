<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'department'
    ];

    // relationships one to many classrooms to student_classrooms
    public function student_classrooms()
    {
        return $this->hasMany(StudentClassroom::class, 'classrooms_id', 'id');
    }
}
