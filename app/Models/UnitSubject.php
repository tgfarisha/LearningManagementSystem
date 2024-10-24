<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitSubject extends Model
{
    use HasFactory;
    protected $fillable = [
        'unit_id',
        'subject_id',
        'subject_lecturer_id',
    ];
}
