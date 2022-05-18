<?php

namespace App\Http\Controllers;

use App\Models\DoctorsEvaluation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DoctorsEvaluationController extends Controller
{
    /**
     * Lista as avaliações dos médicos
     *
     * @return View
     */
    public function index()
    {
        $doctorsEvaluations = DoctorsEvaluation::with(['patient', 'doctor'])->get();

        return view('doctorsEvaluations.index', [
            'doctorsEvaluations' => $doctorsEvaluations
        ]);
    }

    /**
     * Mostra uma avaliação de médico específica
     *
     * @param  DoctorsEvaluation  $doctorsEvaluation
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorsEvaluation $doctorsEvaluation)
    {
        $doctorsEvaluation->load(['patient', 'doctor']);

        return view('doctorsEvaluations.show', [
            'doctorsEvaluation' => $doctorsEvaluation
        ]);
    }

   /**
     * Exibe o formulário de avaliação
     *
     * @return View
     */
    public function create(): View
    {
        return view('doctorsEvaluations.create');
    }

    /** Cria uma avaliação de médico no banco de dados */
    public function store(Request $request): RedirectResponse
    {
        $dados = $request->except('_token');

        DoctorsEvaluation::create($dados);

        return redirect('/doctors');
    }

    /**
     * Mostra o formulário de edição
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id): View
    {
        $doctorsEvaluation = DoctorsEvaluation::find($id);

        return view('doctorsEvaluations.edit', [
            'doctorsEvaluation' => $doctorsEvaluation
        ]);
    }

    /**
     * Atualiza a avaliação do médico no banco de dados
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        $doctorsEvaluation = DoctorsEvaluation::find($id);

        $doctorsEvaluation->update([
            'nota' => $request->nota,
            'comentario' => $request->comentario,
            'patient_id' => $request->patient->id,
            'doctor_id' => $request->doctor->id
        ]);

        return redirect('/doctorsEvaluations');
    }

    /**
     * Apaga uma avaliação de médico no banco de dados
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $doctorsEvaluation = DoctorsEvaluation::find($id);

        $doctorsEvaluation->delete();

        return redirect('/doctorsEvaluations');
    }
}
