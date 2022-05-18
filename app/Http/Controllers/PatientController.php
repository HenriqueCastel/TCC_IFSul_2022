<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;

class PatientController extends Controller
{
    /**
     * Lista os pacientes
     *
     * @return View
     */
    public function index(): View
    {
        $patients = Patient::get();

        return view('patients.index', [
            'patients' => $patients
        ]);
    }

    /**
     * Mostra um paciente específico
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id): View
    {
        $patient = Patient::findOrFail($id);

        return view('patients.show',[
            'patient' => $patient
        ]);
    }

    /**
     * Exibe o formulário de cadastro
     *
     * @return View
     */
    public function create(): View
    {
        return view('patients.create');
    }
    
    /** Cria um paciente no banco de dados */
    public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'email' => ['required', 'string', 'max:100', 'unique:patients'],
        //     'password' => ['required', 'string', 'min:8', 'max:32'],
        //     'nome' => ['required', 'string', 'max:100'],
        //     'dataDeNascimento' => ['required', 'string', 'max:10'],
        //     'rg' => ['required', 'int', 'min:10', 'max:10', 'unique:patients'],
        //     'cpf' => ['required', 'string', 'min:11', 'max:14', 'unique:patients'],
        //     'telefone' => ['required', 'string', 'min:8', 'max:14'],
        //     'endereco' => ['required', 'string', 'max:200'],
        //     'cep' => ['required', 'string', 'min:8', 'max:9'],
        // ]);

        // Image Upload
        // if($request->hasFile('image') && $request->file('image')->isValid()) {

        //     $requestImage = $request->image;
            
        //     $extension = $requestImage->extension();

        //     $imageName = md5($requestImage->getPatientOriginalName() . strtotime("now")) . "." . $extension;

        //     $requestImage->move(public_path("img/patients"), $imageName);

        //     $patient->image = $imageName;

        // }

        $dados = $request->except('_token');
        $dados['password'] = Hash::make($dados['password']);

        Patient::create($dados);

        return redirect('patients/login');
    }

    /**
     * Mostra o formulário de edição
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id): View
    {
        $patient = Patient::find($id);

        return view('patients.edit', [
            'patient' => $patient
        ]);
    }

    /**
     * Atualiza o paciente no banco de dados
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        $patient = Patient::find($id);

        $patient->update([
            'email' => $request->email,
            'password' => $request->password,
            'nome' => $request->nome,
            'dataDeNascimento' => $request->dataDeNascimento,
            'rg' => $request->rg,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'cep' => $request->cep
        ]);

        return redirect('patients');
    }

    /**
     * Apaga um paciente no banco de dados
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $patient = Patient::find($id);

        $patient->delete();

        return redirect('patients');
    }

    /**
     * Mostra o formulário de login
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function login()
    {
        return view('patients.login');
    }
  
    /** 
     * Realiza login com os dados enviados
     *
     * @param Request $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function logar(Request $request)
    {
        $dados = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
 
        if (Auth::guard('patient')->attempt($dados, $request->filled('remember'))) {
            $request->session()->regenerate();
 
            return redirect()->intended('doctors');
        }
 
        return back()->withErrors([
            'email' => 'O email e/ou senha são inválidos'
        ]);
    } 
 
    /**
     * Realiza logout do usuário
     *
     * @param Request $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('patient')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
 
        return redirect('/');
    } 

    /**
     * Mostra o formulário para requisitar mensagem de recuperação de senha
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function request()
    {
        return view('patients.passwords.email');
    }
 
    /**
     * Envia a mensagem de email para o endereço do usupario
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function email(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email']
        ]);
 
        $status = Password::sendResetLink(
            $request->only('email')
        );
 
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }
 
    /**
     * Mostra o form de alteração da senha
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function reset()
    {
        return view('patients.passwords.reset');
    }
 
    /**
     * Realiza a alteração da senha no banco de dados 
     *
     * @param Request $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
 
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($patient, $password) {
                $patient->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $patient->save();

                event(new PasswordReset($patient));
            }
        );
 
        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
