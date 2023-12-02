<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use SoftDeletes, HasUlids, HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $fillable = [
        'user_id',
        'examination_session_period',
        'follow_up_session_period',
        'work_session_period',
        'notification_before_clinic_schedule',
        'notification_before_every_appointment',
        'email_notification',
        'push_notification',
        'speciality',
        'supervisory_level',
    ];

    protected $casts = [
        'examination_session_period' => 'integer',
        'follow_up_session_period' => 'integer',
        'work_session_period' => 'integer',
        'notification_before_clinic_schedule' => 'boolean',
        'notification_before_every_appointment' => 'boolean',
        'email_notification' => 'boolean',
        'push_notification' => 'boolean'
    ];

    public $preventsLazyLoading = true;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function clinicSchedules(): HasMany
    {
        return $this->hasMany(ClinicSchedule::class);
    }
}
