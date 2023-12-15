<?php

namespace App\Policies;

use App\Models\User;

class PatientChronicDiseasePolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('read patient diseases');
    }

    public function view(User $user): bool
    {
        return $user->can('read patient diseases');
    }

    public function create(User $user): bool
    {
        return $user->can('create patient diseases');
    }

    public function update(User $user): bool
    {
        return $user->can('update patient diseases');
    }

    public function delete(User $user): bool
    {
        return $user->can('delete patient diseases');
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
