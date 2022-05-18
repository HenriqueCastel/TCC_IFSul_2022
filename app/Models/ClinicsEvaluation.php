<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicsEvaluation extends Model
{
    protected $fillable = ['nota', 'comentario', 'patient_id', 'clinic_id'];

    /**
     * Define a relação com o paciente
     *
     * @return void
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

    /**
     * Define a relação com a clínica
     *
     * @return void
     */
    public function clinic()
    {
        return $this->belongsTo(Clinic::class, 'clinic_id', 'id');
    }
}