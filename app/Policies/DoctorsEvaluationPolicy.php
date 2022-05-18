<?php

namespace App\Policies;

use App\Models\DoctorsEvaluation;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class DoctorsEvaluationPolicy
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
     * @param  \App\Models\DoctorsEvaluation $doctorsEvaluation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Patient $patient, Doctor $doctor, Clinic $clinic, DoctorsEvaluation $doctorsEvaluation)
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
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Patient $patient
     * @param  \App\Models\DoctorsEvaluation $doctorsEvaluation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Patient $patient, DoctorsEvaluation $doctorsEvaluation)
    {
        if ($doctorsEvaluation->patient_id == $patient->id) {
            return Response::allow();
        }
 
        return Response::deny('Somente o autor pode editar a avaliação');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Patient $patient
     * @param  \App\Models\DoctorsEvaluation $doctorsEvaluation
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Patient $patient, DoctorsEvaluation $doctorsEvaluation)
    {
        if ($doctorsEvaluation->patient_id == $patient->id) { 
            return Response::allow();
        }

        return Response::deny('Somente o autor pode excluir a avaliação');
    }

}