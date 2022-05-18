<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorsEvaluation extends Model
{
    protected $fillable = ['nota', 'comentario', 'patient_id', 'doctor_id'];

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
     * Define a relação com o médico
     *
     * @return void
     */
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }
}