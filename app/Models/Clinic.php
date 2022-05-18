<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Clinic extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['email', 'password', 'nome', 'cnpj', 'telefone', 'endereco', 'cep', 'descricao'];

    /**
     * Define a relação com avaliação recebida
     *
     * @return void
     */
    public function clinicsEvaluations()
    {
        return $this->hasMany(ClinicsEvaluation::class, 'clinic_id', 'id');
    }

    /**
     * Define a relação com consulta
     *
     * @return void
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'clinic_id', 'id');
    }

    /**
     * Define a relação com médico
     *
     * @return void
     */
     public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_clinics', 'clinic_id', 'doctor_id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
