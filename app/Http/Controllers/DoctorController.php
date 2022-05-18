<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request; 
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;

class DoctorController extends Controller
{
    /**
     * Lista os médicos
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $doctors = Doctor::where('nome', 'LIKE', "%$keyword%")
                ->orWhere('especialidade', 'LIKE', "%$keyword%")
                ->orWhere('localizacoes', 'LIKE', "%$keyword%")
                ->orWhere('convenios', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $doctors = Doctor::latest()->paginate($perPage);
        }

        return view('doctors.index', compact('doctors'));
    }

    /**
     * Mostra um médico específico
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id): View
    {
        $doctor = Doctor::findOrFail($id);

        return view('doctors.show',[
            'doctor' => $doctor
        ]);
    }

    /** 
     * Exibe o formulário de cadastro
     *
     * @return View
     */
    public function create(): View
    {
        return view('doctors.create');
    }
    
    /** Cria um médico no banco de dados */
    public function store(Request $request): RedirectResponse
    {
        // Image Upload
        // if($request->hasFile('image') && $request->file('image')->isValid()) {

        //     $requestImage = $request->image;
            
        //     $extension = $requestImage->extension();

        //     $imageName = md5($requestImage->getDoctorOriginalName() . strtotime("now")) . "." . $extension;

        //     $requestImage->move(public_path("img/doctors"), $imageName);

        //     $patient->image = $imageName;

        // }

        $dados = $request->except('_token');
        $dados['password'] = Hash::make($dados['password']);

        Doctor::create($dados);

        return redirect('doctors/login');
    }

    /**
     * Mostra o formulário de edição
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id): View
    {
        $doctor = Doctor::find($id);

        return view('doctors.edit', [
            'doctor' => $doctor
        ]);
    }

    /**
     * Atualiza o médico no banco de dados
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        $doctor = Doctor::find($id);

        $doctor->update([
            'email' => $request->email,
            'password' => $request->password,
            'nome' => $request->nome,
            'dataDeNascimento' => $request->dataDeNascimento,
            'rg' => $request->rg,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'cep' => $request->cep,
            'especialidade' => $request->especialidade,
            'localizacoes' => $request->localizacoes,
            'valorDaConsulta' => $request->valorDaConsulta,
            'convenios' => $request->convenios
        ]);

        return redirect('doctors');
    }

    /**
     * Apaga um médico no banco de dados
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $doctor = Doctor::find($id);

        $doctor->delete();

        return redirect('doctors');
    }

    /**
     * Mostra o formulário de login
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function login()
    {
        return view('doctors.login');
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
 
        if (Auth::guard('doctor')->attempt($dados, $request->filled('remember'))) {
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
        Auth::guard('doctor')->logout();
 
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
        return view('doctors.passwords.email');
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
        return view('doctors.passwords.reset');
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
            function ($doctor, $password) {
                $doctor->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
 
                $doctor->save();
 
                event(new PasswordReset($doctor));
            }
        );
  
        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
           : back()->withErrors(['email' => [__($status)]]);
    }
}
