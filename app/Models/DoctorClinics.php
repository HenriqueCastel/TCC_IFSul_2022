<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorClinics extends Model
{
    protected $fillable = ['doctor_id', 'clinic_id'];

    /**
     * Define a relação com o médico
     *
     * @return void
     */
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_id', 'id');
    }

    /**
     * Define a relação com a clínica
     *
     * @return void
     */
    public function clinics()
    {
        return $this->belongsToMany(Clinic::class, 'clinic_id', 'id');
    }
}