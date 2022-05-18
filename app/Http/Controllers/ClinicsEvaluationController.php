<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\ClinicsEvaluation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Gate;  

class ClinicsEvaluationController extends Controller
{
    /**
     * Lista as avaliações das clínicas
     *
     * @return View
     */
    public function index()
    {
        $clinicsEvaluations = ClinicsEvaluation::with('clinic', 'patient')->get();

        return view('clinicsEvaluations.index', compact('clinicsEvaluations'));
    }

    /**
     * Mostra uma avaliação de clínica específica
     *
     * @param  ClinicsEvaluation  $clinicsEvaluation
     * @return \Illuminate\Http\Response
     */
    public function show(ClinicsEvaluation $clinicsEvaluation)
    {
        $clinicsEvaluation->load(['patient', 'clinic']);

        return view('clinicsEvaluations.show', [
            'clinicsEvaluation' => $clinicsEvaluation
        ]);
    }

    /**
     * Exibe o formulário de avaliação
     *
     * @return View
     */
    public function create(): View
    {
        return view('clinicsEvaluations.create');
    }

    /** Cria uma avaliação de clínica no banco de dados */
    public function store(Request $request): RedirectResponse
    {
        $dados = $request->except('_token');

        ClinicsEvaluation::create($dados);

        return redirect('/clinics');
    }

    /**
     * Mostra o formulário para edição
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id): View
    {
        $clinicsEvaluation = ClinicsEvaluation::find($id);

        return view('clinicsEvaluations.edit', compact('clinicsEvaluation'));
    }

    /**
     * Atualiza a avaliação da clínica no banco de dados
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        $clinicsEvaluation = ClinicsEvaluation::find($id);

        $clinicsEvaluation->update([
            'nota' => $request->nota,
            'comentario' => $request->comentario,
            'patient_id' => $request->patient->id,
            'clinic_id' => $request->clinic->id
        ]);

        return redirect('/clinicsEvaluations');
    }

    /**
     * Apaga uma avaliação de clínica no banco de dados
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $clinicsEvaluation = ClinicsEvaluation::find($id);

        $clinicsEvaluation->delete();

        return redirect('/clinicsEvaluations');
    }
}
