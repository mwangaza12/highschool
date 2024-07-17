<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'gender', 'date_of_birth', 'hire_date', 'address', 'phone_number', 'email', 'subject_id'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function classes()
    {
        return $this->hasMany(ClassModel::class);
    }

    public function classSubjects()
    {
        return $this->hasMany(ClassSubject::class);
    }
}
