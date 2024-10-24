<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'Staff_ID',
        'materialTitle',
        'materialDocument',
        'materialCreatedDate',
        'materialPublished',
    ];
}
