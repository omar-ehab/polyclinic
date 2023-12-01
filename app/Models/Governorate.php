<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Governorate extends Model
{
    use SoftDeletes, HasUlids;
    protected $guarded = ['id'];

    protected $fillable = ['name'];


    public function regions(): HasMany
    {
        return $this->hasMany(Region::class, 'governorate_id');
    }
}
