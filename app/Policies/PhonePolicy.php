<?php

namespace App\Policies;

use App\Models\User;

class PhonePolicy
{

    public function viewAny(User $user): bool
    {
        return $user->can('read patient basic info');
    }

    public function view(User $user): bool
    {
        return $user->can('read patient basic info');
    }

    public function create(User $user): bool
    {
        return $user->can('create patient basic info');
    }

    public function update(User $user): bool
    {
        return $user->can('update patient basic info');
    }

    public function delete(User $user): bool
    {
        return $user->can('delete patient');
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
