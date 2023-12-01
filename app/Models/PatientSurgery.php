<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientSurgery extends Model
{
    use SoftDeletes, HasUlids;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $fillable = [
        'patient_id',
        'name',
        'description',
        'date',
        'surgeon',
        'created_by',
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
