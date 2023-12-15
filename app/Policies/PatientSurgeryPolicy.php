<?php

namespace App\Policies;

use App\Models\User;

class PatientSurgeryPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('read patient surgeries');
    }

    public function view(User $user): bool
    {
        return $user->can('read patient surgeries');
    }

    public function create(User $user): bool
    {
        return $user->can('create patient surgeries');
    }

    public function update(User $user): bool
    {
        return $user->can('update patient surgeries');
    }

    public function delete(User $user): bool
    {
        return $user->can('delete patient surgeries');
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
