<?php

namespace App\Policies;

use App\Models\User;

class PatientMedicinePolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('read patient medicines');
    }

    public function view(User $user): bool
    {
        return $user->can('read patient medicines');
    }

    public function create(User $user): bool
    {
        return $user->can('create patient medicines');
    }

    public function update(User $user): bool
    {
        return $user->can('update patient medicines');
    }

    public function delete(User $user): bool
    {
        return $user->can('delete patient medicines');
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
