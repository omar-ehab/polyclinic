<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->getRoleNames()->first(),
            'gender' => $this->gender,
            'avatar_url' => $this->avatar_url
        ];

        if ($request->user()->hasRole('doctor')) {
            $data['examination_session_period'] = $this->examination_session_period;
            $data['follow_up_session_period'] = $this->follow_up_session_period;
            $data['work_session_period'] = $this->work_session_period;
            $data['notification_before_clinic_schedule'] = $this->notification_before_clinic_schedule;
            $data['notification_before_every_appointment'] = $this->notification_before_every_appointment;
            $data['email_notification'] = $this->email_notification;
            $data['push_notification'] = $this->push_notification;
            $data['speciality'] = $this->speciality;
            $data['supervisory_level'] = $this->supervisory_level;
        }

        return $data;
    }
}
