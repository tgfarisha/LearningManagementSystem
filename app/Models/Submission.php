<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'submissionName',
        'submissionMode',
        'submissionDue',
        'submissionTime',
        'submissionDescription',
        'submissionPublished',
    ];
}
