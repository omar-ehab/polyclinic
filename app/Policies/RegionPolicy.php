<?php

namespace App\Policies;

use App\Models\User;

class RegionPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('read regions');
    }

    public function view(User $user): bool
    {
        return $user->can('read regions');
    }

    public function create(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function update(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function delete(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function restore(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function forceDelete(User $user): bool
    {
        return $user->hasRole('admin');
    }
}
