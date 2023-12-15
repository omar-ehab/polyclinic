<?php

namespace App\Policies;

use App\Models\Appointment;
use App\Models\User;

class AppointmentPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('read appointments');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Appointment $appointment): bool
    {
        if ($user->can('read appointments')) {
            if ($user->hasRole('doctor') && $user->id === $appointment->clinicSchedule->doctor->user_id) {
                return true;
            }
            if ($user->hasRole('receptionist') || $user->hasRole('manager') || $user->hasRole('admin')) {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create appointments');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Appointment $appointment): bool
    {
        if ($user->can('update appointments')) {
            if ($user->hasRole('doctor') && $user->id === $appointment->clinicSchedule->doctor->user_id) {
                return true;
            }
            if ($user->hasRole('receptionist') || $user->hasRole('manager') || $user->hasRole('admin')) {
                return true;
            }
            if ($user->id === $appointment->created_by) {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Appointment $appointment): bool
    {
        if ($user->can('delete appointments')) {
            if ($user->hasRole('doctor') && $user->id === $appointment->clinicSchedule->doctor->user_id) {
                return true;
            }
            if ($user->hasRole('receptionist') || $user->hasRole('manager') || $user->hasRole('admin')) {
                return true;
            }
            if ($user->id === $appointment->created_by) {
                return true;
            }
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user): bool
    {
        return $user->hasRole('admin') || $user->hasRole('manager');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user): bool
    {
        return $user->hasRole('admin');
    }
}
