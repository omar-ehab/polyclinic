<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        $managerRole = Role::create(['name' => 'manager']);
        $doctorRole = Role::create(['name' => 'doctor']);
        $receptionistRole = Role::create(['name' => 'receptionist']);


        # governorates CRUD
        $governoratesReadPermission = Permission::create(['name' => 'read governorates']);

        # regions CRUD
        $regionsReadPermission = Permission::create(['name' => 'read regions']);

        # clinics CRUD
        $clinicsCreatePermission = Permission::create(['name' => 'create clinics']);
        $clinicsReadPermission = Permission::create(['name' => 'read clinics']);
        $clinicsUpdatePermission = Permission::create(['name' => 'update clinics']);
        $clinicsDeletePermission = Permission::create(['name' => 'delete clinics']);

        # clinic schedule CRUD
        $clinicScheduleCreatePermission = Permission::create(['name' => 'create clinic schedule']);
        $clinicScheduleReadPermission = Permission::create(['name' => 'read clinic schedule']);
        $clinicScheduleUpdatePermission = Permission::create(['name' => 'update clinic schedule']);
        $clinicScheduleDeletePermission = Permission::create(['name' => 'delete clinic schedule']);

        # doctors CRUD
        $doctorsCreatePermission = Permission::create(['name' => 'create doctors']);
        $doctorsReadPermission = Permission::create(['name' => 'read doctors']);
        $doctorsUpdatePermission = Permission::create(['name' => 'update doctors']);
        $doctorsDeletePermission = Permission::create(['name' => 'delete doctors']);

        # appointments CRUD
        $appointmentsCreatePermission = Permission::create(['name' => 'create appointments']);
        $appointmentsReadPermission = Permission::create(['name' => 'read appointments']);
        $appointmentsUpdatePermission = Permission::create(['name' => 'update appointments']);
        $appointmentsDeletePermission = Permission::create(['name' => 'delete appointments']);


        # patient basic info CRUD
        $patientCreateBasicInfoPermission = Permission::create(['name' => 'create patient basic info']);
        $patientReadBasicInfoPermission = Permission::create(['name' => 'read patient basic info']);
        $patientUpdateBasicInfoPermission = Permission::create(['name' => 'update patient basic info']);
        $patientDeletePermission = Permission::create(['name' => 'delete patient']);

        # bills CRUD
        $billsCreatePermission = Permission::create(['name' => 'create bills info']);
        $billsReadPermission = Permission::create(['name' => 'read bills info']);
        $billsUpdatePermission = Permission::create(['name' => 'update bills info']);

        # patient medicines CRUD
        $patientCreateMedicinesPermission = Permission::create(['name' => 'create patient medicines']);
        $patientReadMedicinesPermission = Permission::create(['name' => 'read patient medicines']);
        $patientUpdateMedicinesPermission = Permission::create(['name' => 'update patient medicines']);
        $patientDeleteMedicinesPermission = Permission::create(['name' => 'delete patient medicines']);

        # patient diseases CRUD
        $patientCreateDiseasesPermission = Permission::create(['name' => 'create patient diseases']);
        $patientReadDiseasesPermission = Permission::create(['name' => 'read patient diseases']);
        $patientUpdateDiseasesPermission = Permission::create(['name' => 'update patient diseases']);
        $patientDeleteDiseasesPermission = Permission::create(['name' => 'delete patient diseases']);

        # patient surgeries CRUD
        $patientCreateSurgeriesPermission = Permission::create(['name' => 'create patient surgeries']);
        $patientReadSurgeriesPermission = Permission::create(['name' => 'read patient surgeries']);
        $patientUpdateSurgeriesPermission = Permission::create(['name' => 'update patient surgeries']);
        $patientDeleteSurgeriesPermission = Permission::create(['name' => 'delete patient surgeries']);


        $managerRole->syncPermissions([
            $clinicsCreatePermission,
            $clinicsReadPermission,
            $clinicsUpdatePermission,
            $clinicsDeletePermission,
            $clinicScheduleCreatePermission,
            $clinicScheduleReadPermission,
            $clinicScheduleUpdatePermission,
            $clinicScheduleDeletePermission,
            $doctorsCreatePermission,
            $doctorsReadPermission,
            $doctorsUpdatePermission,
            $doctorsDeletePermission,
            $appointmentsCreatePermission,
            $appointmentsReadPermission,
            $appointmentsUpdatePermission,
            $appointmentsDeletePermission,
            $patientCreateBasicInfoPermission,
            $patientReadBasicInfoPermission,
            $patientUpdateBasicInfoPermission,
            $patientDeletePermission,
            $billsCreatePermission,
            $billsReadPermission,
            $billsUpdatePermission,

        ]);

        $doctorRole->syncPermissions([
            $appointmentsCreatePermission,
            $appointmentsReadPermission,
            $appointmentsUpdatePermission,
            $appointmentsDeletePermission,
            $patientCreateBasicInfoPermission,
            $patientReadBasicInfoPermission,
            $patientUpdateBasicInfoPermission,
            $patientDeletePermission,
            $patientCreateMedicinesPermission,
            $patientReadMedicinesPermission,
            $patientUpdateMedicinesPermission,
            $patientDeleteMedicinesPermission,
            $patientCreateDiseasesPermission,
            $patientReadDiseasesPermission,
            $patientUpdateDiseasesPermission,
            $patientDeleteDiseasesPermission,
            $patientCreateSurgeriesPermission,
            $patientReadSurgeriesPermission,
            $patientUpdateSurgeriesPermission,
            $patientDeleteSurgeriesPermission,
            $billsCreatePermission,
            $billsReadPermission,
            $billsUpdatePermission,
        ]);

        $receptionistRole->syncPermissions([
            $governoratesReadPermission,
            $regionsReadPermission,
            $clinicsReadPermission,
            $clinicScheduleReadPermission,
            $doctorsReadPermission,
            $appointmentsCreatePermission,
            $appointmentsReadPermission,
            $appointmentsUpdatePermission,
            $appointmentsDeletePermission,
            $patientCreateBasicInfoPermission,
            $patientReadBasicInfoPermission,
            $patientUpdateBasicInfoPermission,
            $billsCreatePermission,
            $billsReadPermission,
            $billsUpdatePermission,
        ]);


    }
}
