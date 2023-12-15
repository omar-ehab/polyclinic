<?php

namespace App\Models;

use App\Enums\GenderEnum;
use App\Enums\UserThemeEnum;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasRoles, SoftDeletes, HasUlids, HasFactory;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'avatar_url',
        'theme'
    ];

    /**
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'gender' => GenderEnum::class,
        'theme' => UserThemeEnum::class,
    ];


    public function doctor(): HasOne
    {
        return $this->hasOne(Doctor::class);
    }

    public function createdClinicSchedule(): HasMany
    {
        return $this->hasMany(ClinicSchedule::class, 'created_by');
    }

    public function createdPatients(): HasMany
    {
        return $this->hasMany(Patient::class, 'created_by');
    }

    public function createdPhones(): HasMany
    {
        return $this->hasMany(Phone::class, 'created_by');
    }

    public function createdPatientMedicines(): HasMany
    {
        return $this->hasMany(PatientMedicine::class, 'created_by');
    }

    public function createdPatientSurgeries(): HasMany
    {
        return $this->hasMany(PatientSurgery::class, 'created_by');
    }

    public function createdPatientChronicDiseases(): HasMany
    {
        return $this->hasMany(PatientChronicDisease::class, 'created_by');
    }

    public function createdAppointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'created_by');
    }
}
