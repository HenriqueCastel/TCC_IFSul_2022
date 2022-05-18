<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Gate;  

class AppointmentController extends Controller
{
    /**
     * Lista as consultas
     * 
     * @return View
     */
    public function index()
    {
        $appointments = Appointment::with('clinic', 'doctor', 'patient')->get();

        return view('appointments.index', compact('appointments'));
    }

    /**
     * Mostra uma consulta específica
     *
     * @param  Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        $appointment->load(['clinic', 'doctor', 'patient']);

        return view('appointments.show', [
            'appointment' => $appointment
        ]);
    }

    /**
     * Exibe o formulário de agendamento
     *
     * @return View
     */
    public function create(): View
    {
        return view('appointments.create');
    }

    /** Cria uma consulta no banco de dados */
    public function store(Request $request): RedirectResponse
    {
        $dados = $request->except('_token');

        Appointment::create($dados);

        return redirect('/appointments');
    }

    /**
     * Apaga uma consulta no banco de dados
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $appointment = Appointment::find($id);

        $appointment->delete();

        return redirect('/appointments');
    }
}
