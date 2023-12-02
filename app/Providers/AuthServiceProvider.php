<?php

namespace App\Providers;

use App\Models\Appointment;
use App\Models\Bill;
use App\Models\Clinic;
use App\Models\ClinicSchedule;
use App\Models\Doctor;
use App\Models\Governorate;
use App\Models\Patient;
use App\Models\PatientChronicDisease;
use App\Models\PatientMedicine;
use App\Models\PatientSurgery;
use App\Models\Phone;
use App\Models\Region;
use App\Models\User;
use App\Policies\AppointmentPolicy;
use App\Policies\BillPolicy;
use App\Policies\ClinicPolicy;
use App\Policies\ClinicSchedulePolicy;
use App\Policies\DoctorPolicy;
use App\Policies\GovernoratePolicy;
use App\Policies\PatientChronicDiseasePolicy;
use App\Policies\PatientMedicinePolicy;
use App\Policies\PatientPolicy;
use App\Policies\PatientSurgeryPolicy;
use App\Policies\PhonePolicy;
use App\Policies\RegionPolicy;
use App\Policies\UserPolicy;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Region::class => RegionPolicy::class,
        Phone::class => PhonePolicy::class,
        PatientSurgery::class => PatientSurgeryPolicy::class,
        PatientMedicine::class => PatientMedicinePolicy::class,
        PatientChronicDisease::class => PatientChronicDiseasePolicy::class,
        Patient::class => PatientPolicy::class,
        Governorate::class => GovernoratePolicy::class,
        Doctor::class => DoctorPolicy::class,
        ClinicSchedule::class => ClinicSchedulePolicy::class,
        Clinic::class => ClinicPolicy::class,
        Bill::class => BillPolicy::class,
        Appointment::class => AppointmentPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        ResetPassword::createUrlUsing(function (object $notifiable, string $token) {
            return config('app.frontend_url') . "/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
        });

        Gate::before(function ($user, $ability) {
            if ($user->hasRole('admin')) {
                return true;
            }
            return false;
        });
    }
}
