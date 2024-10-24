<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitSubject extends Model
{
    use HasFactory;

    protected $fillable = [
        'Unit_ID',
        'Subject_ID',
        'SubjectLecturer_ID',
    ];
}
