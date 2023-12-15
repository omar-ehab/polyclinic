<?php

namespace App\Policies;

use App\Models\User;

class GovernoratePolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('read governorates');
    }

    public function view(User $user): bool
    {
        return $user->can('read governorates');
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
