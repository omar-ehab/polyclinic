<?php

namespace App\Policies;

use App\Models\User;

class DoctorPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('read doctors');
    }

    public function view(User $user): bool
    {
        return $user->can('read doctors');
    }

    public function create(User $user): bool
    {
        return $user->can('create doctors');
    }

    public function update(User $user): bool
    {
        return $user->can('update doctors');
    }

    public function delete(User $user): bool
    {
        return $user->can('delete doctors');
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
