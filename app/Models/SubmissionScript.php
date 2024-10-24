<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmissionScript extends Model
{
    use HasFactory;

    protected $fillable = [
        'Student_ID',
        'Submission_ID',
        'submissionStatus',
        'submissionFileName',
        'submissionDocument',
    ];
}
