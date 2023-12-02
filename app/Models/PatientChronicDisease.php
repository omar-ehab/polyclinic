<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientChronicDisease extends Model
{
    use SoftDeletes, HasUlids, HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $fillable = [
        'patient_id',
        'disease_name',
        'illness_date',
        'created_by',
    ];

    protected $casts = [
        'illness_date' => 'date',
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
