<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\Appointment' => 'App\Policies\AppointmentPolicy',
        'App\Models\ClinicsEvaluation' => 'App\Policies\ClinicsEvaluationPolicy',
        'App\Models\DoctorClinics' => 'App\Policies\DoctorClinicsPolicy',
        'App\Models\DoctorsEvaluation' => 'App\Policies\DoctorsEvaluationPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('update-post', function ($user) {
        //     if ($user->type == 'admin') {
        //         return Response::allow();
        //     }

        //     return Response::deny('Você precisa ter permissão de admin');
        // });

        // Gate::define('delete-post', function ($user, $post) {
        //     if ($post->owner == $user->id) {
        //         return Response::allow();
        //     }

        //     return Response::deny('Somente o dono pode excluir um post');
        // });
    }
}
