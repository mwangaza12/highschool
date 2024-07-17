<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_name'
    ];

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function classSubjects()
    {
        return $this->hasMany(ClassSubject::class);
    }
    
    public function schoolClass()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
