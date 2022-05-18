<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Doctor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['email', 'password', 'nome', 'dataDeNascimento', 'rg', 'cpf', 'telefone', 'endereco', 'cep', 'especialidade', 'localizacoes', 'valorDaConsulta', 'convenios'];

    /**
     * Define a relação com avaliação recebida
     *
     * @return void
     */
    public function doctorsEvaluations()
    {
        return $this->hasMany(DoctorsEvaluation::class, 'doctor_id', 'id');
    } 

    /**
     * Define a relação com a consulta
     *
     * @return void
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'doctor_id', 'id');
    } 

    /**
     * Define a relação com clínicas
     *
     * @return void
     */
     public function clinics()
    {
        return $this->belongsToMany(Clinic::class, 'doctor_clinics', 'doctor_id', 'clinic_id');
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
