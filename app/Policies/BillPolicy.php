<?php

namespace App\Policies;

use App\Models\Bill;
use App\Models\User;

class BillPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('read bills info');
    }

    public function view(User $user, Bill $bill): bool
    {
        if ($user->can('read bills info')) {
            if ($user->hasRole('doctor')) {
                return $user->id === $bill->appointment->clinicSchedule->doctor->user_id;
            }
            return true;
        }
        return false;
    }

    public function create(User $user): bool
    {
        return $user->can('create bills info');
    }

    public function update(User $user, Bill $bill): bool
    {
        if ($user->can('update bills info')) {
            if ($user->hasRole('doctor')) {
                return $user->id === $bill->appointment->clinicSchedule->doctor->user_id;
            }
            return true;
        }
        return false;
    }

    public function delete(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function restore(User $user): bool
    {
        return $user->hasRole('admin') || $user->hasRole('manager');
    }

    public function forceDelete(User $user): bool
    {
        return $user->hasRole('admin');
    }
}
