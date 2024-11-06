<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'unit_id',
        'userName',
        'ic',
        'userGender',
        'email',
        'userContact',
        'userStaffID',
        'userStudentID',
        'password',
        'userPhoto',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function role(): HasOne {
        return $this->hasOne(Role::class);
    }

    public function announcements(): HasMany {
        return $this->hasMany(Announcement::class);
    }

    public function submissions(): HasMany {
        return $this->hasMany(Submission::class);
    }

    public function assignments(): HasMany {
        return $this->hasMany(Assignment::class);
    }

    public function unit(): BelongsTo {
        return $this->belongsTo(Unit::class);
    }

    public function submissionScript(): HasOne {
        return $this->hasOne(SubmissionScript::class);
    }

    public function discussions(): HasMany {
        return $this->hasMany(Discussion::class);
    }

    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }

    public function learningMaterial(): HasMany {
        return $this->hasMany(LearningMaterial::class);
    }

    // public function subjects(): HasMany {
    //     return $this->hasMany(Subject::class);
    // }

    public function subjectLecturers(): HasMany {
        return $this->hasMany(SubjectLecturer::class);
    }
}
