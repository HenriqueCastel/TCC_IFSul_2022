<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Patient extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['email', 'password', 'nome', 'dataDeNascimento', 'rg', 'cpf', 'telefone', 'endereco', 'cep'];

    /**
     * Define a relação com avaliação realizada do médico
     *
     * @return void
     */
    public function doctorsEvaluations()
    {
        return $this->hasMany(DoctorsEvaluation::class, 'patient_id', 'id');
    }

    /**
     * Define a relação com avaliação realizada da clínica
     *
     * @return void
     */
    public function clinicsEvaluations()
    {
        return $this->hasMany(ClinicsEvaluation::class, 'patient_id', 'id');
    }

    /**
     * Define a relação com a consulta
     *
     * @return void
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'patient_id', 'id');
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
