<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'first_name', 'last_name', 'gender', 'date_of_birth', 'admission_date', 'class_id', 'address', 'phone_number', 'email'
    ];
    protected $table = 'students';

    public function class()
    {
        return $this->belongsTo(ClassModel::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}
