<?php

namespace App\Models;

use App\Enums\AppointmentsTypesEnum;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes, HasUlids;

    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'clinic_schedule_id',
        'patient_id',
        'created_by',
        'start_time',
        'expected_end_time',
        'end_time',
        'total_price',
        'discount',
        'is_cancelled',
        'cancellation_reason',
        'type',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'expected_end_time' => 'datetime',
        'end_time' => 'datetime',
        'total_price' => 'float',
        'discount' => 'float',
        'is_cancelled' => 'boolean',
        'type' => AppointmentsTypesEnum::class
    ];

    public function clinicSchedule(): BelongsTo
    {
        return $this->belongsTo(ClinicSchedule::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
