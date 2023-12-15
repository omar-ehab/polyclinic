<?php

namespace App\Policies;

use App\Models\User;

class ClinicPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('read clinics');
    }

    public function view(User $user): bool
    {
        return $user->can('read clinics');
    }

    public function create(User $user): bool
    {
        return $user->can('create clinics');
    }

    public function update(User $user): bool
    {
        return $user->can('create clinics');
    }

    public function delete(User $user): bool
    {
        return $user->can('delete clinics');
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
