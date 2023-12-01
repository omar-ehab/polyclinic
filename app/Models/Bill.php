<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill extends Model
{
    use SoftDeletes, HasUlids;

    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'patient_id',
        'appointment_id',
        'amount',
        'paid_at',
        'notes',
        'due_date',
        'created_by',
    ];

    protected $casts = [
        'paid_at' => 'immutable_datetime',
        'due_date' => 'immutable_date',
        'amount' => 'integer'
    ];
}
