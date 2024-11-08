<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Discussion extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subject_id',
        'discussionTitle',
        'discussionDetails',
    ];

    public function discussion(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function discussions(): BelongsTo {
        return $this->belongsTo(Subject::class);
    }

    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }
}