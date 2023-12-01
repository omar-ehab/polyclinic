<?php

namespace App\Enums;

enum AppointmentsTypesEnum: string
{
    case Examination = 'examination';
    case FOLLOW_UP = 'follow_up';
    case WORK = 'work';
}
