<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clinic extends Model
{
    use SoftDeletes, HasUlids;

    public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
    ];

    public function schedules(): HasMany
    {
        return $this->hasMany(ClinicSchedule::class);
    }
}
