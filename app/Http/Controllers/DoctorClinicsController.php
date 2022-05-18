<?php

namespace App\Http\Controllers;

use App\Models\DoctorClinics;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DoctorClinicsController extends Controller
{
    /**
     * Exibe o formulário de criação
     *
     * @return View
     */
    public function create(): View
    {
        return view('doctorsClinics.create');
    }

    /** Cria uma relação entre médico e clínica no banco de dados */
    public function store(Request $request): RedirectResponse
    {
        $dados = $request->except('_token');

        DoctorClinics::create($dados);
 
        return redirect('/doctors');
    }

    /**
     * Apaga uma relação de médico e clínica no banco de dados
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $doctorClinics = DoctorClinics::find($id);

        $doctorClinics->delete();

        return redirect('/doctors');
    }
}
