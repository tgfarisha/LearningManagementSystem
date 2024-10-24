<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'Staff_ID',
        'UnitSubject_ID',
        'announcementTitle',
        'announcementDetails',
        'announcementStatus',
        'announcementPublished'
    ];
}
