<?php

namespace App\Models;

use App\Enums\PhoneTypesEnum;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phone extends Model
{
    use SoftDeletes, HasUlids;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = [
        'number',
        'type',
        'notes',
        'patient_id',
        'created_by',
    ];

    protected $casts = [
        'type' => PhoneTypesEnum::class,
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
