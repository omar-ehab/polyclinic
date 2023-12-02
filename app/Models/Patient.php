<?php

namespace App\Models;

use App\Enums\GenderEnum;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes, HasUlids, HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $fillable = [
        'full_name',
        'birth_date',
        'gender',
        'job',
        'region_id',
        'created_by'
    ];

    protected $casts = [
        'birth_date' => 'date',
        'gender' => GenderEnum::class
    ];

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function phones(): HasMany
    {
        return $this->hasMany(Phone::class);
    }

    public function medicines(): HasMany
    {
        return $this->hasMany(PatientMedicine::class);
    }

    public function chronicDiseases(): HasMany
    {
        return $this->hasMany(PatientChronicDisease::class);
    }

    public function surgeries(): HasMany
    {
        return $this->hasMany(PatientSurgery::class);
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
