<?php

namespace App\Policies;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Clinic;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class AppointmentPolicy 
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Patient $patient
     * @param  \App\Models\Doctor $doctor
     * @param  \App\Models\Clinic $clinic
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Patient $patient, Doctor $doctor, Clinic $clinic)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Patient $patient
     * @param  \App\Models\Doctor $doctor
     * @param  \App\Models\Clinic $clinic
     * @param  \App\Models\Appointment $appointment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Patient $patient, Doctor $doctor, Clinic $clinic, Appointment $appointment)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Patient $patient
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Patient $patient)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Patient $patient
     * @param  \App\Models\Doctor $doctor
     * @param  \App\Models\Clinic $clinic
     * @param  \App\Models\Appointment $appointment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Patient $patient, Doctor $doctor, Clinic $clinic, Appointment $appointment)
    {
        if ($appointment->patient_id == $patient->id || $appointment->doctor_id == $doctor->id || $appointment->clinic_id == $clinic->id) { 
            return Response::allow();
        }

        return Response::deny('Somente o dono pode excluir um post');
    }

}