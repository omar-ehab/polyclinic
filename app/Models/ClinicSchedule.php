<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClinicSchedule extends Model
{
    use SoftDeletes, HasUlids;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = [
        'clinic_id',
        'doctor_id',
        'date',
        'start_time',
        'end_time',
        'created_by'
    ];

    protected $casts = [
        'date' => 'immutable_date',
        'start_time' => 'immutable_datetime:H:i',
        'end_time' => 'immutable_datetime:H:i',
    ];
    public $preventsLazyLoading = true;

    public function clinic(): BelongsTo
    {
        return $this->belongsTo(Clinic::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
