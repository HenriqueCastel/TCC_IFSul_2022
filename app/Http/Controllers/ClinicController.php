<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Clinic;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password; 

class ClinicController extends Controller
{
    /**
     * Lista as clínicas
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $clinics = Clinic::where('nome', 'LIKE', "%$keyword%")
                ->orWhere('endereco', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $clinics = Clinic::latest()->paginate($perPage);
        }

        return view('clinics.index', compact('clinics'));
    }

    /**
     * Mostra uma clínica específica
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id): View
    {
        $clinic = Clinic::findOrFail($id);

        return view('clinics.show',[
            'clinic' => $clinic
        ]);
    }

    /**
     * Exibe o formulário de cadastro
     *
     * @return View
     */
    public function create(): View
    {
        return view('clinics.create');
    }
    
    /** Cria uma clínica no banco de dados */
    public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'email' => ['required', 'string', 'max:100', 'unique:clinics'],
        //     'password' => ['required', 'string', 'min:8', 'max:32'],
        //     'nome' => ['required', 'string', 'max:100'],
        //     'cnpj' => ['required', 'string', 'min:14', 'max:18', 'unique:clinics'],
        //     'telefone' => ['required', 'string', 'min:8', 'max:15'],
        //     'endereco' => ['required', 'string', 'max:200'],
        //     'cep' => ['required', 'string', 'min:8', 'max:9'],
        //     'descricao' => ['required', 'string', 'max:200']
        // ]);

        $dados = $request->except('_token');
        $dados['password'] = Hash::make($dados['password']);

        Clinic::create($dados);

        return redirect('clinics/login');
    }

    /**
     * Mostra o formulário de edição
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id): View
    {
        $clinic = Clinic::find($id);

        return view('clinics.edit', [
            'clinic' => $clinic
        ]);
    }

    /**
     * Atualiza a clínica no banco de dados
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        $clinic = Clinic::find($id);

        $clinic->update([
            'email' => $request->email,
            'password' => $request->password,
            'nome' => $request->nome,
            'cnpj' => $request->cnpj,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'cep' => $request->cep,
            'descricao' => $request->descricao
        ]);

        return redirect('clinics');
    }

    /**
     * Apaga uma clínica no banco de dados
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $clinic = Clinic::find($id);

        $clinic->delete();

        return redirect('clinics');
    }

    /**
     * Mostra o formulário de login
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function login()
    {
        return view('clinics.login');
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
 
        if (Auth::guard('clinic')->attempt($dados, $request->filled('remember'))) {
            $request->session()->regenerate();
 
            return redirect()->intended('clinics');
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
        Auth::guard('clinic')->logout();
 
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
        return view('clinics.passwords.email');
    }
  
    /**
     * Envia a mensagem de email para o endereço do usuário
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
        return view('clinics.passwords.reset');
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
            function ($clinic, $password) {
                $clinic->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $clinic->save();
 
                event(new PasswordReset($clinic));
            }
        );
  
       return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
