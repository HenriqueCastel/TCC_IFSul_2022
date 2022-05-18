<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['data', 'hora', 'clinic_id', 'doctor_id', 'patient_id'];

     /**
     * Define a relação com o clínica
     *
     * @return void
     */ 
     public function clinic()
     {
         return $this->belongsTo(Clinic::class, 'clinic_id', 'id');
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

     /**
     * Define a relação com o paciente
     *
     * @return void
     */
     public function patient()
     {
         return $this->belongsTo(Patient::class, 'patient_id', 'id');
     }
}