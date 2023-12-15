<?php

namespace App\Policies;

use App\Models\User;

class ClinicSchedulePolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('read clinic schedule');
    }

    public function view(User $user): bool
    {
        return $user->can('read clinic schedule');
    }

    public function create(User $user): bool
    {
        return $user->can('create clinic schedule');
    }

    public function update(User $user): bool
    {
        return $user->can('update clinic schedule');
    }

    public function delete(User $user): bool
    {
        return $user->can('delete clinic schedule');
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
